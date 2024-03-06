<?php
include 'config/config.php';
$page = 'Contact us';
$msg = "";
if (isset($_POST['name'])) {
    $message = $_POST['message'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    
$separator = md5( time() );
$eol = "\r\n";
$headers = "From: $siteName <$noreply>" . $eol;
$headers .= "X-Sender: $siteName <$siteEmail>" . $eol;
$headers .= 'X-Mailer: PHP/' . phpversion();
$headers .= "X-Priority: 1" . $eol;
$headers .= "Return-Path: $siteEmail" . $eol;
$headers .= "Reply-To: $siteEmail" . $eol;
$headers .= "MIME-Version: 1.0" . $eol;
$headers .= "Content-Type: text/html; charset=iso-8859-1" . $eol;
    
    $body = '
    <h3>New Contact Message</h3>
    <p>Name: '.$name.'</p>
    <p>Email: '.$email.'</p>
    <p>Message: <br>'.$message.'</p>
    ';
  mail( $siteEmail, $subject, $body, $headers, $replyTo );
  
    $msg = "Your message was sent successfully. We'll get back to you shortly";
    $sub = "";
} 
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
                    <h1 class="pagetitle__heading">Contact us</h1>
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

<!-- ==========================
contact 3
    ===
    === === === === === === === === -->
    <section id="contact3" class="contact contact-3 text-center">
        <div class="container">
            <div class="row">
                <h3><?php echo $msg; ?></h3>
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading text-center mb-50">
                        <span class="heading__subtitle">Our Locations</span>
                        <h2 class="heading__title">Contact Us</h2>
                        <p class="heading__desc">We understand the importance of approaching each work integrally and believe in the power of simple and easy communication.</p>
                    </div>
                    <!-- /.heading -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                    <form method="post">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group"><input type="text" name="name" class="form-control" placeholder="Name" required="">
                                </div>
                            </div>
                            <!-- /.col-lg-6 -->
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="form-group"><input type="email" name="email" class="form-control" placeholder="Email" required="">
                                </div>
                            </div>
                            <!-- /.col-lg-6 -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group"><input type="text" name="subject" class="form-control" placeholder="Subject" required="">
                                </div>
                            </div>
                            <!-- /.col-lg-6 -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" placeholder="Request Details" required=""></textarea>
                                </div>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                                <button type="submit" class="btn btn__secondary btn__hover3 btn__block">Submit Request</button>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <!-- /.row -->
                    </form>
                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section> <!-- /.contact 3 -->

<!-- ==========================
Contact 2
    ===
    === === === === === === === === = -->
    <section id="contact2" class="contact contact-2 text-center pt-0 pb-80">
        <div class="container">
            <div class="row">
                <!-- Contact panel #1 -->
                <div class="col-sm-12 col-md-4 col-lg-4">

                </div>
                <!-- /.col-lg-4 -->
                <!-- Contact panel #2 -->
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="contact-panel">
                        <div class="contact__panel-header">

                        </div>
                        <!-- /.contact-panel-header -->
                        <ul class="contact__list list-unstyled">
                            <li>Email: <a href="milto:<?php echo $siteEmail; ?>"><?php echo $siteEmail; ?></a>
                            </li>
                            <li><?php echo $siteAddress; ?></li>
                            <li>Hours: Mon-Fri: 8am – 7pm</li>
                        </ul>
                        <!-- /.contact-list -->
                        <a href="#" class="btn btn__primary btn__hover3">
                <span>Contact Us</span><i class="fa fa-arrow-right"></i>
              </a>
                    
                    </div>
                    <!-- /.contact-panel -->
                </div>
                <!-- /.col-lg-4 -->
                <!-- Contact panel #3 -->
                <div class="col-sm-12 col-md-4 col-lg-4">

                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
<?php include('footer.php'); ?>