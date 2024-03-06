<?php
$page = 'Shipment Management';
include( 'header.php' );

?>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4><?php echo $page; ?></h4>
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <input type="text" id="myInput" placeholder="Search Table" class="form-control" style="border: 2px solid #031077; margin-bottom: 10px">
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
                                    "SELECT COUNT(*) As total_records FROM shipment"
                                );

                                $total_records = mysqli_fetch_array( $result_count );
                                $total_records = $total_records[ 'total_records' ];
                                $total_no_of_pages = ceil( $total_records / $total_records_per_page );
                                $second_last = $total_no_of_pages - 1; // total pages minus 1

                                $sqlinvest = "SELECT * FROM shipment ORDER BY id DESC LIMIT $offset, $total_records_per_page";
                                $result = $conn->query( $sqlinvest );

                                if ( $result->num_rows > 0 ) {
                                    $i = 1;
                                    echo "<table class=\"table mb-0\">
<thead>
<tr>
<th>Tracking Number</th>
<th>Shipper Name</th>
<th>Receiver name</th>
<th>Shipment Date</th>
<th>Action</th>
</tr>
</thead>";

                                    while ( $row = $result->fetch_assoc() ) {

                                        ?>
                            <tbody id="myTable">
                                    <tr>
                                        <td>
                                             <?php echo $row['trackingNumber']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['shipperName']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['receiverName']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['departureDate']; ?>
                                        </td>
                                        
                                        <td>
                                            <a href="view.php?id=<?php echo $row['trackingNumber']; ?>" class="badge badge-primary">Edit</a>
                                            <a href="history.php?id=<?php echo $row['trackingNumber']; ?>" class="badge badge-success">Update History</a>
                                            <a href="delete.php?id=<?php echo $row['trackingNumber']; ?>" onClick="return(confirm('Are you sure that you want to delete This user?. This action is not reversible!'))" class="badge badge-danger">Delete</a>
                                        </td>


                                </tr>
                                </tbody>

                                <?php 
   $i++;
    }
    echo "</table>";
     $display = 'block';
    
} else {
    echo '<div class="alert alert-primary alert-block" style="display: <?php echo $alert; ?>"> <a class="close" data-dismiss="alert" href="#">×</a>
                                <h4 class="alert-heading">Info!</h4> No records found.
                            </div>'; $display = 'none'; } ?>

                            <div style="display: <?php echo $display; ?>;">
                                <ul style="display: flex; list-style: none; color: #fff;">
                                    <?php if($page_no > 1){
echo "<li style='color: #fff' class='badge badge-primary'><a href='?page_no=1'>First Page &nbsp;</a></li>";
} ?>

                                    <li style='color: #fff; margin-right: 5px' class='badge badge-primary' <?php if($page_no <=1 ){ echo "class='badge badge-primary'"; } ?>>
                                        <a <?php if($page_no> 1){
echo "href='?page_no=$previous_page'";
} ?>>Previous&nbsp;</a>
                                    </li>

                                    <li style='color: #fff' class='badge badge-primary' <?php if($page_no>= $total_no_of_pages){ echo "class='badge badge-primary'"; } ?>>
                                        <a style='color: #fff' <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>&nbsp;Next</a>
                                    </li>

                                    <?php if($page_no < $total_no_of_pages){
echo "<li style='color: #fff; margin-left: 5px' class='badge badge-danger'>&nbsp;<a style='color: #fff' href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
} ?>

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
                url: 'http://localhost/aaa/admin/time.php',
                success: function ( data ) {
                    $( '#timestamp' ).html( data );
                },
            } );
        }
    </script>
    <?php
    include( 'footer.php' );
    ?>