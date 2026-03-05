<?php
// admission.php
$current_page = 'admission.php';
require_once 'header.php';
?>

<style>
    /* ====== ADMISSION PAGE STYLES ====== */
    body {
        background-color: #f8f9fa;
        /* Light gray background */
    }

    .admission-hero {
        margin-top: 65px;
        /* Offset for fixed header */
        height: 480px;
        background: linear-gradient(rgba(10, 20, 40, 0.5), rgba(10, 20, 40, 0.6)),
            url('https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&q=80&w=2070') center/cover no-repeat;
        /* Added unique background image for Admission */
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

    .admission-hero-bg-text {
        position: absolute;
        font-size: 160px;
        color: rgba(0, 0, 0, 0.04);
        font-weight: 300;
        letter-spacing: 15px;
        z-index: 1;
        font-family: monospace;
    }

    .admission-hero h1 {
        font-size: 56px;
        font-weight: 800;
        margin-bottom: 5px;
        font-family: 'Poppins', sans-serif;
        position: relative;
        z-index: 2;
    }

    .admission-hero-underline {
        width: 60px;
        height: 4px;
        background-color: #ffc107;
        /* Yellow underline */
        margin: 15px auto 25px auto;
        position: relative;
        z-index: 2;
    }

    .admission-hero p {
        font-size: 18px;
        font-weight: 400;
        max-width: 700px;
        line-height: 1.6;
        letter-spacing: 0.5px;
        color: #e0e0e0;
        position: relative;
        z-index: 2;
    }

    .admission-container {
        max-width: 1000px;
        /* slightly narrower content area */
        margin: -40px auto 100px;
        /* Slight overlap with hero if we want, or adjust. The design shows it as a block below the hero. Let's make it standard margin */
        margin: 60px auto 100px;
        background: #fff;
        padding: 60px 80px;
        border-radius: 8px;
        /* Slight rounding or sharp, looks quite sharp in design */
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.03);
    }

    .admission-content h2 {
        font-family: 'Poppins', sans-serif;
        font-size: 26px;
        font-weight: 800;
        color: #1a1a2e;
        margin-bottom: 30px;
    }

    .admission-list {
        margin-bottom: 50px;
    }

    .admission-list-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        margin-bottom: 18px;
        font-size: 14px;
        color: #444;
        line-height: 1.6;
    }

    .check-icon {
        color: #ffc107;
        font-size: 20px;
        flex-shrink: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .check-icon svg {
        width: 20px;
        height: 20px;
        fill: currentColor;
    }

    .admission-content h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: 700;
        color: #1a1a2e;
        margin-bottom: 25px;
        line-height: 1.5;
    }

    .bank-details-box {
        background-color: #f8f9fa;
        border-radius: 12px;
        padding: 40px;
        margin-bottom: 50px;
    }

    .bank-box-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 30px;
    }

    .bank-box-header h4 {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: 700;
        color: #1a1a2e;
        margin: 0;
    }

    .bank-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .bank-icon svg {
        width: 28px;
        height: 28px;
        fill: #1a1a2e;
    }

    .bank-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px 40px;
    }

    .bank-item {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .bank-label {
        font-size: 11px;
        font-weight: 600;
        color: #888;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .bank-value {
        font-size: 15px;
        font-weight: 700;
        color: #222;
    }

    .apply-now-wrapper {
        text-align: center;
    }

    .btn-apply {
        background: #ffc107;
        color: #1a1a2e;
        padding: 15px 45px;
        border-radius: 40px;
        font-weight: 700;
        font-size: 16px;
        border: none;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(255, 193, 7, 0.3);
        transition: all 0.3s ease;
        display: inline-block;
    }

    .btn-apply:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(255, 193, 7, 0.5);
    }

    @media (max-width: 768px) {
        .admission-container {
            padding: 40px 30px;
            margin: 40px 20px 80px;
        }

        .bank-grid {
            grid-template-columns: 1fr;
        }

        .admission-hero h1 {
            font-size: 42px;
        }
    }
</style>

<!-- Hero Section -->
<section class="admission-hero">
    <div class="admission-hero-bg-text">300x300</div>

    <h1>Admission</h1>
    <div class="admission-hero-underline"></div>
    <p>Expert-led programs designed to build global leaders in Logistics and Supply Chain Management.</p>
</section>

<!-- Admission Content Section -->
<section class="admission-container">
    <div class="admission-content">
        <h2>Mandatory documents required for admission process.</h2>

        <div class="admission-list">
            <div class="admission-list-item">
                <div class="check-icon">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                    </svg>
                </div>
                Completed Enrollment form &ndash; Manual / Online
            </div>
            <div class="admission-list-item">
                <div class="check-icon">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                    </svg>
                </div>
                2 passport size & soft copy of the same photo.
            </div>
            <div class="admission-list-item">
                <div class="check-icon">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                    </svg>
                </div>
                3 Attested Copies of relevant Qualification certificates.
            </div>
            <div class="admission-list-item">
                <div class="check-icon">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                    </svg>
                </div>
                Adhar & Pan card copy.
            </div>
            <div class="admission-list-item">
                <div class="check-icon">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                    </svg>
                </div>
                Application fee of Rs.1000/-
            </div>
            <div class="admission-list-item">
                <div class="check-icon">
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                    </svg>
                </div>
                Admission fees of 10000( included in course fee). Fee payment can be made by cash/chq/DD or online
                transfer.
            </div>
        </div>

        <h3>Fee payment can be made by cash/chq/DD or online transfer. Our Bank Account Details</h3>

        <div class="bank-details-box">
            <div class="bank-box-header">
                <div class="bank-icon">
                    <!-- Building/Bank Icon -->
                    <svg viewBox="0 0 24 24">
                        <path
                            d="M4 10v7h3v-7H4zm6 0v7h3v-7h-3zM2 22h19v-3H2v3zm14-12v7h3v-7h-3zm-4.5-9L2 6v2h19V6l-9.5-5z" />
                    </svg>
                </div>
                <h4>Our Bank Account Details:</h4>
            </div>

            <div class="bank-grid">
                <div class="bank-item">
                    <div class="bank-label">A/C NAME</div>
                    <div class="bank-value">Academica Management Skills Pvt Ltd</div>
                </div>
                <div class="bank-item">
                    <div class="bank-label">A/C NO</div>
                    <div class="bank-value">19840200042673</div>
                </div>
                <div class="bank-item">
                    <div class="bank-label">BANK / BRANCH</div>
                    <div class="bank-value">Federal Bank, Kakkanad</div>
                </div>
                <div class="bank-item">
                    <div class="bank-label">IFSC CODE</div>
                    <div class="bank-value">FDRL0001469</div>
                </div>
            </div>
        </div>

        <div class="apply-now-wrapper">
            <button class="btn-apply">Apply Now</button>
        </div>
    </div>
</section>

<?php
require_once 'footer.php';
?>