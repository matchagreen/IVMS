<?php
require_once '../../libs/database.php';

class itemorderlistModel {
 	 // To store and retrieve all the information of itemorderlist data.
	function addorderstatus($ListID, $id, $OrderStatus, $Comment) {
	 //To get all new order status information from itemorderlistcontroller class and save in itemorderlist table.
	$sql = "BEGIN;
		INSERT INTO itemorderlist (ListID, id, OrderStatus, Comment)
		VALUES(:ListID, :id, :OrderStatus, :Comment);
		COMMIT";
	$args = [
		':ListID'=>$ListID,
		':id'=>$id,
		':OrderStatus'=>$OrderStatus,
		':Comment'=>$Comment
		];
		
		DB::run($sql, $args);
		$message = "New order status has been added ";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
		
		function vieworderstatus(){
        //To retrieve all order status  information from itemorderlist table and send them to itemorderlistcontroller class.
        $sql = "select * from itemorderlist";
        return DB::run($sql);
    }
	function retrievebooking(){
        //To retrieve all booking information from booking table and send them to itemorderlistcontroller class.
        $sql = "select * from booking";
        return DB::run($sql);
	}
	
	function delete($ListID)
	//To get good_id from itemorderlistcontroller and delete in itemorderlist table.
	    {
	    	$sql = "BEGIN;
	        		DELETE FROM itemorderlist WHERE ListID='$ListID';
	        		COMMIT";

	        DB::run($sql);
			$message = "Order status with ID Number : $ListID has been deleted.";
			echo "<script type='text/javascript'>alert('$message');</script>";

	    }
	
	
}
