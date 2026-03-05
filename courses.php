<?php
// courses.php
$current_page = 'courses.php';
require_once 'header.php';
?>

<style>
    /* ====== COURSES PAGE STYLES ====== */
    body {
        background-color: #f8f9fa;
        /* Light gray background for the cards area */
    }

    .courses-hero {
        margin-top: 65px;
        /* Offset for fixed header */
        height: 480px;
        background: linear-gradient(rgba(10, 20, 40, 0.6), rgba(10, 20, 40, 0.7)),
            url('https://images.unsplash.com/photo-1541339907198-e08756dedf3f?auto=format&fit=crop&q=80&w=2070') center/cover no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 0 20px;
        color: #fff;
    }

    .courses-hero h1 {
        font-size: 56px;
        font-weight: 800;
        margin-bottom: 5px;
        font-family: 'Poppins', sans-serif;
    }

    .courses-hero-underline {
        width: 60px;
        height: 4px;
        background-color: #ffc107;
        /* Yellow underline */
        margin: 15px auto 25px auto;
    }

    .courses-hero p {
        font-size: 18px;
        font-weight: 400;
        max-width: 700px;
        line-height: 1.6;
        letter-spacing: 0.5px;
        color: #e0e0e0;
    }

    .courses-container {
        max-width: 1200px;
        margin: 60px auto 100px;
        padding: 0 20px;
    }

    .courses-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }

    .course-card {
        background: #fff;
        border-radius: 12px;
        padding: 40px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        min-height: 240px;
    }

    .course-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
    }

    .course-card h2 {
        font-size: 22px;
        font-weight: 700;
        color: #1a1a2e;
        line-height: 1.4;
        margin-bottom: 30px;
        font-family: 'Poppins', sans-serif;
    }

    .btn-yellow-outline {
        align-self: flex-start;
        background: #ffcc00;
        /* Yellow */
        color: #1a1a2e;
        padding: 12px 28px;
        border-radius: 6px;
        font-weight: 700;
        font-size: 14px;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 8px;
        transition: all 0.2s ease;
        text-transform: capitalize;
    }

    .btn-yellow-outline:hover {
        background: #ffdb4d;
    }

    .btn-yellow-outline span {
        font-weight: bold;
        font-size: 18px;
    }

    @media (max-width: 768px) {
        .courses-grid {
            grid-template-columns: 1fr;
        }

        .courses-hero h1 {
            font-size: 42px;
        }

        .courses-hero p {
            font-size: 16px;
        }
    }
</style>

<!-- Hero Section -->
<section class="courses-hero">
    <h1>Our Courses</h1>
    <div class="courses-hero-underline"></div>
    <p>Expert-led programs designed to build global leaders in Logistics and Supply Chain Management.</p>
</section>

<!-- Courses Grid Section -->
<section class="courses-container">
    <div class="courses-grid">
        <!-- Course Card 1 -->
        <div class="course-card">
            <h2>POST GRADUATE DIPLOMA in Logistics & Supply Chain Management</h2>
            <button class="btn-yellow-outline">Learn More <span>&rarr;</span></button>
        </div>

        <!-- Course Card 2 -->
        <div class="course-card">
            <h2>ADVANCED DIPLOMA in Logistics & Supply Chain Management</h2>
            <button class="btn-yellow-outline">Learn More <span>&rarr;</span></button>
        </div>

        <!-- Course Card 3 -->
        <div class="course-card">
            <h2>DIPLOMA in Logistics & Supply Chain Management</h2>
            <button class="btn-yellow-outline">Learn More <span>&rarr;</span></button>
        </div>

        <!-- Course Card 4 -->
        <div class="course-card">
            <h2>Bachelor of Commerce &ndash; Logistics & Supply Chain Management (B-LSCM)</h2>
            <button class="btn-yellow-outline">Learn More <span>&rarr;</span></button>
        </div>
    </div>
</section>

<?php
require_once 'footer.php';
?>