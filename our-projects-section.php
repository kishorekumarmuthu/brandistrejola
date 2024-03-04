<!-- ======= Our Projects Section ======= -->
<section id="projects" class="projects">
    <div class="container" data-aos="fade-up">

        <div class="section-header" style="padding-bottom: 30px;">
            <h2>Our Projects</h2>
        </div>
        <div class="content" style="margin-bottom: 40px;">
            <p>Step into our gallery and embark on a journey through three decades of exemplary craftsmanship and architectural marvels. Each exhibit tells a story of dedication, innovation, and unwavering commitment to excellence that defines Shan Associates.</p>
            <p>Our gallery showcases a diverse portfolio of projects that have left an indelible mark on the landscape. Witness the seamless blend of commitment and functionality in every structure, reflecting our passion for construction and our relentless pursuit of perfection.</p>
            <p>Every endeavor is a testament to our commitment to building dreams that stand the test of time.</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

            <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-construction">Buildings</li>
                <li data-filter=".filter-remodeling">Construction</li>
                <li data-filter=".filter-repairs">Corporate</li>
                <li data-filter=".filter-design">Illustration</li>
            </ul><!-- End Projects Filters -->

            <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <?php include('./projects-section-buildings.php'); ?>

                <?php include('./our-projects-construction.php'); ?>

                <?php include('./our-projects-corporate.php'); ?>

                <?php include('./our-projects-illustration.php'); ?>


            </div><!-- End Projects Container -->

        </div>

    </div>
</section><!-- End Our Projects Section -->