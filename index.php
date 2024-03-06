<?php
$page = 'Home';
$msg = "";
if ( isset( $_GET[ 'quote' ] ) ) {
    $msg = "Your message was sent successfully. We'll get back to you shortly";
}

include( 'header.php' );
?>

<!-- ============================
Slider
    ===
    === === === === === === === === === -->
    <section id="slider1" class="slider slider-1">
        <div class="owl-carousel thumbs-carousel carousel-arrows" data-slider-id="slider1" data-dots="false" data-autoplay="true" data-nav="true" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">
            <div class="slide-item align-v-h bg-overlay">
                <div class="bg-img"><img src="images/1.jpg" alt="slide img">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <div class="slide__content">
                                <h2 class="slide__title">Fast, Certified & Flexible Solutions.</h2>
                                <p class="slide__desc">Through integrated supply chain solutions, our drives sustainable competitive advantages to some of the largest companies allover the world.</p>
                                <a href="services.php" class="btn btn__primary btn__hover2 mr-30">Our Services</a>
                                <a href="about.php" class="btn btn__white">About Us</a>
                            </div>
                            <!-- /.slide-content -->
                        </div>
                        <!-- /.col-lg-8 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.slide-item -->
            <div class="slide-item align-v-h bg-overlay">
                <div class="bg-img"><img src="images/4.jpg" alt="slide img">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <div class="slide__content">
                                <h2 class="slide__title">Affordable Price & Great Solutions.</h2>
                                <p class="slide__desc">Through integrated supply chain solutions, our drives sustainable competitive advantages to some of the largest companies allover the world.</p>
                                <a href="about.php" class="btn btn__white mr-30">About Us</a>
                                <a href="services.php" class="btn btn__primary btn__hover2">Our Services</a>
                            </div>
                            <!-- /.slide-content -->
                        </div>
                        <!-- /.col-lg-8 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.slide-item -->
            <div class="slide-item align-v-h bg-overlay">
                <div class="bg-img"><img src="images/5.jpg" alt="slide img">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <div class="slide__content">
                                <h2 class="slide__title">Solutions Matchs Your Needs. </h2>
                                <p class="slide__desc">Through integrated supply chain solutions, our drives sustainable competitive advantages to some of the largest companies allover the world.</p>
                                <a href="services.php" class="btn btn__primary btn__hover2 mr-30">Our Services</a>
                                <a href="about.php" class="btn btn__white">About Us</a>
                            </div>
                            <!-- /.slide-content -->
                        </div>
                        <!-- /.col-lg-8 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.slide-item -->
            <div class="slide-item align-v-h bg-overlay">
                <div class="bg-img"><img src="images/3.jpg" alt="slide img">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8">
                            <div class="slide__content">
                                <h2 class="slide__title">Affordable Price, Certified experts &</h2>
                                <p class="slide__desc">Through integrated supply chain solutions, our drives sustainable competitive advantages to some of the largest companies allover the world.</p>
                                <a href="about.php" class="btn btn__white mr-30">Get Started</a>
                                <a href="services.php" class="btn btn__primary btn__hover2">Our Services</a>
                            </div>
                            <!-- /.slide-content -->
                        </div>
                        <!-- /.col-lg-8 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.slide-item -->
        </div>
        <!-- /.carousel -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 d-none d-lg-block">
                    <div class="owl-thumbs thumbs-dots" data-slider-id="slider1">
                        <button class="owl-thumb-item">
                        <i class="fa fa-truck"></i>
                        <span>Warehousing <br> Services</span>
                    </button>
                    

                        <button class="owl-thumb-item">
                        <i class="fa fa-plane"></i>
                        <span>Air Freight<br> Services</span>
                    </button>
                    

                        <button class="owl-thumb-item">
                        <i class="fa fa-ship"></i>
                        <span>Ocean Freight<br> Services</span>
                    </button>
                    

                        <button class="owl-thumb-item">
                        <i class="fa fa-bus"></i>
                        <span>Road Freight<br> Services</span>
                    </button>
                    

                    </div>
                    <!-- /.owl-thumbs -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.slider -->

