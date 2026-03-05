<?php
// contact.php
$current_page = 'contact.php';
require_once 'header.php';
?>

<style>
    /* ====== CONTACT PAGE STYLES ====== */
    body {
        background-color: #f8f9fa;
        /* Light gray background */
    }

    .contact-hero {
        margin-top: 65px;
        /* Offset for fixed header */
        height: 480px;
        background: linear-gradient(rgba(10, 20, 40, 0.6), rgba(10, 20, 40, 0.7)),
            url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80&w=2069') center/cover no-repeat;
        /* Slate blue-gray background matching design overridden with image */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 0 20px;
        color: #fff;
        position: relative;
        overflow: hidden;
    }

    .contact-hero-bg-text {
        position: absolute;
        font-size: 160px;
        color: rgba(0, 0, 0, 0.04);
        font-weight: 300;
        letter-spacing: 15px;
        z-index: 1;
        font-family: monospace;
    }

    .contact-hero h1 {
        font-size: 56px;
        font-weight: 800;
        margin-bottom: 5px;
        font-family: 'Poppins', sans-serif;
        position: relative;
        z-index: 2;
    }

    .contact-hero-underline {
        width: 60px;
        height: 4px;
        background-color: #ffc107;
        /* Yellow underline */
        margin: 15px auto 25px auto;
        position: relative;
        z-index: 2;
    }

    .contact-hero p {
        font-size: 18px;
        font-weight: 400;
        max-width: 700px;
        line-height: 1.6;
        letter-spacing: 0.5px;
        color: #e0e0e0;
        position: relative;
        z-index: 2;
    }

    .contact-container {
        max-width: 1000px;
        /* same as admission for consistency */
        margin: 60px auto 100px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.03);
        display: flex;
        overflow: hidden;
        /* For rounded corners */
    }

    .contact-info-panel {
        flex: 1;
        padding: 60px 40px 60px 60px;
    }

    .contact-form-panel {
        flex: 1;
        padding: 50px 60px;
        background: #fafafa;
        /* slightly darker background for form */
    }

    /* Info Panel Styles */
    .contact-info-panel h2 {
        font-family: 'Poppins', sans-serif;
        font-size: 26px;
        font-weight: 800;
        color: #1a1a2e;
        margin-bottom: 30px;
    }

    .contact-info-panel h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: 700;
        color: #1a1a2e;
        margin-bottom: 20px;
    }

    .contact-details {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .cd-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }

    .cd-icon {
        color: #ffc107;
        margin-top: 2px;
    }

    .cd-icon svg {
        width: 20px;
        height: 20px;
        fill: currentColor;
    }

    .cd-text {
        font-size: 14px;
        color: #555;
        line-height: 1.6;
    }

    /* Form Styles */
    .contact-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .form-group label {
        font-size: 12px;
        font-weight: 700;
        color: #1a1a2e;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 14px 16px;
        border: 1px solid #e0e0e0;
        border-radius: 6px;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        background: #fff;
        transition: border-color 0.2s;
        outline: none;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        border-color: #1a1a2e;
    }

    .form-group input::placeholder,
    .form-group textarea::placeholder {
        color: #999;
    }

    .form-group textarea {
        resize: vertical;
        min-height: 120px;
    }

    .btn-submit {
        background: #ffc107;
        color: #1a1a2e;
        padding: 15px;
        border-radius: 6px;
        font-weight: 800;
        font-size: 15px;
        border: none;
        cursor: pointer;
        transition: background 0.2s, transform 0.2s;
        margin-top: 10px;
    }

    .btn-submit:hover {
        background: #e5ad06;
        transform: translateY(-2px);
    }

    @media (max-width: 768px) {
        .contact-container {
            flex-direction: column;
            margin: 40px 20px 80px;
        }

        .contact-info-panel {
            padding: 40px 30px;
        }

        .contact-form-panel {
            padding: 40px 30px;
        }

        .contact-hero h1 {
            font-size: 42px;
        }
    }
</style>

<!-- Hero Section -->
<section class="contact-hero">
    <div class="contact-hero-bg-text">300x300</div>

    <h1>Contact Us</h1>
    <div class="contact-hero-underline"></div>
    <p>Expert-led programs designed to build global leaders in Logistics and Supply Chain Management.</p>
</section>

<!-- Contact Content Section -->
<section class="contact-container">

    <!-- Info Panel -->
    <div class="contact-info-panel">
        <h2>Contact Information</h2>

        <h3>London College</h3>

        <div class="contact-details">
            <!-- Location -->
            <div class="cd-item">
                <div class="cd-icon">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
                    </svg>
                </div>
                <div class="cd-text">
                    Karmaveer Bhaurao Patil College, PKC Road,<br>
                    Sector 15-A, Juhu Nagar, Vashi, Navi Mumbai,<br>
                    Maharashtra &ndash; 400703
                </div>
            </div>

            <!-- Phone -->
            <div class="cd-item">
                <div class="cd-icon">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z" />
                    </svg>
                </div>
                <div class="cd-text">
                    +91 9930255111
                </div>
            </div>

            <!-- Email -->
            <div class="cd-item">
                <div class="cd-icon">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                    </svg>
                </div>
                <div class="cd-text">
                    admin.mumbai@londoncollege.in
                </div>
            </div>
        </div>
    </div>

    <!-- Form Panel -->
    <div class="contact-form-panel">
        <form class="contact-form" onsubmit="event.preventDefault(); alert('Message sent!');">
            <div class="form-group">
                <label>Your Name</label>
                <input type="text" placeholder="Full Name" required>
            </div>

            <div class="form-group">
                <label>Email Address</label>
                <input type="email" placeholder="example@mail.com" required>
            </div>

            <div class="form-group">
                <label>Phone Number</label>
                <input type="tel" placeholder="+91 00000 00000">
            </div>

            <div class="form-group">
                <label>Your Message</label>
                <textarea placeholder="How can we help you today?" required></textarea>
            </div>

            <button type="submit" class="btn-submit">Send Message</button>
        </form>
    </div>

</section>

<?php
require_once 'footer.php';
?>