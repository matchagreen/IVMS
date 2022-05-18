<?php
require_once '../../libs/database.php';

class itemModel {
 	
	function addItem($ItemID,$itemName,$qtorder,$qtreceived,$unitPrice,$location,$dateOrder,$dateArrived,$companyName,$companyAddress,
                     $senderName,$truckPlateNo) {
	
	$sql = "BEGIN;
		INSERT INTO inventory (ItemID,itemName,qtorder,qtreceived,unitPrice,location,dateOrder,dateArrived,companyName,companyAddress,
                               senderName,truckPlateNo)
		VALUES(:ItemID, :itemName, :qtorder, :qtreceived, :unitPrice, :location, :dateOrder, :dateArrived, :companyName, :companyAddress,
                     :senderName, :truckPlateNo);
		COMMIT";
	$args = [
		':ItemID'=>$ItemID,
		':itemName'=>$itemName,
		':qtorder'=>$qtorder,
		':qtreceived'=>$qtreceived,
		':unitPrice'=>$unitPrice,
		':location'=>$location,
		':dateOrder'=>$dateOrder,
		':dateArrived'=>$dateArrived,
		':companyName'=>$companyName,
		':companyAddress'=>$companyAddress,
		':senderName'=>$senderName,
		':truckPlateNo'=>$truckPlateNo
		];
		
		DB::run($sql, $args);
		}
		
		function view(){
        //To retrieve all good information from good table and send them to goodController class.
        $sql = "select $ItemID, $itemName, $qtorder, $qtreceived, $unitPrice, ($qtreceived * $unitPrice), $location, $dateOrder, 
                        $dateArrived, $companyName, $companyAddress, $senderName, $truckPlateNo from inventory ORDER BY $dateArrived DESC";
        return DB::run($sql);
    }
	
		function viewOut(){
        //To retrieve all good information from good table and send them to goodController class.
        $sql = "SELECT $inventory.itemName, $inventory.qtreceived, $booking.ItemQuantity, ($inventory.qtreceived - $booking.ItemQuantity) FROM inventory 
		        INNER JOIN booking ON $inventory.ItemID=$booking.ItemID";
        return DB::run($sql);
    }
	
	 function deleteItem($ItemID){
       $sql = "BEGIN;
	        		DELETE FROM inventory WHERE ItemID='$ItemID';
	        		COMMIT";

	        DB::run($sql);
    }
	
}
?>