<!-- ========================
Services
    ===
    === === === === === === === === -->
    <section id="services" class="services pb-90">
        <div class="container">
            <div class="row heading heading-2 mb-40">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <span class="heading__subtitle">Real Solutions, Real Fast!</span>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h2 class="heading__title">Delivering the Best Global Logistics Solutions.</h2>
                </div>
                <!-- /.col-lg-5 -->
                <div class="col-sm-12 col-md-12 col-lg-6 ">
                    <p class="heading__desc">Our global logistics expertise, advanced supply chain technology & customized logistics solutions will help you analyze, develop and implement successful supply chain management strategies.
                    </p>
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row text-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__icon"><i class="fa fa-plane"></i>
                        </div>
                        <div class="service__content">
                            <h4 class="service__title">Air Freight</h4>
                            <p class="service__desc">We can arrange and provides with the comprehensive service in the sphere of urgent, valuable, fragile or any cargoes conscientious accelerated delivery by air.</p>
                            <a href="services.php" class="btn btn__white">
                            <span>Read More</span><i class="fa fa-arrow-circle-o-right"></i>
                        </a>
                        

                        </div>
                    </div>
                    <!-- /.service-item -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__icon"><i class="fa fa-ship"></i>
                        </div>
                        <div class="service__content">
                            <h4 class="service__title">Ocean Freight</h4>
                            <p class="service__desc">We provides with the main types of basic conditions International sea transportation is implemented by our partners’ vessels, the largest ocean carriers.</p>
                            <a href="services.php" class="btn btn__white">
                            <span>Read More</span><i class="fa fa-arrow-circle-o-right"></i>
                        </a>
                        

                        </div>
                    </div>
                    <!-- /.service-item -->
                </div>
                <!-- /.col-lg-4 -->
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="service-item">
                        <div class="service__icon"><i class="fa fa-truck"></i>
                        </div>
                        <div class="service__content">
                            <h4 class="service__title">Road Freight</h4>
                            <p class="service__desc">We provides with the main types of basic conditions International sea transportation is implemented by our partners’ vessels, the largest ocean carriers.</p>
                            <a href="services.php" class="btn btn__white">
                            <span>Read More</span><i class="fa fa-arrow-circle-o-right"></i>
                        </a>
                        

                        </div>
                    </div>
                    <!-- /.service-item -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <p class="text__link mb-0">Logistic & Transport Solutions Saves Your Time <a href="contact.php">Find your solution</a>
                    </p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.Services -->
    <!-- =========================== 
fancybox Carousel
    ===
    === === === === === === === === == -->
    <section id="fancyboxCarousel" class="fancybox-layout4 fancybox-carousel bg-overlay bg-overlay-gradient-secondary-2">
        <div class="bg-img"><img src="assets/images/backgrounds/5.jpg" alt="background">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-40">
                        <span class="heading__subtitle">Our Features</span>
                        <h2 class="heading__title color-white">Why Choose Us!</h2>
                        <p class="heading__desc">We continue to pursue that same vision in today's complex, uncertain world, working every day to earn our customers’ trust!</p>
                    </div>
                    <!-- /.heading -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="carousel owl-carousel carousel-arrows" data-slide="4" data-slide-md="2" data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="20" data-loop="true" data-speed="800">
                        <!-- fancybox item #1 -->
                        <div class="fancybox-item">
                            <div class="fancybox__icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Transparent Pricing</h4>
                                <p class="fancybox__desc">International supply chains involves challenging regulations.</p>
                            </div>
                            <!-- /.fancybox-content -->
                        </div>
                        <!-- /.fancybox-item -->
                        <!-- fancybox item #2 -->
                        <div class="fancybox-item">
                            <div class="fancybox__icon">
                                <i class="fa fa-search"></i>
                            </div>
                            <!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Real-Time Tracking</h4>
                                <p class="fancybox__desc">Ensure customers’ supply chains are fully compliant by practices.</p>
                            </div>
                            <!-- /.fancybox-content -->
                        </div>
                        <!-- /.fancybox-item -->
                        <!-- fancybox item #3 -->
                        <div class="fancybox-item">
                            <div class="fancybox__icon">
                                <i class="fa fa-cart-plus"></i>
                            </div>
                            <!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Warehouse Storage</h4>
                                <p class="fancybox__desc">Depending on your product, we provide warehouse activities.</p>
                            </div>
                            <!-- /.fancybox-content -->
                        </div>
                        <!-- /.fancybox-item -->
                        <!-- fancybox item #4 -->
                        <div class="fancybox-item">
                            <div class="fancybox__icon">
                                <i class="fa fa-shield"></i>
                            </div>
                            <!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Security For Cargo</h4>
                                <p class="fancybox__desc">High security requirements and are certified to local standards.</p>
                            </div>
                            <!-- /.fancybox-content -->
                        </div>
                        <!-- /.fancybox-item -->
                        <!-- fancybox item #5 -->
                        <div class="fancybox-item">
                            <div class="fancybox__icon">
                                <i class="fa fa-bank"></i>
                            </div>
                            <!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Easy Payment Methods</h4>
                                <p class="fancybox__desc">You can make use the easy payment options, listed below.</p>
                            </div>
                            <!-- /.fancybox-content -->
                        </div>
                        <!-- /.fancybox-item -->
                        <!-- fancybox item #6 -->
                        <div class="fancybox-item">
                            <div class="fancybox__icon">
                                <i class="fa fa-mail-forward"></i>
                            </div>
                            <!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Fast & Efficient Delivery</h4>
                                <p class="fancybox__desc">We enhance our operations by relieving you of the worries.</p>
                            </div>
                            <!-- /.fancybox-content -->
                        </div>
                        <!-- /.fancybox-item -->
                        <!-- fancybox item #7 -->
                        <div class="fancybox-item">
                            <div class="fancybox__icon">
                                <i class="fa fa-list"></i>
                            </div>
                            <!-- /.fancybox-icon -->
                            <div class="fancybox__content">
                                <h4 class="fancybox__title">Personalised solutions</h4>
                                <p class="fancybox__desc">We continue to pursue that same vision in today's complex solutions.</p>
                            </div>
                            <!-- /.fancybox-content -->
                        </div>
                        <!-- /.fancybox-item -->
                    </div>
                    <!-- /.carousel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                    <p class="text__link mb-0">Working every day to earn our customers’ trust. <a href="#" class="color-theme">Get Started!</a>
                    </p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.fancybox Carousel -->

