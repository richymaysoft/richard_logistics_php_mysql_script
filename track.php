<?php
$page = 'Tracking';
include( 'header.php' );
?>

<!-- ========================
page title
    ===
    === === === === === === === === -->
    <section id="page-title" class="page-title bg-overlay bg-parallax">
        <div class="bg-img"><img src="images/5.jpg" alt="background">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 class="pagetitle__heading">Tracking</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                        </ol>
                    </nav>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section> <!-- /.page-title -->


<!-- ======================
Track Shipmeent
    ===
    === === === === === === === = -->
    <section id="trackShipmeent" class="track-shipmeent pb-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <aside class="sidebar mb-30">
                        <div class="widget widget-categories">
                            <h5 class="widget__title">Transport Services</h5>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    <li><a href="#">Warehousing</a>
                                    </li>
                                    <li><a href="#">Air Freight </a>
                                    </li>
                                    <li><a href="#">Ocean Freight</a>
                                    </li>
                                    <li><a href="#">Road Freight</a>
                                    </li>
                                    <li><a href="#">Supply Chain</a>
                                    </li>
                                    <li><a href="#">Packaging Options</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.widget-content -->
                        </div>
                       


                    </aside>
                    <!-- /.sidebar -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <form method="get" action="result.php" style="width: 100%; float: left;">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label>Enter Tracking Number</label>
                                <div class="form-group">
                                    <input type="text" name="id" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>

                        <!-- /.col-lg-12 -->
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <button class="btn btn__secondary btn__block" type="submit">Track & Trace</button>
                        </div>
                        <!-- /.col-lg-12 -->
                    </form>
                  <div class="row">
                    <!-- /.widget-categories -->
                        <div class="widget widget-help bg-overlay bg-overlay-grdient-secondary" style="margin-top: 30px">
                            <div class="bg-img"><img src="assets/images/sidebar/1.jpg" alt="background">
                            </div>
                            <div class="widget__content">
                                <h5>How Can <br> We Help You!</h5>
                                <p>We understand the importance approaching each work integrally and believe in the power of simple and easy communication.</p>
                                <a href="contact.php" class="btn btn__primary btn__hover2 btn__block">Schedule An Appointment</a>
                            </div>
                            <!-- /.widget-content -->
                        </div>
                        <!-- /.widget-help -->
                    </div>
                     
                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section> <!-- /.Track Shipmeent -->
    <!-- ========================
Footer
    ===
    === === === === === === === == -->
    <?php include('footer.php'); ?>