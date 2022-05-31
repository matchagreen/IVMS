
<?php
require_once '../../BusinessServiceLayer/controller/itemController.php';

//Delete  depends on itemID//
$sql = "DELETE FROM inventory WHERE ItemID='". $_GET['ItemID']."'";

if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
mysqli_close($connection);
header("location:In_Item.php");
?>

