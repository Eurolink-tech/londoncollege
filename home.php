<?php
// home.php
$current_page = 'home.php';
require_once 'header.php';
?>

<style>
    /* ====== HOME CONTENT STYLES ====== */
    body {
        background-color: #fcfcfc;
    }

    .home-hero {
        margin-top: 65px;
        /* Offset for fixed header */
        height: 480px;
        background: linear-gradient(rgba(10, 20, 40, 0.4), rgba(10, 20, 40, 0.7)),
            url('https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&q=80&w=2070') center/cover no-repeat;
        display: flex;
        align-items: center;
        padding: 0 8%;
        color: #fff;
    }

    .home-hero-content {
        max-width: 800px;
    }

    .home-hero h1 {
        font-size: 64px;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 12px;
        text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
        font-family: 'Poppins', sans-serif;
    }

    .home-hero .subtitle {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-style: italic;
        letter-spacing: 2px;
        font-weight: 300;
    }

    .home-section-1 {
        text-align: center;
        padding: 90px 20px;
        background: #fff;
    }

    .home-title {
        font-size: 52px;
        font-weight: 800;
        color: #1a1a2e;
        margin-bottom: 15px;
        font-family: 'Poppins', sans-serif;
        letter-spacing: -1px;
    }

    .home-subtitle {
        font-size: 22px;
        font-weight: 800;
        color: #1a1a2e;
        margin-bottom: 35px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .home-paragraph {
        max-width: 750px;
        margin: 0 auto 40px;
        font-size: 16px;
        color: #555;
        line-height: 1.8;
    }

    .btn-yellow {
        background: #ffc107;
        color: #1a1a2e;
        padding: 16px 45px;
        border-radius: 40px;
        font-weight: 700;
        font-size: 16px;
        border: none;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(255, 193, 7, 0.3);
        transition: all 0.3s ease;
    }

    .btn-yellow:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(255, 193, 7, 0.5);
    }

    .home-section-2 {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px 20px 60px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 40px;
    }

    .home-section-2-left {
        flex: 1;
    }

    .home-section-2-left h2 {
        font-size: 26px;
        font-weight: 800;
        color: #1a1a2e;
    }

    .home-section-2-left h3 {
        font-size: 14px;
        font-weight: 800;
        color: #1a1a2e;
        text-transform: uppercase;
    }

    .home-section-2-right {
        flex: 1.2;
        display: flex;
        align-items: center;
        gap: 30px;
    }

    .home-section-2-right p {
        font-size: 13px;
        color: #666;
        line-height: 1.7;
        flex: 1;
    }

    .home-section-2-right .btn-yellow {
        padding: 12px 30px;
        font-size: 14px;
        white-space: nowrap;
        border-radius: 30px;
    }

    .partners-container {
        max-width: 1200px;
        margin: 0 auto 80px;
        padding: 0 20px;
        display: flex;
        align-items: center;
        gap: 30px;
    }

    .partners-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 25px;
        flex: 1;
    }

    .partner-card {
        height: 120px;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        padding: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
    }

    /* Mock borders matching design */
    .partner-card-1 {
        border: 4px solid #e74c3c;
        border-bottom-color: #f1c40f;
    }

    .partner-card-2 {
        border: 4px solid #f1c40f;
    }

    .partner-card-3 {
        border: 4px solid #e67e22;
        padding: 0 !important;
        overflow: hidden;
    }

    .nav-buttons {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .nav-btn {
        width: 38px;
        height: 38px;
        background: #1976d2;
        color: #fff;
        border: none;
        font-size: 20px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: background 0.2s;
        border-radius: 4px;
    }

    .nav-btn:hover {
        background: #1565c0;
    }

    .brochure-container {
        max-width: 1200px;
        margin: 0 auto 100px;
        background: #fff;
        padding: 50px;
        border-radius: 20px;
        box-shadow: 0 10px 50px rgba(0, 0, 0, 0.06);
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
    }

    .brochure {
        padding: 20px;
        text-align: center;
    }

    .brochure h4 {
        color: #1a237e;
        font-size: 18px;
        font-weight: 800;
        margin-bottom: 25px;
        text-transform: uppercase;
    }

    .brochure h4 span {
        color: #d32f2f;
    }

    .brochure-banner {
        background: #1a237e;
        color: #fff;
        padding: 30px;
        margin-bottom: 25px;
        background-image: linear-gradient(135deg, #1a237e 50%, #d32f2f 50%);
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-radius: 8px;
    }

    .brochure-banner h2 {
        font-size: 38px;
        font-weight: 800;
        color: #f1c40f;
        margin: 0;
    }

    .brochure-banner p {
        font-size: 11px;
        font-weight: 700;
        text-align: right;
        margin: 0;
        max-width: 150px;
        line-height: 1.4;
    }

    .brochure-banner-alt {
        border: 3px solid #1a237e;
        padding: 25px;
        margin-bottom: 25px;
        text-align: left;
        position: relative;
        border-radius: 8px;
    }

    .brochure-banner-alt h2 {
        font-size: 36px;
        font-weight: 800;
        color: #d32f2f;
        margin-bottom: 15px;
    }

    .brochure-alt-content-head {
        background: #1a237e;
        color: white;
        display: inline-block;
        padding: 4px 15px;
        font-size: 12px;
        font-weight: 800;
        margin-bottom: 10px;
    }

    .brochure-alt-list {
        font-size: 12px;
        color: #555;
        padding-left: 20px;
        line-height: 1.8;
        font-weight: 500;
    }

    .college-footer-text h5 {
        color: #d32f2f;
        font-size: 15px;
        font-weight: 800;
        margin-bottom: 4px;
        margin-top: 10px;
    }

    .college-footer-text p {
        font-size: 13px;
        color: #777;
        margin: 0;
    }

    @media (max-width: 1024px) {
        .home-section-2 {
            flex-direction: column;
            text-align: center;
        }

        .home-section-2-right {
            flex-direction: column;
        }

        .partners-grid {
            grid-template-columns: 1fr;
        }

        .partners-container {
            flex-direction: column;
        }

        .nav-buttons {
            flex-direction: row;
        }

        .brochure-container {
            grid-template-columns: 1fr;
            padding: 30px;
        }

        .home-hero h1 {
            font-size: 48px;
        }
    }

    @media (max-width: 600px) {
        .home-hero h1 {
            font-size: 36px;
        }

        .home-title {
            font-size: 38px;
        }

        .home-subtitle {
            font-size: 16px;
        }

        .brochure-banner {
            flex-direction: column;
            text-align: center;
            gap: 15px;
        }

        .brochure-banner p {
            text-align: center;
        }
    }
</style>

<!-- Hero Section -->
<section class="home-hero">
    <div class="home-hero-content">
        <h1>LONDON COLLEGE -<br>KOCHI</h1>
        <p class="subtitle">TRANSFORMING LEARNERS TO PROFESSIONAL</p>
    </div>
</section>

<!-- Introduction Section -->
<section class="home-section-1">
    <h2 class="home-title">London College</h2>
    <h3 class="home-subtitle">TRANSFORMING LEARNERS TO PROFESSIONALS</h3>
    <p class="home-paragraph">
        To deliver as many different courses to as many students at affordable prices and
        excellent quality to fit the right candidates to the right job, consistently and reliably.
    </p>
    <button class="btn-yellow">Regular Courses</button>
</section>

<!-- Split Section -->
<section class="home-section-2">
    <div class="home-section-2-left">
        <h2>London College</h2>
        <h3>TRANSFORMING LEARNERS TO PROFESSIONALS</h3>
    </div>
    <div class="home-section-2-right">
        <p>
            To deliver as many different courses to as many students at affordable prices and
            excellent quality to fit the right candidates to the right job, consistently and reliably.
        </p>
        <button class="btn-yellow">Regular Courses</button>
    </div>
</section>

<!-- Partners Section -->
<section class="partners-container">
    <div class="partners-grid">
        <div class="partner-card partner-card-1">
            <div style="text-align: center;">
                <p style="color:#d32f2f; font-size: 12px; font-weight:800; margin-bottom:5px; letter-spacing:1px;">
                    TRAINING PARTNER</p>
                <h4 style="color:#1976d2; font-size: 15px; font-weight:700;">Logistics Sector Skill Council</h4>
            </div>
        </div>
        <div class="partner-card partner-card-2">
            <div style="display:flex; align-items:center; gap:15px;">
                <h2 style="color:#00acc1; font-size: 42px; font-weight:800; margin:0; line-height:1;">athe</h2>
                <div style="border-left:3px solid #eaeaea; padding-left:15px;">
                    <p
                        style="color:#d32f2f; font-size: 11px; font-weight:800; margin:0; line-height:1.4; letter-spacing:0.5px;">
                        AWARDS FOR<br>TRAINING AND<br>HIGHER EDUCATION</p>
                </div>
            </div>
        </div>
        <div class="partner-card partner-card-3">
            <div
                style="background:#1a237e; color:#fff; width:100%; height:100%; display:flex; flex-direction:column; justify-content:center; align-items:center; padding:15px; text-align:center;">
                <h4
                    style="font-size:16px; margin-bottom:8px; font-weight:700; border-bottom:1px solid rgba(255,255,255,0.3); padding-bottom:5px;">
                    CENTRE OF EXCELLENCE</h4>
                <p style="font-size:11px; font-weight:400; line-height:1.4;">Confederation of Indian Industry -
                    <br>Institute of Logistics</p>
            </div>
        </div>
    </div>
    <div class="nav-buttons">
        <button class="nav-btn">&laquo;</button>
        <button class="nav-btn">&raquo;</button>
    </div>
</section>

<!-- Brochure Section -->
<section class="brochure-container">
    <div class="brochure">
        <h4>YOUR PATHWAY TO A <span>GLOBAL CAREER</span></h4>

        <div class="brochure-banner">
            <h2>B-LSCM</h2>
            <p>BACHELOR OF COMMERCE LOGISTICS & SUPPLY CHAIN MANAGEMENT</p>
        </div>

        <div style="display:flex; justify-content:center; align-items:center; gap:20px; margin-bottom:20px;">
            <div
                style="width:60px; height:60px; background:#f9f9f9; border:1px solid #ddd; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:10px; color:#1a237e; font-weight:bold; box-shadow:0 2px 10px rgba(0,0,0,0.05);">
                LSC</div>
            <div
                style="width:60px; height:60px; background:#f9f9f9; border:1px solid #ddd; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:10px; color:#c0392b; font-weight:bold; box-shadow:0 2px 10px rgba(0,0,0,0.05);">
                UGC</div>
        </div>

        <div class="college-footer-text">
            <p>Rayat Shikshan Sanstha's</p>
            <h5>KARMAVEER BHAURAO PATIL COLLEGE, VASHI</h5>
            <p>(Autonomous College)</p>
        </div>
    </div>

    <div class="brochure">
        <h4>YOUR PATHWAY TO A <span>GLOBAL CAREER</span></h4>

        <div class="brochure-banner-alt">
            <div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom: 15px;">
                <h2>B-LSCM</h2>
                <div
                    style="font-size:9px; text-align:right; font-weight:bold; background:#1a237e; color:#fff; padding:4px 8px;">
                    BACHELOR OF COMMERCE<br>LOGISTICS & SUPPLY CHAIN<br>MANAGEMENT</div>
            </div>

            <div class="brochure-alt-content-head">COURSE BENEFITS</div>

            <ul class="brochure-alt-list">
                <li>Earn while you learn in Academics.</li>
                <li>Global Curriculum.</li>
                <li>Dual degree from reputed Universities.</li>
                <li>Placement Assistance with Global MNCs.</li>
                <li>Industry Interface & Internships.</li>
                <li>100% Job Assistance.</li>
            </ul>

            <!-- Stamp decoration -->
            <div
                style="position:absolute; bottom:20px; right:20px; width:60px; height:60px; border:3px solid #c0392b; border-radius:50%; display:flex; align-items:center; justify-content:center; color:#c0392b; font-weight:bold; font-size:10px; transform:rotate(-15deg); opacity:0.8;">
                APPROVED</div>
        </div>

        <div class="college-footer-text">
            <p>Rayat Shikshan Sanstha's</p>
            <h5>KARMAVEER BHAURAO PATIL COLLEGE, VASHI</h5>
            <p>(Autonomous College)</p>
        </div>
    </div>
</section>

<?php
require_once 'footer.php';
?>