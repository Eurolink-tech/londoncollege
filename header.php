<?php
// header.php
$current_page = basename($_SERVER['PHP_SELF'] ?? basename($_SERVER['SCRIPT_NAME'] ?? 'index.php'));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>London College | Professional Learning for Professionals</title>
  <meta name="description"
    content="London College offers world-class programmes in Logistics, Shipping, Supply Chain Management, Business, and Finance." />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Playfair+Display:wght@700;800&display=swap"
    rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
    rel="stylesheet" />

  <style>
    *,
    *::before,
    *::after {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Poppins', sans-serif;
      color: #333;
      background: #fff;
      line-height: 1.6;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    ul {
      list-style: none;
    }

    img {
      max-width: 100%;
      display: block;
    }

    /* ============ HEADER ============ */
    .site-header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 100;
      background: #fff;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
    }

    .header-inner {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 65px;
    }

    .logo-area {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .logo-image {
      height: 55px;
      width: auto;
      object-fit: contain;
    }

    .main-nav {
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .main-nav a {
      padding: 8px 14px;
      font-size: 11px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      color: #333;
      border-radius: 4px;
      transition: all 0.2s;
      white-space: nowrap;
    }

    .main-nav a:hover {
      color: #1a237e;
      background: #f0f0ff;
    }

    .main-nav a.active {
      color: #e67e22;
      background: rgba(230, 126, 34, 0.08);
    }

    .nav-dropdown {
      position: relative;
    }

    .nav-dropdown .arrow {
      font-size: 14px;
      vertical-align: middle;
    }

    .flag-icon {
      width: 30px;
      height: 20px;
      border-radius: 2px;
      overflow: hidden;
      display: flex;
      flex-direction: column;
    }

    .flag-icon .stripe-orange {
      flex: 1;
      background: #ff9933;
    }

    .flag-icon .stripe-white {
      flex: 1;
      background: #fff;
      position: relative;
    }

    .flag-icon .stripe-white::after {
      content: '●';
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      font-size: 6px;
      color: #000080;
    }

    .flag-icon .stripe-green {
      flex: 1;
      background: #138808;
    }

    .mobile-toggle {
      display: none;
      background: none;
      border: none;
      cursor: pointer;
      padding: 8px;
    }

    .mobile-toggle span {
      font-size: 28px;
      color: #333;
    }

    /* ============ HERO (Index) ============ */
    .hero {
      margin-top: 65px;
      position: relative;
      height: 340px;
      background: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.65)), linear-gradient(135deg, #1a3a2a 0%, #2d5016 30%, #1a3a2a 60%, #0d1f15 100%);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #fff;
      overflow: hidden;
    }

    .hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: 42px;
      font-weight: 800;
      margin-bottom: 8px;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.4);
    }

    .hero .subtitle {
      font-size: 14px;
      letter-spacing: 3px;
      text-transform: uppercase;
      font-weight: 400;
      opacity: 0.9;
      margin-bottom: 30px;
    }

    .campus-buttons {
      display: flex;
      gap: 12px;
      flex-wrap: wrap;
      justify-content: center;
    }

    .campus-btn {
      padding: 10px 28px;
      border-radius: 25px;
      font-size: 13px;
      font-weight: 600;
      color: #fff;
      cursor: pointer;
      border: none;
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .campus-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    }

    .btn-green {
      background: #27ae60;
    }

    .btn-orange {
      background: #e67e22;
    }

    .btn-blue {
      background: #2980b9;
    }

    .btn-emerald {
      background: #16a085;
    }

    /* ============ ABOUT SECTION (Index) ============ */
    .about-section {
      padding: 70px 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .about-section h2 {
      font-family: 'Playfair Display', serif;
      font-size: 32px;
      font-weight: 800;
      color: #1a1a2e;
      margin-bottom: 24px;
      position: relative;
      display: inline-block;
    }

    .about-section h2::after {
      content: '';
      position: absolute;
      bottom: -8px;
      left: 0;
      width: 60px;
      height: 3px;
      background: #e67e22;
      border-radius: 2px;
    }

    .about-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 50px;
      align-items: start;
      margin-top: 16px;
    }

    .about-text p {
      font-size: 14px;
      color: #555;
      line-height: 1.8;
      margin-bottom: 16px;
      text-align: justify;
    }

    .about-image {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .about-illustration {
      width: 100%;
      max-width: 450px;
      border-radius: 16px;
      overflow: hidden;
    }

    /* ============ RECRUITERS ============ */
    .recruiters-section {
      padding: 60px 20px;
      max-width: 1200px;
      margin: 0 auto;
      text-align: center;
    }

    .recruiters-section h2 {
      font-family: 'Playfair Display', serif;
      font-size: 32px;
      font-weight: 800;
      color: #1a1a2e;
      margin-bottom: 10px;
    }

    .recruiters-section h2::after {
      content: '';
      display: block;
      width: 60px;
      height: 3px;
      background: #e67e22;
      margin: 10px auto 0;
      border-radius: 2px;
    }

    .recruiters-grid {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 16px;
      margin-top: 40px;
    }

    .recruiter-card {
      padding: 20px 12px;
      border: 1px solid #eee;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 13px;
      font-weight: 700;
      letter-spacing: 0.5px;
      color: #333;
      transition: all 0.3s;
      background: #fff;
      min-height: 70px;
    }

    .recruiter-card:hover {
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      transform: translateY(-3px);
      border-color: transparent;
    }

    .rc-red {
      color: #e53e3e;
    }

    .rc-blue {
      color: #2b6cb0;
    }

    .rc-green {
      color: #38a169;
    }

    .rc-orange {
      color: #dd6b20;
    }

    .rc-yellow {
      color: #d69e2e;
    }

    .rc-darkblue {
      color: #1a237e;
    }

    /* ============ CONTACT ============ */
    .contact-section {
      padding: 60px 20px;
      max-width: 600px;
      margin: 0 auto;
      text-align: center;
    }

    .contact-section h2 {
      font-family: 'Playfair Display', serif;
      font-size: 28px;
      font-weight: 800;
      color: #1a1a2e;
      margin-bottom: 30px;
    }

    .contact-section h2::after {
      content: '';
      display: block;
      width: 60px;
      height: 3px;
      background: #e67e22;
      margin: 10px auto 0;
      border-radius: 2px;
    }

    .contact-form {
      background: #fff;
      border: 1px solid #e8e8e8;
      border-radius: 12px;
      padding: 35px 30px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 14px 16px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-family: 'Poppins', sans-serif;
      font-size: 14px;
      margin-bottom: 14px;
      transition: border-color 0.2s;
      outline: none;
      background: #fafafa;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
      border-color: #1a237e;
      background: #fff;
    }

    .contact-form textarea {
      resize: vertical;
      min-height: 100px;
    }

    .contact-form .submit-btn {
      width: 100%;
      padding: 14px;
      background: #e53e3e;
      color: #fff;
      border: none;
      border-radius: 6px;
      font-family: 'Poppins', sans-serif;
      font-size: 15px;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.2s, transform 0.2s;
    }

    .contact-form .submit-btn:hover {
      background: #c53030;
      transform: translateY(-1px);
    }

    /* ============ ABOUT PAGE ============ */
    .about-hero {
      margin-top: 65px;
      background: linear-gradient(135deg, #1a1a4e 0%, #0d0d2b 100%);
      padding: 60px 20px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .about-hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: 40px;
      font-weight: 800;
      color: #fff;
      position: relative;
    }

    .about-hero .gold-line {
      display: block;
      width: 120px;
      height: 4px;
      background: linear-gradient(90deg, #e67e22, #f1c40f);
      margin: 16px auto 0;
      border-radius: 2px;
      position: relative;
    }

    .learners-section {
      padding: 70px 20px;
      max-width: 1200px;
      margin: 0 auto;
    }

    .learners-label {
      font-size: 12px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: #e67e22;
      margin-bottom: 8px;
    }

    .learners-section h2 {
      font-family: 'Playfair Display', serif;
      font-size: 30px;
      font-weight: 800;
      color: #1a1a2e;
      margin-bottom: 28px;
      text-transform: uppercase;
    }

    .learners-grid {
      display: grid;
      grid-template-columns: 1.2fr 0.8fr;
      gap: 50px;
      align-items: start;
    }

    .learners-text p {
      font-size: 14px;
      color: #555;
      line-height: 1.9;
      margin-bottom: 16px;
      text-align: justify;
    }

    .learners-text strong {
      color: #1a1a2e;
    }

    .learners-card {
      background: linear-gradient(135deg, #1a3a4a 0%, #0d2233 100%);
      border-radius: 16px;
      overflow: hidden;
    }

    .learners-card-top {
      padding: 30px 25px;
      color: #fff;
    }

    .learners-card-top h3 {
      font-family: 'Playfair Display', serif;
      font-size: 28px;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .learners-card-bottom {
      background: linear-gradient(135deg, #e67e22, #d35400);
      padding: 25px;
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .years-badge {
      width: 70px;
      height: 70px;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 12px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color: #fff;
      flex-shrink: 0;
    }

    .years-badge .num {
      font-size: 32px;
      font-weight: 800;
      line-height: 1;
    }

    .years-badge .plus {
      font-size: 18px;
      font-weight: 700;
    }

    .years-text {
      color: #fff;
      font-size: 16px;
      font-weight: 600;
      line-height: 1.4;
    }

    .features-section {
      padding: 60px 20px;
      max-width: 1200px;
      margin: 0 auto;
      text-align: center;
    }

    .features-section-title {
      font-family: 'Playfair Display', serif;
      font-size: 32px;
      font-weight: 800;
      color: #1a1a2e;
      margin-bottom: 10px;
      text-transform: uppercase;
    }

    .features-underline {
      display: block;
      width: 60px;
      height: 3px;
      background: #e67e22;
      margin: 10px auto 0;
      border-radius: 2px;
    }

    .features-intro {
      max-width: 800px;
      margin: 20px auto 40px;
      font-size: 14px;
      color: #555;
      line-height: 1.8;
      text-align: center;
    }

    .features-card {
      background: linear-gradient(135deg, #1a1a4e 0%, #0d0d2b 100%);
      border-radius: 16px;
      padding: 45px 40px;
      text-align: left;
      max-width: 1000px;
      margin: 0 auto;
    }

    .features-card h3 {
      font-family: 'Playfair Display', serif;
      font-size: 22px;
      font-weight: 700;
      color: #fff;
      text-align: center;
      margin-bottom: 30px;
      line-height: 1.4;
    }

    .features-list {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px 40px;
    }

    .feature-item {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      color: rgba(255, 255, 255, 0.85);
      font-size: 13px;
      line-height: 1.6;
    }

    .feature-check {
      color: #e67e22;
      font-size: 20px;
      flex-shrink: 0;
      margin-top: 1px;
    }

    /* ============ FOOTER ============ */
    .site-footer {
      background: #1a1a2e;
      color: #ccc;
      padding: 50px 20px 20px;
    }

    .footer-inner {
      max-width: 1200px;
      margin: 0 auto;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: 1.5fr 1fr 1.2fr 1fr;
      gap: 35px;
      padding-bottom: 35px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .footer-col h4 {
      color: #fff;
      font-size: 15px;
      font-weight: 700;
      margin-bottom: 18px;
    }

    .footer-col p,
    .footer-col a {
      font-size: 13px;
      color: #aaa;
      line-height: 1.7;
    }

    .footer-col a {
      display: block;
      margin-bottom: 8px;
      transition: color 0.2s;
    }

    .footer-col a:hover {
      color: #ffd700;
    }

    .social-icons {
      display: flex;
      gap: 10px;
      margin-top: 10px;
    }

    .social-icon {
      width: 36px;
      height: 36px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 6px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background 0.2s;
    }

    .social-icon:hover {
      background: #e53e3e;
    }

    .social-icon svg {
      width: 16px;
      height: 16px;
      fill: #fff;
    }

    .footer-bottom {
      text-align: center;
      padding-top: 20px;
      font-size: 12px;
      color: #777;
    }

    /* ============ RESPONSIVE ============ */
    @media (max-width: 1024px) {
      .main-nav {
        display: none;
      }

      .mobile-toggle {
        display: block;
      }

      .about-grid {
        grid-template-columns: 1fr;
      }

      .learners-grid {
        grid-template-columns: 1fr;
      }

      .features-list {
        grid-template-columns: 1fr;
      }

      .recruiters-grid {
        grid-template-columns: repeat(3, 1fr);
      }

      .footer-grid {
        grid-template-columns: 1fr 1fr;
        gap: 25px;
      }
    }

    @media (max-width: 640px) {
      .hero h1 {
        font-size: 28px;
      }

      .hero .subtitle {
        font-size: 11px;
        letter-spacing: 2px;
      }

      .campus-btn {
        padding: 8px 20px;
        font-size: 12px;
      }

      .about-hero h1 {
        font-size: 28px;
      }

      .recruiters-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .footer-grid {
        grid-template-columns: 1fr;
      }

      .contact-form {
        padding: 25px 20px;
      }

      .features-card {
        padding: 30px 20px;
      }
    }
  </style>
</head>

<body>

  <!-- HEADER -->
  <header class="site-header">
    <div class="header-inner">
      <!-- Logo -->
      <a href="index.php" class="logo-area">
        <img src="logo.png" alt="London College Logo" class="logo-image" />
      </a>

      <!-- Desktop Nav -->
      <nav class="main-nav">
        <a href="index.php" class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Our Campuses</a>
        <a href="home.php" class="<?php echo ($current_page == 'home.php') ? 'active' : ''; ?>">Home</a>
        <a href="about.php" class="<?php echo ($current_page == 'about.php') ? 'active' : ''; ?>">About</a>
        <a href="courses.php"
          class="<?php echo ($current_page == 'courses.php') ? 'active nav-dropdown' : 'nav-dropdown'; ?>">Our Courses
          <span class="arrow">&#9662;</span></a>
        <a href="updates.php" class="<?php echo ($current_page == 'updates.php') ? 'active' : ''; ?>">Latest Updates</a>
        <a href="admission.php" class="<?php echo ($current_page == 'admission.php') ? 'active' : ''; ?>">Admission</a>
        <a href="contact.php" class="<?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact Us</a>
        <a href="index.php" class="logo-area">
        <img src="logo-2.png" alt="London College Logo" class="logo-image" />
      </a>
      </nav>

      <!-- Mobile Toggle -->
      <button class="mobile-toggle" onclick="this.nextElementSibling.classList.toggle('show')">
        <span class="material-symbols-outlined">menu</span>
      </button>
    </div>
  </header>