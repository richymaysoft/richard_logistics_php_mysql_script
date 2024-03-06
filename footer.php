

        <!-- ========================
            Footer
    ========================== -->
        <footer id="footer" class="footer">
            <div class="footer-newsletter">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-3">
                            <div class="footer__newsletter-text">
                                <h6>Our Newsletter</h6>
                                <p>Sign up for industry news & insights.</p>
                            </div>
                            <!-- /.footer-newsletter-text -->
                        </div>
                        <!-- /.col-xl-3-->
                        <div class="col-sm-12 col-md-12 col-lg-9 col-xl-7">
                            <form class="footer__newsletter-form d-flex flex-wrap" method="POST">
                                <h3><?php echo $sub; ?></h3>
                                <div class="form-group d-flex flex-1 mb-20 mr-1">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email Address">
                                </div>
                                <input class="btn btn__primary btn__hover3 mb-20" type="submit" name="sub" value="Submit Now!">
                            </form>
                        </div>
                        <!-- /.col-xl-7 -->
                        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-2">
                            <div class="social__icons justify-content-end">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <!-- /.social-icons -->
                        </div>
                        <!-- /.col-xl-2 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 footer__widget footer__widget-about">
                            <div class="footer__widget-content">
                                <img src="assets/images/logo/logo-small.png" alt="logo" class="footer-logo" width="150px">
                                <p>Our global <?php echo $siteName; ?> expertise, advanced supply chain technology & customized <?php echo $siteName; ?> solutions will help you develop and implement successful supply.</p>
                                <ul class="contact__list list-unstyled">
                                    <li><span>Email:</span><span><?php echo $siteEmail; ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
                            <h6 class="footer__widget-title">Who We Are</h6>
                            <div class="footer__widget-content">
                                <nav>
                                    <ul class="list-unstyled">
                                        <li><a href="about.php">About Us</a>
                                        </li>
                                        <li><a href="contact.php">Contacts</a>
                                        </li>
																				<li><a href="privacy.php">Privacy Policy</a>
                                        </li>
																				<li><a href="terms.php">Terms of Service</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- /.footer-widget-content -->
                        </div>
                        <!-- /.col-lg-2 -->
                        <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
                            <h6 class="footer__widget-title">What We Do</h6>
                            <div class="footer__widget-content">
                                <nav>
                                    <ul class="list-unstyled">
                                        <li><a href="services.php">Warehousing</a>
                                        </li>
                                        <li><a href="services.php">Air Freight</a>
                                        </li>
                                        <li><a href="services.php">Ocean Freight</a>
                                        </li>
                                        <li><a href="services.php">Road Freight</a>
                                        </li>
                                        <li><a href="services.php">Supply Chain</a>
                                        </li>
                                        <li><a href="services.php">Packaging</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- /.footer-widget-content -->
                        </div>
                        <!-- /.col-lg-2 -->
                        <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
                            <h6 class="footer__widget-title">Who We Serve</h6>
                            <div class="footer__widget-content">
                                <nav>
                                    <ul class="list-unstyled">
                                        <li><a href="about.php">Retail & Consumer</a>
                                        </li>
                                        <li><a href="services.php">Sciences & Healthcare</a>
                                        </li>
                                        <li><a href="services.php">Industrial & Chemical</a>
                                        </li>
                                        <li><a href="services.php">Power Generation</a>
                                        </li>
                                        <li><a href="services.php">Food & Beverage</a>
                                        </li>
                                        <li><a href="services.php">Oil & Gas</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- /.footer-widget-content -->
                        </div>
                        <!-- /.col-lg-2 -->
                        <div class="col-6 col-sm-6 col-md-3 col-lg-2 footer__widget footer__widget-nav">
                            <h6 class="footer__widget-title">Quick Links</h6>
                            <div class="footer__widget-content">
                                <nav>
                                    <ul class="list-unstyled">
                                        <li><a href="contact.php">Request A Quote</a>
                                        </li>
                                        <li><a href="track.php">Track & Trace</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- /.footer-widget-content -->
                        </div>
                        <!-- /.col-lg-2 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.footer-top -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="footer__copyright">
                                <span>&copy; 2001 - <?php echo date("Y"); ?> <?php echo $siteName; ?></span>
                            </div>
                            <!-- /.Footer-copyright -->
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <nav>
                                <ul class="list-unstyled footer__copyright-links d-flex flex-wrap justify-content-end">
                                    <li><a href="terms.php">Terms & Conditions </a>
                                    </li>
                                    <li><a href="privacy.php">Privacy Policy</a>
                                    </li>
                                    <li><a href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.Footer-bottom -->
        </footer>
        <!-- /.Footer -->

        <div class="module__search-container">
            <i class="fa fa-times close-search"></i>
            <form class="module__search-form">
                <input type="text" class="search__input" placeholder="Type Words Then Enter">
                <button class="module__search-btn"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <!-- /.module-search-container -->

        <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>
    </div>
    <!-- /.wrapper -->

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

    <script type="text/javascript">
        $( function () {
            $( '.navbar-nav a' ).filter( function () {
                return this.href == location.href
            } ).parent().addClass( 'active' ).siblings().removeClass( 'active' )
            $( '.navbar-nav a' ).click( function () {
                $( this ).parent().addClass( 'active' ).siblings().removeClass( 'active' )
            } )
        } )
    </script>
</body>

</html>