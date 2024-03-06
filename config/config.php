<?php
//Timezone
date_default_timezone_set( "Asia/Nicosia" );

//Site Details
$siteUrl = 'https://moirlogistics.com';
$siteName = 'Moir Logistics';
$companyName = 'Moir Logistics';
$siteEmail = 'support@moirlogistics.com';
$siteCountry = 'United Kingdom';
$siteAddress = '16 South End, Croydon, Surrey, CRO 1DN';
$noreply = 'support@moirlogistics.com';
$logoUrl = $siteUrl.'/assets/images/logo/logo-dark.png';
$replyTo = 'support@moirlogistics.com';
$emailYear = date("Y");
$year = date( "Y" );

//*********************//
//SITE STYLES
// gold.css
// style.css
//
//********************//

$siteStyle = 'gold.css';
$sitePrefix = 'RML';

//DATABASE CONNECTION
$servername = "localhost";
$username = "righurcg_rightuser";
$password = "Danre4real@Danre4real@";
$dbname = "righurcg_right";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

