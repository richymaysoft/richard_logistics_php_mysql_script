<?php
include( '../config/config.php' );

if (isset($_GET['id'])) {
   
    $id = $_GET['id'];
		
		$conn->query("DELETE FROM shipment WHERE trackingNumber='$id'");
		$conn->query("DELETE FROM history WHERE trackingNumber='$id'"); 
    

echo "<script type=\"text/javascript\">window.alert('All Data For the Shipment Deleted Successfully');
window.location.href = 'shipments.php';</script>"; 
    
} else{
    echo "<script type=\"text/javascript\">window.alert('Error!, Click OK to try again');
window.location.href = 'shipments.php';</script>";  
    
}
?>