#!/usr/bin/env python3
"""
Lightweight PHP-like server using Python.
Processes require/include, short-echo tags, variables, and basic echo.
"""

import http.server
import os
import re
import datetime

PORT = 8000
WEBROOT = os.path.dirname(os.path.abspath(__file__))


def process_php_file(filepath, context=None):
    """Read a PHP file, resolve includes, replace PHP expressions."""
    if context is None:
        context = {}

    if not os.path.isfile(filepath):
        return f"<!-- File not found: {filepath} -->"

    with open(filepath, "r", encoding="utf-8") as f:
        content = f.read()

    # Set PHP_SELF / SCRIPT_NAME context
    if "_request_file" not in context:
        context["_request_file"] = os.path.basename(filepath)

    # Process <?= expr ?> short echo tags (e.g. <?= date('Y'); ?>)
    content = re.sub(
        r"<\?=\s*date\(\s*['\"]Y['\"]\s*\)\s*;?\s*\?>",
        str(datetime.datetime.now().year),
        content,
    )

    # Process all <?php ... ?> blocks
    def handle_php_block(match):
        block = match.group(1)
        result = ""

        # Handle variable assignments like: $current_page = basename(...)
        var_match = re.search(r"\$(\w+)\s*=\s*basename\(", block)
        if var_match:
            var_name = var_match.group(1)
            context[var_name] = context.get("_request_file", "index.php")

        # Handle echo with ternary: echo ($var == 'val') ? 'a' : 'b';
        echo_match = re.search(
            r"echo\s+\(\s*\$(\w+)\s*==\s*['\"]([^'\"]+)['\"]\s*\)\s*\?\s*['\"]([^'\"]*?)['\"]\s*:\s*['\"]([^'\"]*?)['\"]\s*;",
            block,
        )
        if echo_match:
            var_name = echo_match.group(1)
            compare_val = echo_match.group(2)
            true_val = echo_match.group(3)
            false_val = echo_match.group(4)
            actual = context.get(var_name, "")
            result += true_val if actual == compare_val else false_val
            return result

        # Handle require/include
        includes = re.findall(
            r"(?:require_once|require|include_once|include)\s+['\"]([^'\"]+)['\"]",
            block,
        )
        for inc_file in includes:
            full_path = os.path.join(os.path.dirname(filepath), inc_file)
            result += process_php_file(full_path, context)

        return result

    content = re.sub(r"<\?php(.*?)\?>", handle_php_block, content, flags=re.DOTALL)

    return content


class PHPHandler(http.server.SimpleHTTPRequestHandler):
    def do_GET(self):
        path = self.path.split("?")[0].split("#")[0]
        if path == "/":
            path = "/index.php"

        if path.endswith(".php"):
            filepath = os.path.join(WEBROOT, path.lstrip("/"))
            if os.path.isfile(filepath):
                context = {"_request_file": os.path.basename(filepath)}
                html = process_php_file(filepath, context)
                encoded = html.encode("utf-8")
                self.send_response(200)
                self.send_header("Content-Type", "text/html; charset=utf-8")
                self.send_header("Content-Length", str(len(encoded)))
                self.end_headers()
                self.wfile.write(encoded)
            else:
                self.send_error(404, f"File not found: {path}")
        else:
            super().do_GET()

    def log_message(self, format, *args):
        print(f"[{datetime.datetime.now().strftime('%H:%M:%S')}] {args[0]}")


if __name__ == "__main__":
    os.chdir(WEBROOT)
    server = http.server.HTTPServer(("", PORT), PHPHandler)
    print(f"\n  🌐 London College running at: http://localhost:{PORT}")
    print(f"  📂 Serving from: {WEBROOT}")
    print(f"  ⏹  Press Ctrl+C to stop\n")
    try:
        server.serve_forever()
    except KeyboardInterrupt:
        print("\n  Server stopped.")
        server.server_close()
