<?php
$page = 'Dashboard';
include( 'header.php' );

//TOTAL SHIPMENT
$TotalUs = "SELECT COUNT(id) As totalUsers FROM shipment";
$ttUser = $conn->query( $TotalUs );
$ttUsers = $ttUser->fetch_assoc();
$totalUsers = $ttUsers[ 'totalUsers' ];

?>
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Welcome Admin</h4>
                        <p class="mb-0">This is your dashboard</p>
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
           
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="stat-widget-one card-body">
                            <div class="stat-icon d-inline-block">
                                <i class="ti-link text-warning border-warning"></i>
                            </div>
                            <div class="stat-content d-inline-block">
                                <div class="stat-text">Total Shipments</div>
                                <div class="stat-digit">
                                    <?php echo $totalUsers; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        $( document ).ready( function () {
            setInterval( timestamp, 1000 );
        } );

        function timestamp() {
            $.ajax( {
                url: ' time.php',
                success: function ( data ) {
                    $( '#timestamp' ).html( data );
                },
            } );
        }
    </script>
    <?php
    include( 'footer.php' );
    ?>