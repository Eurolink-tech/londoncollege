<?php
// updates.php
$current_page = 'updates.php';
require_once 'header.php';
?>

<style>
    /* ====== LATEST UPDATES PAGE STYLES ====== */
    body {
        background-color: #f8f9fa;
        /* Light gray background for the cards area */
    }

    .updates-hero {
        margin-top: 65px;
        /* Offset for fixed header */
        height: 480px;
        background: linear-gradient(rgba(10, 20, 40, 0.6), rgba(10, 20, 40, 0.7)),
            url('https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&q=80&w=2086') center/cover no-repeat;
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

    /* Optional: faint placeholder "300x300" seen in design behind text if needed, 
     but typically this is a design artifact. We will omit it for a cleaner look or 
     you could add a background pattern. */

    .updates-hero h1 {
        font-size: 56px;
        font-weight: 800;
        margin-bottom: 5px;
        font-family: 'Poppins', sans-serif;
        position: relative;
        z-index: 2;
    }

    .updates-hero-underline {
        width: 60px;
        height: 4px;
        background-color: #ffc107;
        /* Yellow underline */
        margin: 15px auto 25px auto;
        position: relative;
        z-index: 2;
    }

    .updates-hero p {
        font-size: 18px;
        font-weight: 400;
        max-width: 700px;
        line-height: 1.6;
        letter-spacing: 0.5px;
        color: #e0e0e0;
        position: relative;
        z-index: 2;
    }

    .updates-container {
        max-width: 1200px;
        margin: 60px auto 100px;
        padding: 0 20px;
    }

    .updates-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 25px;
    }

    .update-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        display: flex;
        flex-direction: column;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .update-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .update-img-placeholder {
        height: 220px;
        background-color: #e0e0e0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #9e9e9e;
        font-family: monospace;
        font-size: 14px;
        letter-spacing: 2px;
    }

    .update-content {
        padding: 25px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .update-date {
        font-size: 11px;
        font-weight: 700;
        color: #6c757d;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
    }

    .update-card h2 {
        font-size: 18px;
        font-weight: 700;
        color: #1a1a2e;
        line-height: 1.4;
        margin-bottom: 15px;
        font-family: 'Poppins', sans-serif;
    }

    .update-card p {
        font-size: 13px;
        color: #555;
        line-height: 1.6;
        margin-bottom: 25px;
        flex-grow: 1;
    }

    .btn-read-more {
        align-self: flex-start;
        color: #1a1a2e;
        font-weight: 800;
        font-size: 13px;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: color 0.2s ease;
    }

    .btn-read-more:hover {
        color: #ffc107;
    }

    @media (max-width: 1024px) {
        .updates-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .updates-grid {
            grid-template-columns: 1fr;
        }

        .updates-hero h1 {
            font-size: 42px;
        }

        .updates-hero p {
            font-size: 16px;
        }
    }
</style>

<!-- Hero Section -->
<section class="updates-hero">
    <!-- Subtle overlay text matching design artifact -->
    <div
        style="position: absolute; font-size: 120px; color: rgba(255,255,255,0.05); font-weight: 300; letter-spacing: 10px; z-index: 1;">
        300x300</div>

    <h1>Latest Updates</h1>
    <div class="updates-hero-underline"></div>
    <p>Expert-led programs designed to build global leaders in Logistics and Supply Chain Management.</p>
</section>

<!-- Updates Grid Section -->
<section class="updates-container">
    <div class="updates-grid">
        <!-- Update Card 1 -->
        <div class="update-card">
            <div class="update-img-placeholder">300x300</div>
            <div class="update-content">
                <span class="update-date">OCTOBER 24, 2023</span>
                <h2>New Global Logistics Partnership</h2>
                <p>We are excited to announce a strategic partnership with global shipping leaders to enhance studen...
                </p>
                <a href="#" class="btn-read-more">Read More &rarr;</a>
            </div>
        </div>

        <!-- Update Card 2 -->
        <div class="update-card">
            <div class="update-img-placeholder">300x300</div>
            <div class="update-content">
                <span class="update-date">OCTOBER 20, 2023</span>
                <h2>SCM Workshop Series 2024</h2>
                <p>Registration is now open for our upcoming workshop series focusing on AI in Supply Chain Management.
                </p>
                <a href="#" class="btn-read-more">Read More &rarr;</a>
            </div>
        </div>

        <!-- Update Card 3 -->
        <div class="update-card">
            <div class="update-img-placeholder">300x300</div>
            <div class="update-content">
                <span class="update-date">OCTOBER 15, 2023</span>
                <h2>Alumni Success Spotlight</h2>
                <p>Read about our recent graduates who have secured leadership roles in top multinational logistics
                    firms.</p>
                <a href="#" class="btn-read-more">Read More &rarr;</a>
            </div>
        </div>

        <!-- Update Card 4 -->
        <div class="update-card">
            <div class="update-img-placeholder">300x300</div>
            <div class="update-content">
                <span class="update-date">OCTOBER 10, 2023</span>
                <h2>Campus Infrastructure Update</h2>
                <p>Our Vashi campus now features a state-of-the-art simulation lab for supply chain network modeling.
                </p>
                <a href="#" class="btn-read-more">Read More &rarr;</a>
            </div>
        </div>
    </div>
</section>

<?php
require_once 'footer.php';
?>