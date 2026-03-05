<?php
// index.php
require_once 'header.php';
?>

<!-- HERO SECTION -->
<section class="hero">
    <h1>London College</h1>
    <p class="subtitle">A Professional Learning for Professionals</p>
    <div class="campus-buttons">
        <button class="campus-btn btn-green">Vashi</button>
        <button class="campus-btn btn-orange">Kochi</button>
        <button class="campus-btn btn-blue">Kharghar</button>
        <button class="campus-btn btn-emerald">Coming Soon</button>
    </div>
</section>


<!-- ABOUT US SECTION -->
<section id="about" class="about-section">
    <div class="about-grid">
        <div class="about-text">
            <h2>About Us</h2>
            <p>
                For over a decade, London College – India has been at the front of delivering premier corporate training
                and management programs specializing in Logistics and Supply Chain Management courses. We are leading
                logistics and Supply chain management institute having global partnerships with operating institutions
                across the globe. These engagements enable us to function as a uni-global with paramount relevance
                between industry and its consumers. With these skills, many of our students are leaders and play a
                pivotal role in various well-known sectors. With its nearly a decade of excellence in Supply Chain
                Management, Shipping Management, Logistics Management, Export &amp; Import Management and Retail
                Management education spanning more than a decade, the college is now well-poised to address the chronic
                shortage of supply chain professionals across India and Middle East Asia.
            </p>
            <p>
                With the availability of sharp infrastructure, trained and efficient manpower, our values revolve around
                providing the solutions to meet every element of creation. We truly believe that education is the method
                to build and every creation in London College provides a mixture of faculty with a right amount of
                experience in both the commercial and academic world. By integrating future demands of the industry into
                our course structure, we aim to provide a more fulfilling and enriching learning experience. The
                practical experience that our staff holds helps to develop the business and entrepreneurial skills of
                the students. With campuses in Kharghar, Vashi and Panvel and Kochi, our courses and study materials are
                researched and developed by eminent academicians ranging in line with current and future industry
                prospects.
            </p>
        </div>
        <div class="about-image">
            <div class="about-illustration">
                <img src="logistics-illustration.png" alt="Logistics professional illustration"
                    style="width:100%; border-radius: 12px;" />
            </div>
        </div>
    </div>
</section>


<!-- OUR RECRUITER SECTION -->
<section id="courses" class="recruiters-section">
    <h2>Our Recruiter</h2>
    <div class="recruiters-grid">
        <div class="recruiter-card">WALKAROO</div>
        <div class="recruiter-card">APML</div>
        <div class="recruiter-card rc-red">RELIANCE</div>
        <div class="recruiter-card rc-blue">SAMSUNG</div>
        <div class="recruiter-card rc-orange">FLIPKART</div>
        <div class="recruiter-card rc-darkblue">MAERSK</div>
        <div class="recruiter-card">VRL</div>
        <div class="recruiter-card rc-red">DTDC</div>
        <div class="recruiter-card rc-darkblue">MSC</div>
        <div class="recruiter-card rc-green">EURO EXIM</div>
        <div class="recruiter-card rc-blue">BLUE DART</div>
        <div class="recruiter-card rc-yellow">DHL</div>
    </div>
</section>


<!-- CONTACT SECTION -->
<section id="contact" class="contact-section">
    <h2>Get in Touch</h2>
    <div class="contact-form">
        <form onsubmit="event.preventDefault(); alert('Thank you! We will contact you soon.');">
            <input type="text" placeholder="Your Name" required />
            <input type="email" placeholder="Your Email" required />
            <input type="tel" placeholder="Your Phone" />
            <textarea placeholder="Message"></textarea>
            <button type="submit" class="submit-btn">Send Message</button>
        </form>
    </div>
</section>

<?php
require_once 'footer.php';
?>