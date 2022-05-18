 <?php
	require_once '../../libs/database.php';


	class staffModel{
	    //add staff information
	    function addStaff($name,$id,$phone, $address,$email,$officeTel,$officeFax,$groupsList)
	    {
	        $sql = "BEGIN;
	        		INSERT INTO staff (name,id,phone,address,email,officeTel,officeFax,groupsList) VALUES
	        		(:name , :id , :phone , :address, :email , :officeTel, :officeFax , :groupsList);
	        		COMMIT";

	        $args = [
	        ':name'=>$name, 
	        ':id'=>$id, 
	        ':phone'=>$phone, 
	        ':address'=>$address, 
	        ':email'=>$email, 
	        ':officeTel'=>$officeTel, 
	        ':officeFax'=>$officeFax, 
	        ':groupsList'=>$groupsList ];
	        
	        DB::run($sql, $args);
		}
		//delete staff information
	    function deleteStaff($id)
	    {
	    	$sql = "BEGIN;
	        		DELETE FROM staff WHERE id='$id';
	        		COMMIT";

	        DB::run($sql);

	        $message = "Staff Information with ID Number : $id has been deleted.";
			echo "<script type='text/javascript'>alert('$message');</script>";
	        
	    }
	    //view staff information
	    function viewStaff($id)
	    {
	    	$sql = "SELECT * FROM staff WHERE id='$id'";
	    			
	    	DB::run($sql);
	    }

	    //view admin information
	    function viewMyInfo($id){
	    	$sql = "SELECT * FROM staff WHERE id='$id'";
	    			
	    	DB::run($sql);
	    }
	    
	    //edit staff information
	    function editStaff($name,$id,$phone, $address,$email,$officeTel,$officeFax,$groupsList)
	    {
	    	$sql = "BEGIN;
	    			UPDATE staff SET name='$name', id='$id', phone='$phone', address='$address', email='$email', officeTel='$officeTel', officeFax='$officeFax', groupsList='$groupsList' WHERE id='$id';
	    			COMMIT";
	    			
	    	DB::run($sql);

	    	if(DB::run($sql))
	    	{
	    		echo '<script type="text/javascript"> alert("Data Updated") </script>';
	    	}
	    	else
	    	{
	    		echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
	    	}
	    }


	}
?>