<!-- ========================
Request Quote Tabs
    ===
    === === === === === === === === -->
    <section id="requestQuoteTabs" class="request-quote request-quote-tabs p-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="request__form">
                        <nav class="nav nav-tabs">
                            <a class="nav__link" data-toggle="tab" href="#quote">Request A Quote</a>
                            <a class="nav__link active" data-toggle="tab" href="#track">Track & Trace</a>
                        </nav>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="quote">
                                <div class="request-quote-panel">

                                    <div class="request__form-body">

                                        <div class="row">

                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <h6>Personal Data</h6>
                                            </div>
                                            <!-- /.col-lg-12 -->
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Name">
                                                </div>
                                            </div>
                                            <!-- /.col-lg-6 -->
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                            <!-- /.col-lg-6 -->
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Phone">
                                                </div>
                                            </div>
                                            <!-- /.col-lg-6 -->
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <h6 class="mt-5">Shipment Data</h6>
                                            </div>
                                            <!-- /.col-lg-12 -->
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group form-group-select">
                                                    <select class="form-control">
                                                        <option>Freight Type</option>
                                                        <option>Freight Type 1</option>
                                                        <option>Freight Type 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- /.col-lg-6 -->
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="City of Departure">
                                                </div>
                                            </div>
                                            <!-- /.col-lg-6 -->
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Delivery City">
                                                </div>
                                            </div>
                                            <!-- /.col-lg-6 -->
                                            <div class="col-sm-6 col-md-4 col-lg-4">
                                                <div class="form-group form-group-select">
                                                    <select class="form-control">
                                                        <option>Incoterms</option>
                                                        <option>Incoterms 1</option>
                                                        <option>Incoterms 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- /.col-lg-6 -->
                                            <div class="col-sm-6 col-md-4 col-lg-4 d-flex">
                                                <div class="form-group mr-20">
                                                    <input type="email" class="form-control" placeholder="Weight">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Height">
                                                </div>
                                            </div>
                                            <!-- /.col-lg-3 -->
                                            <div class="col-sm-6 col-md-4 col-lg-4  d-flex">
                                                <div class="form-group mr-20">
                                                    <input type="email" class="form-control" placeholder="Width">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Length">
                                                </div>
                                            </div>
                                            <!-- /.col-lg-4 -->
                                            <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap">
                                                <div class="form-group input-radio">
                                                    <label class="label-radio">Fragile
                                                    <input type="radio" name="radioGroup2" checked="">
                                                    <span class="radio-indicator"></span>
                                                </label>
                                                </div>
                                                <div class="form-group input-radio">
                                                    <label class="label-radio">Express Delivery
                                                    <input type="radio" name="radioGroup2">
                                                    <span class="radio-indicator"></span>
                                                </label>
                                                </div>
                                                <div class="form-group input-radio">
                                                    <label class="label-radio">Insurance
                                                    <input type="radio" name="radioGroup2">
                                                    <span class="radio-indicator"></span>
                                                </label>
                                                </div>
                                                <div class="form-group input-radio">
                                                    <label class="label-radio">Packaging
                                                    <input type="radio" name="radioGroup2">
                                                    <span class="radio-indicator"></span>
                                                </label>
                                                </div>
                                            </div>
                                            <!-- /.col-lg-12 -->
                                            <div class="col-sm-12 col-md-12 col-lg-12">
                                                <form method="get">
                                                    <input type="hidden" name="quote" value="Request a Quote">
                                                    <button class="btn btn__secondary btn__block">Request a Quote</button>
                                                </form>
                                            </div>

                                            <!-- /.col-lg-12 -->
                                        </div>
                                    </div>

                                    <!-- /.request__form-body -->
                                    <div class="widget widget-download bg-theme">
                                        <div class="widget__content">
                                            <h5>Industry<br>Solutions!</h5>
                                            <p>Our worldwide presence ensures the timeliness, cost efficiency and compliance adherence required to ensure your production timelines are met.</p>
                                            <a href="services.php" class="btn btn__secondary btn__hover2 btn__block">
                                            <span>Our Services</span><i class="fa fa-arrow-circle-o-right"></i>
                                        </a>
                                        

                                        </div>
                                        <!-- /.widget__content -->
                                    </div>
                                    <!-- /.widget-download -->
                                </div>
                                <!-- /.request-quote-panel-->
                            </div>
                            <!-- /.tab -->
                            <div class="tab-pane fade active show" id="track">
                                <div class="request-quote-panel">
                                    <div class="request__form-body">
                                        <div class="row">
                                            <form method="get" action="result.php" style="width: 100%; float: left;">
                                                <h3>
                                                    <?php echo $msg; ?>
                                                </h3>
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <div class="form-group">
                                                        <label>Tracking Number</label>
                                                        <div class="form-group">
                                                            <input type="text" name="id" class="form-control" placeholder="123456789AVX">
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <!-- /.col-lg-12 -->
                                                <div class="col-sm-12 col-md-12 col-lg-12">
                                                    <button class="btn btn__secondary btn__block" type="submit">Track & Trace</button>
                                                </div>
                                                <!-- /.col-lg-12 -->
                                            </form>
                                        </div>


                                    </div>
                                    <!-- /.request__form-body -->
                                    <div class="widget widget-download bg-theme">
                                        <div class="widget__content">
                                            <h5>Industry<br>Solutions!</h5>
                                            <p>Our worldwide presence ensures the timeliness, cost efficiency and compliance adherence required to ensure your production timelines are met.</p>

                                            <a href="services.php" class="btn btn__secondary btn__hover2 btn__block">
                                            <span>Our Services</span><i class="fa fa-arrow-circle-o-right"></i>
                                        </a>
                                        

                                        </div>
                                        <!-- /.widget__content -->
                                    </div>
                                    <!-- /.widget-download -->
                                </div>
                                <!-- /.request-quote-panel-->
                            </div>
                            <!-- /.tab -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.request-form -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.Request Quote Tabs -->

