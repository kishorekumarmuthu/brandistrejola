<!DOCTYPE html>
<html lang="en">

<?php include('./header.php') ?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Projects</h2>
      <ol>
        <li><a href="index.php">Home</a></li>
        <li>Projects</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Our Projects Section ======= -->
  <section id="projects" class="projects">
    <div class="container" data-aos="fade-up">

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

</main><!-- End #main -->

<!-- ======= Footer ======= -->

<?php include('./footer.php'); ?>

</body>

</html>