<?php
$page = 'Our Portfolio';
$msg = "";
if (isset($_POST['name'])) {
    $msg = "Your message was sent successfully. We'll get back to you shortly";
    $sub = "";
} 
include( 'header.php' );
?>
 <!-- ========================
       page title 
    =========================== -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
      <div class="bg-img"><img src="images/5.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="pagetitle__heading">Our Portfolio</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
              </ol>
            </nav>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- =========================== 
      projects Gallery 
    ============================= -->
    <section id="projectsGallery" class="projects projects-gallery pb-80">
      <div class="container">
        <div class="row">
          <!-- project item #1 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="project-item">
              <div class="project__img">
                <img src="images/grid_1.jpg" alt="project img">
                <a href="images/grid_1.jpg" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.project-img -->
            </div><!-- /.project-item -->
          </div><!-- /.col-lg-4 -->
          <!-- project item #2 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="project-item">
              <div class="project__img">
                <img src="images/grid_2.jpg" alt="project img">
                <a href="images/grid_2.jpg" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.project-img -->
            </div><!-- /.project-item -->
          </div><!-- /.col-lg-4 -->
          <!-- project item #3 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="project-item">
              <div class="project__img">
                <img src="images/grid_3.jpg" alt="project img">
                <a href="images/grid_3.jpg" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.project-img -->
            </div><!-- /.project-item -->
          </div><!-- /.col-lg-4 -->
          <!-- project item #4 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="project-item">
              <div class="project__img">
                <img src="images/grid_4.jpg" alt="project img">
                <a href="images/grid_4.jpg" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.project-img -->
            </div><!-- /.project-item -->
          </div><!-- /.col-lg-4 -->
          <!-- project item #5 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="project-item">
              <div class="project__img">
                <img src="images/banner_1.jpg" alt="project img">
                <a href="images/banner_1.jpg" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.project-img -->
            </div><!-- /.project-item -->
          </div><!-- /.col-lg-4 -->
          <!-- project item #6 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="project-item">
              <div class="project__img">
                <img src="images/1.jpg" alt="project img">
                <a href="images/1.jpg" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.project-img -->
            </div><!-- /.project-item -->
          </div><!-- /.col-lg-4 -->
          <!-- project item #7 -->
          <div class="col-sm-6 col-md-6 col-lg-4 project-hidden">
            <div class="project-item">
              <div class="project__img">
                <img src="assets/images/case-studies/grid/1.jpg" alt="project img">
                <a href="assets/images/case-studies/grid/1.jpg" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.project-img -->
            </div><!-- /.project-item -->
          </div><!-- /.col-lg-4 -->
          <!-- project item #8 -->
          <div class="col-sm-6 col-md-6 col-lg-4 project-hidden">
            <div class="project-item">
              <div class="project__img">
                <img src="assets/images/case-studies/grid/3.jpg" alt="project img">
                <a href="assets/images/case-studies/grid/3.jpg" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.project-img -->
            </div><!-- /.project-item -->
          </div><!-- /.col-lg-4 -->
          <!-- project item #9 -->
          <div class="col-sm-6 col-md-6 col-lg-4 project-hidden">
            <div class="project-item">
              <div class="project__img">
                <img src="assets/images/case-studies/grid/2.jpg" alt="project img">
                <a href="assets/images/case-studies/grid/2.jpg" data-lightbox="lightbox" class="zoom__icon"></a>
              </div><!-- /.project-img -->
            </div><!-- /.project-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.projects Gallery -->  <!-- ========================
            Footer
    ========================== -->
   <?php include('footer.php'); ?>