<!-- ========================= 
Testimonial #1
    ===
    === === === === === === === = -->
    <section id="testimonial" class="testimonial testimonial-1 text-center pt-80 pb-70">
        <div class="bg-img"><img src="assets/images/backgrounds/2.png" alt="background">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading mb-50">
                        <span class="heading__subtitle">What Peoples Say!</span>
                        <h2 class="heading__title">Testimonials</h2>
                    </div>
                    <!-- /.heading -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                    <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1" data-slide-md="1" data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                        <!-- Testimonial #1 -->
                        <div class=" testimonial-item">
                            <div class="testimonial__thumb">
                                <img src="images/thumbs_1.jpg" alt="author thumb">
                            </div>
                            <!-- /.testimonial-thumb -->
                            <div class="testimonial__content">
                                <p class="testimonial__desc">They are the best of the best, and expertly trained team members who take the extra step and go the extra mile, all to fulfill our dedicated promise to deliver innovative and dynamic solutions to our customers to fit the needs of a rapidly changing global environment.</p>
                            </div>
                            <!-- /.testimonial-content -->
                            <div class="testimonial__meta">
                                <img src="assets/images/testimonials/signature.png" alt="signature">
                                <p class="testimonial__meta-desc">The Move Inc</p>
                            </div>
                            <!-- /.testimonial-meta -->
                        </div>
                        <!-- /. testimonial-item -->
                        <!-- Testimonial #2 -->
                        <div class=" testimonial-item">
                            <div class="testimonial__thumb">
                                <img src="images/thumbs_2.jpg" alt="author thumb">
                            </div>
                            <!-- /.testimonial-thumb -->
                            <div class="testimonial__content">
                                <p class="testimonial__desc"><?php echo $siteName; ?> is the best of the best, and expertly trained team members who take the extra step and go the extra mile, all to fulfill our dedicated promise to deliver innovative and dynamic solutions to our customers to fit the needs of a rapidly changing global environment.
                                </p>
                            </div>
                            <!-- /.testimonial-content -->
                            <div class="testimonial__meta">
                                <img src="assets/images/testimonials/signature.png" alt="signature">
                                <p class="testimonial__meta-desc">The Move Inc</p>
                            </div>
                            <!-- /.testimonial-meta -->
                        </div>
                        <!-- /. testimonial-item -->
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.testimonial1 -->

