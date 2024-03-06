<?php 
//Start the Session
session_start();
include('../config/config.php'); 
if(count($_POST)>0) {
$username = $conn->real_escape_string($_POST["username"]);
$pass = $conn->real_escape_string($_POST["password"]);
$password = md5($pass);
$loginQuery = "SELECT * FROM admin WHERE username='$username' and password = '$password'";
$count  = $conn->query( $loginQuery );
if ( $count->num_rows > 0 ) {
 $_SESSION['username'] = $_POST["username"];
	header("Location: dashboard.php");
	
	} else {
	echo "<script type=\"text/javascript\">window.alert('Invalid Login Details!');
window.location.href = 'login.php';</script>";
	}
}

?>
<html>
<head>
    <link rel="shortcut icon" href="images/favicon.png">
    <!DOCTYPE html>

    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <!-- /Added by HTTrack -->

    <title><?php echo $siteName; ?> | Secured Login - Safe Area</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Login"/>

    <script>
        addEventListener( "load", function () {
            setTimeout( hideURLbar, 0 );
        }, false );

        function hideURLbar() {
            window.scrollTo( 0, 1 );
        }
    </script>

    <!-- Custom Theme files -->
    <link href="css/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- //Custom Theme files -->

    <!-- web font -->
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <!-- //web font -->

</head>

<body>

    <!-- main -->
    <div class="w3layouts-main">
        <div class="bg-layer">
            <div align="center" style="padding-top: 50px;"><img src="images/logo-text.png" width="200px"/></div>
            <br>
            <div class="header-main" style="margin-top: 50px">
                
                <div class="header-left-bottom">
                    <form method="post">
                        <div class="icon1">
                            <input type="text" name="username" placeholder="Username" required=""/>
                        </div>
                        <div class="icon1">
                            <input type="password" name="password" placeholder="Password" required=""/>
                        </div>
                        <div class="login-check">
                            <label class="checkbox">
                                <input type="checkbox" name="checkbox" checked=""><i> </i> Keep me logged in</label>
                        </div>
                        <div class="bottom">
                            <button class="btn" type="submit">Log In</button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
    <!-- //main -->

</body>
</html>