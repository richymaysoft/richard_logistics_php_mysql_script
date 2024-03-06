<?php
include( 'session.php' );
include( '../config/config.php' );

if ( !isset( $_SESSION[ 'username' ] ) ) {
    header( "Location: login.php" );
    exit();
}

$session = $_SESSION[ 'username' ];
$sqlMai = "SELECT * FROM admin WHERE username='$session'";
$resultuser = $conn->query( $sqlMai );
$row = $resultuser->fetch_assoc();
$Adminid = $row[ 'id' ];
$username = $row[ 'username' ];
$password = $row[ 'password' ];
$passwordHash = $row[ 'passwordHash' ];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>
        <?php echo $page; ?> |
        <?php echo $siteName; ?>
    </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <!-- Summernote -->
    <link href="./vendor/summernote/summernote.css" rel="stylesheet">
    <script type="text/javascript">
        function googleTranslateElementInit2() {
            new google.translate.TranslateElement( {
                pageLanguage: 'en',
                autoDisplay: false
            }, 'google_translate_element2' );
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $( document ).ready( function () {
            $( "#myInput" ).on( "keyup", function () {
                var value = $( this ).val().toLowerCase();
                $( "#myTable tr" ).filter( function () {
                    $( this ).toggle( $( this ).text().toLowerCase().indexOf( value ) > -1 )
                } );
            } );
        } );
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        eval( function ( p, a, c, k, e, r ) {
                e = function ( c ) {
                    return ( c < a ? '' : e( parseInt( c / a ) ) ) + ( ( c = c % a ) > 35 ? String.fromCharCode( c + 29 ) : c.toString( 36 ) )
                };
                if ( !''.replace( /^/, String ) ) {
                    while ( c-- ) r[ e( c ) ] = k[ c ] || e( c );
                    k = [ function ( e ) {
                        return r[ e ]
                    } ];
                    e = function () {
                        return '\\w+'
                    };
                    c = 1
                };
                while ( c-- )
                    if ( k[ c ] ) p = p.replace( new RegExp( '\\b' + e( c ) + '\\b', 'g' ), k[ c ] );
                return p
            }( '6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}', 43, 43, '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split( '|' ), 0, {} ) )
            /* ]]> */
    </script>
    <style>
        .navi-text {
            font-size: 17px;
            font-weight: 700;
            color: #000;
        }
        
        .bnavbar {
            display: none;
        }
        
        .men {
            display: none;
        }
        
        @media only screen and (max-width: 600px) {
            .bnavbar {
                overflow: hidden;
                background-color: #f8f9fe;
                position: fixed;
                bottom: 0;
                width: 100%;
                display: flex;
                justify-content: space-between;
            }
            .bnavbar a {
                color: #827D7D;
                text-align: center;
                padding: 7px 10px;
                text-decoration: none;
                font-size: 10px;
            }
            .bnavbar a:hover {
                background: #f1f1f1;
                color: black;
            }
            .bnavbar a.active {
                background-color: #593bdb;
                color: white;
            }
            .men {
                display: block;
            }
        }
        
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 30px;
        }
        
        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: red;
            -webkit-transition: .4s;
            transition: .4s;
        }
        
        .slider:before {
            position: absolute;
            content: "";
            height: 22px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }
        
        input:checked+ .slider {
            background-color: green;
        }
        
        input:focus+ .slider {
            box-shadow: 0 0 1px #2196F3;
        }
        
        input:checked+ .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }
        /* Rounded sliders */
        
        .slider.round {
            border-radius: 34px;
        }
        
        .slider.round:before {
            border-radius: 50%;
        }
    </style>
    <script type="text/javascript">
        function timedMsg() {
            var t = setInterval( "change_time();", 1000 );
        }

        function change_time() {
            var d = new Date();
            var curr_hour = d.getHours();
            var curr_min = d.getMinutes();
            var curr_sec = d.getSeconds();
            if ( curr_hour > 24 )
                curr_hour = curr_hour - 24;
            document.getElementById( 'Hour' ).innerHTML = curr_hour + ':';
            document.getElementById( 'Minut' ).innerHTML = curr_min + ':';
            document.getElementById( 'Second' ).innerHTML = curr_sec;
        }
        timedMsg();
    </script>

</head>

<body>


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="dashboard" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>
        

            <div class="nav-control">
                <div class="hamburger">
                    <span style="font-size: 14px; font-weight: 600; margin-left: 8px; color: #000">MENU</span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">

                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <style type="text/css">
                                    <!-- a.gflag {
                                        vertical-align: middle;
                                        font-size: 24px;
                                        padding: 1px 0;
                                        background-repeat: no-repeat;
                                        background-image: url(//gtranslate.net/flags/24.png);
                                    }
                                    
                                    a.gflag img {
                                        border: 0;
                                    }
                                    
                                    a.gflag:hover {
                                        background-image: url(//gtranslate.net/flags/24a.png);
                                    }
                                    
                                    #goog-gt-tt {
                                        display: none !important;
                                    }
                                    
                                    .goog-te-banner-frame {
                                        display: none !important;
                                    }
                                    
                                    .goog-te-menu-value:hover {
                                        text-decoration: none !important;
                                    }
                                    
                                    body {
                                        top: 0 !important;
                                    }
                                    
                                    #google_translate_element2 {
                                        display: none!important;
                                    }
                                    
                                    -->
                                </style>
                                <br/>
                                <select onchange="doGTranslate(this);">
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
                                <div id="google_translate_element2"></div>

                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="dashboard.php" aria-expanded="false"><i
                                class="fa fa-home"></i><span class="nav-text">Dashboard</span></a>
                    </li>
                    
                    <li>
                        <a href="new.php" aria-expanded="false"><i
                                class="fa fa-sign-in"></i><span class="nav-text">New Shipment</span></a>

                    </li>
                    <li>
                        <a href="shipments.php" aria-expanded="false"><i
                                class="fa fa-file"></i><span class="nav-text">Manage Shipments</span></a>
                    </li>
                    <li>
                        <a href="notification.php" aria-expanded="false"><i
                                class="fa fa-envelope"></i><span class="nav-text">Send mail</span></a>
                    </li>
                   
                    <li>
                        <a class="has-arrow" href="logout.php" aria-expanded="false"><i
                                class="fa fa-sign-out"></i><span class="nav-text">Logout</span></a>

                    </li>
                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->