<!-- =====================
Clients 1
    ===
    === === === === === === === -->
    <section id="clients1" class="clients clients-1 border-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="carousel owl-carousel" data-slide="6" data-slide-md="4" data-slide-sm="2" data-autoplay="true" data-nav="false" data-dots="false" data-space="20" data-loop="true" data-speed="700">
                        <div class="client">
                            <a href="#"><img src="images/clients_9.png" alt="client"></a>
                        </div>
                        <!-- /.client -->
                        <div class="client">
                            <a href="#"><img src="images/clients_10.png" alt="client"></a>
                        </div>
                        <!-- /.client -->
                        <div class="client">
                            <a href="#"><img src="images/clients_11.png" alt="client"></a>
                        </div>
                        <!-- /.client -->
                        <div class="client">
                            <a href="#"><img src="images/clients_12.png" alt="client"></a>
                        </div>
                        <!-- /.client -->
                        <div class="client">
                            <a href="#"><img src="images/clients_13.png" alt="client"></a>
                        </div>
                        <!-- /.client -->
                        <div class="client">
                            <a href="#"><img src="images/clients_14.png" alt="client"></a>
                        </div>
                        <!-- /.client -->
                    </div>
                    <!-- /.carousel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.clients 1 -->


<!-- ======================
projects Carousel
    ===
    === === === === === === === = -->
    <section id="projectsCarousel" class="projects-carousel">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-50">
                        <span class="heading__subtitle">Latest Case Studies</span>
                        <h2 class="heading__title">Featured Projects</h2>
                        <p class="heading__desc">We presents the following case studies that exemplify the type of solutions and services we are providing across our customer base.</p>
                    </div>
                    <!-- /.heading -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2" data-slide-sm="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                        <div class="project-item">
                            <div class="project__img">
                                <img src="images/grid_1.jpg" alt="project img">
                                <div class="project__cat">
                                    <a href="#">Analystics</a><a href="#">Optimization</a>
                                </div>
                                <!-- /.project-cat -->
                            </div>
                            <!-- /.project-img -->
                            <div class="project__content">
                                <h4 class="project__title"><a href="#">Lane Pairing Analysis</a></h4>
                                <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing and optimizing your supply chain performance.</p>
                                <a href="services.php" class="btn btn__secondary btn__link">
                                <span>Read More</span><i class="fa fa-arrow-circle-o-right"></i>
                            </a>
                            

                            </div>
                            <!-- /.project-content -->
                        </div>
                        <!-- /.project-item -->
                        <div class="project-item">
                            <div class="project__img">
                                <img src="images/grid_2.jpg" alt="project img">
                                <div class="project__cat">
                                    <a href="services.php">Warehousing</a><a href="#">Distribution</a>
                                </div>
                                <!-- /.project-cat -->
                            </div>
                            <!-- /.project-img -->
                            <div class="project__content">
                                <h4 class="project__title"><a href="#">Warehouse Hand Inventory</a></h4>
                                <p class="project__desc">We understand that data is the greatest asset when it comes to analyzing and optimizing your supply chain performance.</p>
                                <a href="services.php" class="btn btn__secondary btn__link">
                                <span>Read More</span><i class="fa fa-arrow-circle-o-right"></i>
                            </a>
                            

                            </div>
                            <!-- /.project-content -->
                        </div>
                        <!-- /.project-item -->
                        <div class="project-item">
                            <div class="project__img">
                                <img src="images/grid_3.jpg" alt="project img">
                                <div class="project__cat">
                                    <a href="#">Logistics</a><a href="#">Analytics</a>
                                </div>
                                <!-- /.project-cat -->
                            </div>
                            <!-- /.project-img -->
                            <div class="project__content">
                                <h4 class="project__title"><a href="#">Minimize Cost Manufacturing</a></h4>
                                <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall spend by utilizing an extensive .</p>
                                <a href="services.php" class="btn btn__secondary btn__link">
                                <span>Read More</span><i class="fa fa-arrow-circle-o-right"></i>
                            </a>
                            

                            </div>
                            <!-- /.project-content -->
                        </div>
                        <!-- /.project-item -->
                        <div class="project-item">
                            <div class="project__img">
                                <img src="images/grid_4.jpg" alt="project img">
                                <div class="project__cat">
                                    <a href="#">Optimization</a><a href="#">Warehousing</a>
                                </div>
                                <!-- /.project-cat -->
                            </div>
                            <!-- /.project-img -->
                            <div class="project__content">
                                <h4 class="project__title"><a href="#">Regulatory Compliance</a></h4>
                                <p class="project__desc">Cost savings is crucial, innovative technology minimizes your overall spend by utilizing an extensive .</p>
                                <a href="services.php" class="btn btn__secondary btn__link">
                                <span>Read More</span><i class="fa fa-arrow-circle-o-right"></i>
                            </a>
                            

                            </div>
                            <!-- /.project-content -->
                        </div>
                        <!-- /.project-item -->
                    </div>
                    <!-- /.carousel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.projects-carousel -->
    <!-- ======================
