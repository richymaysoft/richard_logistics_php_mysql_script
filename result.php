<?php
include( "config/config.php" );

$display = '';
    $msg = '';

if ( isset( $_GET[ 'id' ] ) ) {
    $trackingNumber = $_GET[ 'id' ];
 
$Show = $conn->query( "SELECT * FROM shipment WHERE trackingNumber='$trackingNumber'" );

if ( $Show->num_rows > 0 ) {
    while ( $row = $Show->fetch_assoc() ) {
        $ShipperName = $row[ 'shipperName' ];
        $ShipperPhone = $row[ 'shipperPhone' ];
        $ShipperAddress = $row[ 'shipperAddress' ];
        $ShipperEmail = $row[ 'shipperEmail' ];
        $ReceiverName = $row[ 'receiverName' ];
        $ReceiverPhone = $row[ 'receiverPhone' ];
        $ReceiverAddress = $row[ 'receiverAddress' ];
        $ReceiverEmail = $row[ 'receiverEmail' ];
        $progress = $row[ 'progress' ];
        $origin = $row[ 'origin' ];
        $destination = $row[ 'destination' ];
        $package = $row[ 'package' ];
        $status = $row[ 'status' ];
        $shipmentType = $row[ 'shipmentType' ];
        $weight = $row[ 'weight' ];
        $ref = $row[ 'ref' ];
        $quantity = $row[ 'quantity' ];
        $paymentMode = $row[ 'paymentMode' ];
        $departureDate = $row[ 'departureDate' ];
        $deliveryDate = $row[ 'deliveryDate' ];
        $pickupDate = $row[ 'pickupDate' ];
        $description = $row[ 'description' ];
        $height = $row[ 'height' ];
        $length = $row[ 'length' ];
        $width = $row[ 'width' ];
    }
    
    if ($status == 'Shipment confirmed'){
        $stepOne = 'active';
        $stepTwo = '';
        $stepThree = '';
        $stepFour = '';
        $fa = '<i class="fa fa-truck"></i>';
        $txt = 'On the way';
        
    } else if ($status == 'Picked by carrier'){
        $stepOne = 'active';
        $stepTwo = 'active';
        $stepThree = '';
        $stepFour = '';
        $fa = '<i class="fa fa-truck"></i>';
        $txt = 'On the way';
        
    } else if ($status == 'On the way'){
        $stepOne = 'active';
        $stepTwo = 'active';
        $stepThree = 'active';
        $stepFour = '';  
        $fa = '<i class="fa fa-truck"></i>';
        $txt = 'On the way';
        
    } else if ($status == 'On Hold'){
        $stepOne = 'active';
        $stepTwo = 'active';
        $stepThree = 'active';
        $stepFour = '';  
        $fa = '<i class="fa fa-warning"></i>';
        $txt = 'On Hold';
        
    } else if ($status == 'Ready for pickup'){
        $stepOne = 'active';
        $stepTwo = 'active';
        $stepThree = 'active';
        $stepFour = 'active';
        $fa = '<i class="fa fa-truck"></i>';
        $txt = 'On the way';
    }

    $display = 'block';
    $msg = '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>
        <?php echo $siteName; ?> | <?php echo $trackingNumber; ?> Result </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon.png">
    <link href="css/tracking.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
    <style>
        .bodyClass {
            background-attachment: fixed;
            background-position: center;
            margin: 0;
            background-image: url('images/1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        
        .barras {
            width: 320px;
            margin: 10px auto;
        }
        
        .barra {
            width: 300px;
            height: 30px;
            background: #CCC;
            margin: 10px;
        }
        
        .barra-nivel {
            height: 30px;
            background: green;
            width: 1px;
            -webkit-transition: width 1s ease;
            -moz-transition: width 1s ease;
            transition: width 1s ease;
        }
        
        .valor-nivel {
            line-height: 30px;
            color: #fff;
            margin-left: 10px;
            font-family: "Montserrat";
            font-size: 12px;
        }
        
        .title {
            font-weight: 600
        }
        td {
          font-weight: 600;
              color: #000;
        }
    </style>

</head>

<body class="bodyClass">
    <div class="container">
        <?php echo $msg; ?>
        <div style="display: <?php echo $display; ?>">
            <article class="card">
                <header class="card-header">
                    <div style="float: left; margin-right: 10px"><img class="text-center mb-4" src="assets/images/logo/logo-dark.png" height="50px">
                    </div>
                    <div style="float: right;"><img class="text-center mb-4" src="https://barcode.tec-it.com/barcode.ashx?data=<?php echo $trackingNumber; ?>" height="50px">
                    </div>
                </header>
                <div class="card-body">
                    <h5>Tracking Number: <?php echo $trackingNumber; ?></h5>

                    <article class="card">
                        <div class="card-body row">
                            <div class="col" style="margin-bottom: 10px"> <strong>Shipper Information</strong> <br>
                                <i class="fa fa-user"></i>
                                <?php echo $ShipperName; ?><br>
                                <i class="fa fa-envelope-open"></i>
                                <?php echo $ShipperEmail; ?><br>
                                <i class="fa fa-phone"></i>
                                <?php echo $ShipperPhone; ?><br>
                                <i class="fa fa-address-book"></i>
                                <?php echo $ShipperAddress; ?>
                            </div>
                     
                            <div class="col"> <strong>Receiver Information</strong> <br>
                                <i class="fa fa-user"></i>
                                <?php echo $ReceiverName; ?><br>
                                <i class="fa fa-envelope-open"></i>
                                <?php echo $ReceiverEmail; ?><br>
                                <i class="fa fa-phone"></i>
                                <?php echo $ReceiverPhone; ?><br>
                                <i class="fa fa-address-book"></i>
                                <?php echo $ReceiverAddress; ?>
                            </div>

                        </div>
                    </article>
                    <div class="track">
                        <div class="step <?php echo $stepOne; ?>"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Shipment confirmed</span> </div>
                        <div class="step <?php echo $stepTwo; ?>"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text"> Picked by carrier</span> </div>
                        <div class="step <?php echo $stepThree; ?>"> <span class="icon"> <?php echo $fa; ?> </span> <span class="text"> <?php echo $txt; ?> </span></div>
                        <div class="step <?php echo $stepFour; ?>"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Ready for pickup</span> </div>
                    </div>
                    <hr>
                    <div class="barras">
                        <center>
                            <h5>Shipment Progress</h5>
                        </center>
                        <div class="barra">
                            <div class="barra-nivel" data-nivel="<?php echo $progress; ?>%"></div>
                        </div>
                    </div>
                    <hr>
                    <ul class="row">
                        <li class="col-md-4">
                            <figure class="itemside mb-3">
                                <figcaption class="info align-self-center">
                                    <p class="title">Origin</p>
                                    <span class="text-muted">
                                        <?php echo $origin; ?> </span>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-md-4">
                            <figure class="itemside mb-3">
                                <figcaption class="info align-self-center">
                                    <p class="title">Destination</p>
                                    <span class="text-muted">
                                        <?php echo $destination; ?> </span>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-md-4">
                            <figure class="itemside mb-3">
                                <figcaption class="info align-self-center">
                                    <p class="title">Package</p>
                                    <span class="text-muted">
                                        <?php echo $package; ?> </span>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                    <ul class="row">
                        <li class="col-md-4">
                            <figure class="itemside mb-3">
                                <figcaption class="info align-self-center">
                                    <p class="title">Current Status</p>
                                    <span class="text-muted">
                                        <?php echo $status; ?> </span>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-md-4">
                            <figure class="itemside mb-3">
                                <figcaption class="info align-self-center">
                                    <p class="title">Type of Shipment</p>
                                    <span class="text-muted">
                                        <?php echo $shipmentType; ?> </span>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-md-4">
                            <figure class="itemside mb-3">
                                <figcaption class="info align-self-center">
                                    <p class="title">Description</p>
                                    <span class="text-muted">
                                        <?php echo $description; ?> </span>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                    <ul class="row">
                        <li class="col-md-4">
                            <figure class="itemside mb-3">
                                <figcaption class="info align-self-center">
                                    <p class="title">Reference #</p>
                                    <span class="text-muted">
                                        <?php echo $ref; ?> </span>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-md-4">
                            <figure class="itemside mb-3">
                                <figcaption class="info align-self-center">
                                    <p class="title">Quantity</p>
                                    <span class="text-muted">
                                        <?php echo $quantity; ?>
                                    </span>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-md-4">
                            <figure class="itemside mb-3">
                                <figcaption class="info align-self-center">
                                    <p class="title">Payment Mode</p>
                                    <span class="text-muted">
                                        <?php echo $paymentMode; ?> </span>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                    <ul class="row">
                        <li class="col-md-4">
                            <figure class="itemside mb-3">
                                <figcaption class="info align-self-center">
                                    <p class="title">Departure Date</p>
                                    <span class="text-muted">
                                        <?php echo $departureDate; ?> </span>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-md-4">
                            <figure class="itemside mb-3">
                                <figcaption class="info align-self-center">
                                    <p class="title">Expected Delivery Date</p>
                                    <span class="text-muted">
                                        <?php echo $deliveryDate; ?> </span>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="col-md-4">
                            <figure class="itemside mb-3">
                                <figcaption class="info align-self-center">
                                    <p class="title">Pickup Date</p>
                                    <span class="text-muted">
                                        <?php echo $pickupDate; ?> </span>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                    <hr>
                     <h5>Package Details</h5>                       
                        <table class="table primary-table-bordered">
                            <thead class="thead-primary">
                                <tr>
                                    <th scope="col">Weight</th>
                                    <th scope="col">Height</th>
                                    <th scope="col">length</th>
                                    <th scope="col">Width</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $weight; ?></td>
                                    <td><?php echo $height; ?></td>
                                    <td><?php echo $length; ?></td>
                                    <td><?php echo $width; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    <hr>
                    <h5>Shipment History</h5>
                    </center>
                    <div class="table-responsive">
                        <?php

                                if ( isset( $_GET[ 'page_no' ] ) ) {
                                    $page_no = $_GET[ 'page_no' ];
                                } else {
                                    $page_no = 1;
                                }

                                $total_records_per_page = 20;

                                $offset = ( $page_no - 1 ) * $total_records_per_page;
                                $previous_page = $page_no - 1;
                                $next_page = $page_no + 1;
                                $adjacents = "2";
                                $variable2 = '&nbsp;';

                                $result_count = mysqli_query(
                                    $conn,
                                    "SELECT COUNT(*) As total_records FROM history WHERE trackingNumber='$trackingNumber'"
                                );

                                $total_records = mysqli_fetch_array( $result_count );
                                $total_records = $total_records[ 'total_records' ];
                                $total_no_of_pages = ceil( $total_records / $total_records_per_page );
                                $second_last = $total_no_of_pages - 1; // total pages minus 1

                                $sqlinvest = "SELECT * FROM history WHERE trackingNumber='$trackingNumber' ORDER BY id DESC LIMIT $offset, $total_records_per_page";
                                $result = $conn->query( $sqlinvest );

                                if ( $result->num_rows > 0 ) {
                                    echo "<table class='table primary-table-bordered'>
                            <thead class='thead-primary'>
                                <tr>
                                    <th scope='col'>Date</th>
                                    <th scope='col'>Location</th>
                                    <th scope='col'>Status</th>
                                    <th scope='col'>Remarks</th>
                                </tr>
                            </thead>";
                                    while ( $rows = $result->fetch_assoc() ) {
                                        ?>
                                <tbody>
                                <tr>

                                    <td>
                                        <?php echo $rows[ 'theDate' ]; ?>
                                    </td>
                                    <td>
                                        <?php echo $rows[ 'theLocation' ]; ?>
                                    </td>
                                    <td>
                                        <?php echo $rows[ 'theStatus' ]; ?>
                                    </td>
                                    <td>
                                        <?php echo $rows[ 'theRemark' ]; ?>
                                    </td>

                                </tr>
                                </tbody>
                                <?php 
    }
    echo "</table>";
    
} else {
    echo '<div class="alert alert-primary alert-block" style="display: <?php echo $alert; ?>"> <a class="close" data-dismiss="alert" href="#">×</a>
                                <h4 class="alert-heading">Info!</h4> No records found.
                            </div>';
        } 
?>

                    </div>

                    <hr>
                    <div>
                        <a href="track.php" class="btn btn-warning" data-abc="true" style="float: left"> <i class="fa fa-chevron-left"></i> Home</a>
                        <a href="#" onclick="window.print()" class="btn btn-success" data-abc="true" style="float: right"> <i class="fa fa-print"></i> Print</a>
                    </div>

                </div>
            </article>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $( '.barra-nivel' ).each( function () {
            var valorLargura = $( this ).data( 'nivel' );
            var valorNivel = $( this ).html( "<span class='valor-nivel'>" + valorLargura + "</span>" );
            $( this ).animate( {
                width: valorLargura
            } );
        } );
    </script>
</body>

</html>
<?php
} else {
   echo "<script type=\"text/javascript\">window.alert('Invalid Tracking Number!');
window.location.href = '$siteUrl';</script>";
}
   
    
} else {
echo "<script type=\"text/javascript\">window.alert('Invalid Input!');
window.location.href = '$siteUrl';</script>";
}
?>