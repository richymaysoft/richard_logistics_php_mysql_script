<?php
$sub = "";
if ( isset( $_POST[ 'sub' ] ) ) {
    $sub = "Thank you fo subscribing to our Newsletter!";
}
include('config/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="description" content="<?php echo $siteName; ?> is a logistics company and is among the best in the world. We go all routes and countries to make our customers happy.">
    <link href="assets/images/favicon/favicon.png" rel="icon">
    <!-- PAGE TITLE HERE -->
    <title><?php echo $siteName; ?> | <?php echo $page; ?>
    </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,700%7cPoppins:400,600,700&amp;display=swap">
    <link rel="stylesheet" href="assets/css/libraries.css"/>
    <link rel="stylesheet" href="assets/css/<?php echo $siteStyle; ?>"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript">
        function googleTranslateElementInit2() {
            new google.translate.TranslateElement( {
                pageLanguage: 'en',
                autoDisplay: false
            }, 'google_translate_element2' );
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
    <script type="text/javascript" src="assets/js/language.js"></script>
    <link rel="stylesheet" href="css/language.css"/>
</head>

<body>
    <div class="wrapper">
        <!-- =========================
                Header
            =========================== -->
        <header id="header" class="header header-transparent">
            <nav class="navbar navbar-expand-lg sticky-navbar">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                            <img src="assets/images/logo/logo-light.png" class="logo-light" alt="logo">
                            <img src="assets/images/logo/logo-dark.png" class="logo-dark" alt="logo">
                        </a>
                

                    <button class="navbar-toggler" type="button">
                            <span class="menu-lines"><span></span></span>
                        </button>
                

                    <div class="collapse navbar-collapse" id="mainNavigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav__item with-dropdown">
                                <a href="index.php" class="dropdown-toggle nav__item-link">Home</a>
                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item with-dropdown">
                                <a href="about.php" class="dropdown-toggle nav__item-link">Company</a>
                                <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                                <ul class="dropdown-menu">
                                    <li class="nav__item"><a href="about.php" class="nav__item-link">About Us</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <li class="nav__item"><a href="why_choose_us.php" class="nav__item-link">Why Choose Us</a>
                                    </li>
                                    <!-- /.nav-item -->
                                    <!--<li class="nav__item"><a href="gallery.php" class="nav__item-link">Our Gallery</a></li>-->
                                </ul>
                                <!-- /.dropdown-menu -->
                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item with-dropdown">
                                <a href="services.php" class="dropdown-toggle nav__item-link">Services</a>
                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item with-dropdown">
                                <a href="portfolio.php" class="dropdown-toggle nav__item-link">Portfolio</a>
                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item with-dropdown">
                                <a href="track.php" class="dropdown-toggle nav__item-link">Tracking</a>
                            </li>
                            <!-- /.nav-item -->
                            <li class="nav__item">
                                <a href="contact.php" class="nav__item-link">Contacts</a>
                            </li>
                            <!-- /.nav-item -->
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-modules">
                        <ul class="modules__wrapper d-flex align-items-center list-unstyled">
                            <li class="d-none d-lg-block">
                                <a href="track.php" class="module__btn btn__request btn">
                                        <i class="fa fa-truck"></i> <span>Track Here</span><i class="fa fa-arrow-circle-right"></i>
                                    </a>
                            

                            </li>
                            <li>
                                <div class="dropdown">
                                    <div id="google_translate_element2"></div>
                                    <select onchange="doGTranslate(this);" class="module__btn btn__request btn">
                                        <option value="">Select Language</option>
                                        <option value="en|af">Afrikaans</option>
                                        <option value="en|sq">Albanian</option>
                                        <option value="en|ar">Arabic</option>
                                        <option value="en|hy">Armenian</option>
                                        <option value="en|az">Azerbaijani</option>
                                        <option value="en|eu">Basque</option>
                                        <option value="en|be">Belarusian</option>
                                        <option value="en|bg">Bulgarian</option>
                                        <option value="en|ca">Catalan</option>
                                        <option value="en|zh-CN">Chinese (Simplified)</option>
                                        <option value="en|zh-TW">Chinese (Traditional)</option>
                                        <option value="en|hr">Croatian</option>
                                        <option value="en|cs">Czech</option>
                                        <option value="en|da">Danish</option>
                                        <option value="en|nl">Dutch</option>
                                        <option value="en|en">English</option>
                                        <option value="en|et">Estonian</option>
                                        <option value="en|tl">Filipino</option>
                                        <option value="en|fi">Finnish</option>
                                        <option value="en|fr">French</option>
                                        <option value="en|gl">Galician</option>
                                        <option value="en|ka">Georgian</option>
                                        <option value="en|de">German</option>
                                        <option value="en|el">Greek</option>
                                        <option value="en|ht">Haitian Creole</option>
                                        <option value="en|iw">Hebrew</option>
                                        <option value="en|hi">Hindi</option>
                                        <option value="en|hu">Hungarian</option>
                                        <option value="en|is">Icelandic</option>
                                        <option value="en|id">Indonesian</option>
                                        <option value="en|ga">Irish</option>
                                        <option value="en|it">Italian</option>
                                        <option value="en|ja">Japanese</option>
                                        <option value="en|ko">Korean</option>
                                        <option value="en|lv">Latvian</option>
                                        <option value="en|lt">Lithuanian</option>
                                        <option value="en|mk">Macedonian</option>
                                        <option value="en|ms">Malay</option>
                                        <option value="en|mt">Maltese</option>
                                        <option value="en|no">Norwegian</option>
                                        <option value="en|fa">Persian</option>
                                        <option value="en|pl">Polish</option>
                                        <option value="en|pt">Portuguese</option>
                                        <option value="en|ro">Romanian</option>
                                        <option value="en|ru">Russian</option>
                                        <option value="en|sr">Serbian</option>
                                        <option value="en|sk">Slovak</option>
                                        <option value="en|sl">Slovenian</option>
                                        <option value="en|es">Spanish</option>
                                        <option value="en|sw">Swahili</option>
                                        <option value="en|sv">Swedish</option>
                                        <option value="en|th">Thai</option>
                                        <option value="en|tr">Turkish</option>
                                        <option value="en|uk">Ukrainian</option>
                                        <option value="en|ur">Urdu</option>
                                        <option value="en|vi">Vietnamese</option>
                                        <option value="en|cy">Welsh</option>
                                        <option value="en|yi">Yiddish</option>
                                    </select>

                                </div>
                            </li>
                        </ul>
                        <!-- /.modules-wrapper -->
                    </div>
                    <!-- /.navbar-modules -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navabr -->
        </header>
        <!-- /.Header -->