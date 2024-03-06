<?php
if ( isset( $_GET[ 'id' ] ) ) {
    $shipmentId = $_GET[ 'id' ];
}
$page = 'Update History For: ' . $shipmentId;
include( 'header.php' );
$msg = '';

if ( isset( $_POST[ 'submit' ] ) ) {
    $progress = $_POST[ 'progress' ];
    
    $theDate = $_POST[ 'theDate' ];
    $theStatus = $_POST[ 'theStatus' ];
    $theLocation = $conn->real_escape_string( $_POST[ 'theLocation' ] );
    $theRemark = $conn->real_escape_string( $_POST[ 'theRemark' ] );
    
    if ($theStatus == 'Pre-transit') {
       $shipmentStatus = 'Picked by carrier'; 
    } else if ($theStatus == 'In Transit') {
       $shipmentStatus = 'On the way'; 
    } else if ($theStatus == 'On Hold') {
       $shipmentStatus = 'On Hold'; 
    } else if ($theStatus == 'Out for Delivery') {
       $shipmentStatus = 'Ready for pickup'; 
    } else if ($theStatus == 'Delivered') {
       $shipmentStatus = 'Ready for pickup'; 
    }


    $sqlTracking = "UPDATE shipment SET 
    progress='$progress', 
    status='$shipmentStatus' 
    WHERE trackingNumber='$shipmentId'";

   $sqlHistory= "INSERT INTO history 
    (trackingNumber, theDate, theStatus, theLocation, theRemark) 
    VALUES 
    ('$shipmentId', '$theDate', '$theStatus', '$theLocation', '$theRemark')";

    if (( $conn->query( $sqlTracking ) === TRUE ) && ( $conn->query( $sqlHistory ) === TRUE ) ){


        $msg = '<div class="alert alert-primary alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
        <h4 class="alert-heading">Success!</h4> Your shipment history with tracking number ' . $shipmentId . ' has been updated. 
    </div>';

    } else {
        $msg = '<div class="alert alert-danger alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
        <h4 class="alert-heading">Error!</h4> Try again.
    </div>';
    }
}

?>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>
                        <?php echo $page; ?>
                    </h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Server Date <br>
                        <p style="color: #593bdb; font-weight: 600">
                            <?php echo date( "l jS \of F Y" ); ?> - <span id="Hour"></span><span id="Minut"></span><span id="Second"></span>

                        </p>
                    </li>
                </ol>
            </div>
        </div>
        <?php echo $msg; ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Shipment History</h4>
                        <a href="dashboard" class="badge badge-primary">Back</a>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form method="post">
                                    <div class="form-group">
                                        <label>Progress</label>
                                        <input type="number" class="form-control" placeholder="10" name="progress">
                                    </div>
                                    <div class="form-group">
                                        <label>Date</label>
                                        <input type="date" class="form-control" name="theDate">
                                    </div>
                                     
                                    <div class="form-group">
                                        <label>Current Status</label>
                                        <select class="form-control" name="theStatus">
                                            <option value="Pre-transit">Pre-transit</option>
                                            <option value="In Transit">In Transit</option>
                                            <option value="On Hold">On Hold</option>
                                            <option value="Out for Delivery">Out for Delivery</option>
                                            <option value="Delivered">Delivered</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" class="form-control" name="theLocation">
                                    </div>
                                    <div class="form-group">
                                        <label>Remarks</label>
                                        <textarea rows="4" class="form-control" name="theRemark"></textarea>
                                    </div>
                                    
                                    <div class="checkbox">
                                        <label>
										<input type="checkbox" required> Are you sure you want to update shipment history?
										</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" name="submit" value="Update History">
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
include( 'footer.php' );
?>