banner 1
    ===
    === === === === === === === = -->
    <section id="banner1" class="banner banner-1 p-0 bg-gray">
        <div class="container-fluid col-padding-0">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="inner-padding">
                        <div class="heading heading-3 mb-30">
                            <i class="fa fa-tags"></i>
                            <span class="heading__subtitle">Affordable Price, Certified Forwarders</span>
                            <h2 class="heading__title">Safe, Reliable & Express Logistic Solutions That Saves Your Time!</h2>
                            <p class="heading__desc">We pride ourselves on providing the best transport and shipping services available allover the world. Our skilled personnel, utilising the latest communications, tracking and processing software, combined with decades of experience.</p>
                        </div>
                        <!-- /.heading -->
                        <a href="#" class="btn btn__primary">Schedule An Appointment</a>
                    </div>
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-6 bg-overlay  background-banner">
                    <div class="bg-img"><img src="images/banner_1.jpg" alt="background">
                    </div>
                    <div class="skills skills-panel">
                        <div class="heading mb-30">
                            <h2 class="heading__title">What We Achieved!</h2>
                            <p class="heading__desc">Fulfill our dedicated promise to deliver innovative & dynamic solutions to our customers to fit their needs.</p>
                        </div>
                        <!-- /.heading -->
                        <!-- progress 1 -->
                        <div class="progress-item">
                            <h6 class="progress__title">Warehousing</h6>
                            <span class="progress__percentage"></span>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                                </div>
                            </div>
                            <!-- /.progress -->
                        </div>
                        <!-- /.progress-item  -->
                        <!-- progress 2 -->
                        <div class="progress-item">
                            <h6 class="progress__title">Air Freight</h6>
                            <span class="progress__percentage"></span>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                                </div>
                            </div>
                            <!-- /.progress -->
                        </div>
                        <!-- /.progress-item  -->
                        <!-- progress 3 -->
                        <div class="progress-item">
                            <h6 class="progress__title">Ocean Freight</h6>
                            <span class="progress__percentage"></span>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                                </div>
                            </div>
                            <!-- /.progress -->
                        </div>
                        <!-- /.progress-item  -->
                        <!-- progress 4 -->
                        <div class="progress-item">
                            <h6 class="progress__title">Road Freight</h6>
                            <span class="progress__percentage"></span>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                                </div>
                            </div>
                            <!-- /.progress -->
                        </div>
                        <!-- /.progress-item  -->
                        <!-- progress 8 -->
                        <div class="progress-item">
                            <h6 class="progress__title">Supply Chain</h6>
                            <span class="progress__percentage"></span>
                            <div class="progress">
                                <div class="progress-bar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" role="progressbar">
                                </div>
                            </div>
                            <!-- /.progress -->
                        </div>
                        <!-- /.progress-item  -->
                    </div>
                    <!-- /.skills -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.banner 1 -->

<?php include('footer.php'); ?>