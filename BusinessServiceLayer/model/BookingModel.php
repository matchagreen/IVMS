<?php
require_once '../../libs/database.php';

class bookingmodel {
 	
	function addbooking($BookingID,$ItemID,$id,$ItemQuantity,$DateBooking,$BookingTime,$PickUpDate) {
	
	$sql = "BEGIN;
		INSERT INTO booking (BookingID,ItemID,id,ItemQuantity,DateBooking,BookingTime,PickUpDate)
		VALUES(:BookingID, :id, :ItemID, :ItemQuantity, :DateBooking, :BookingTime, :PickUpDate);
		COMMIT";
	$args = [
		':BookingID'=>$BookingID,
		':ItemID'=>$ItemID,
		':id' =>$id,
		':ItemQuantity'=>$ItemQuantity,
		':DateBooking'=>$DateBooking,
		':BookingTime'=>$BookingTime,
		':PickUpDate'=>$PickUpDate
		];
		
		DB::run($sql, $args);
		}
		
		function view(){
        //To retrieve all good information from good table and send them to goodController class.
        $sql = "select * from booking";
        return DB::run($sql);
		
		function deleteBooking($BookingID){
		$sql = "DELETE FROM booking WHERE BookingID =$delete";
		
		DB::run($sql);
		}
		
		function updatebooking($BookingID,$ItemID,$id,$ItemQuantity,$DateBooking,$BookingTime,$PickUpDate) {
	
		$sql = "BEGIN;UPDATE booking SET(BookingID=':BookingID',ItemID=':ItemID',id=':id',ItemQuantity=':ItemQuantity',DateBooking=':DateBooking',BookingTime=':BookingTime',PickUpDate=':PickUpDate');COMMIT";
		
		$args = [
		':BookingID'=>$BookingID,
		':ItemID'=>$ItemID,
		':id' =>$id,
		':ItemQuantity'=>$ItemQuantity,
		':DateBooking'=>$DateBooking,
		':BookingTime'=>$BookingTime,
		':PickUpDate'=>$PickUpDate
		];
		DB::run($sql, $args);
		}
    }
}