<?php
	$conn = mysqli_connect("localhost", "root", "", "lms_db");
	
	if(!$conn) 
	{ 
		die(" Connection Error "); 
	} 
	
	if(isset($_POST['Confirm']))
	{
		{
			$borrowed_date = $_POST['borrowed_date'];
			$return_date = $_POST['return_date'];
			
			$bdate = strtotime($borrowed_date);
			$rdate = strtotime($return_date);

			$diff = (($rdate - $bdate)/60/60/24) - 14;
			echo $diff, 'days';

			$fine = 0.5;
			
			$ftotal = $diff * 0.5;
			echo 'RM', $ftotal;

		}

		$id = $_POST['id'];
		$borrower_name = $_POST['borrower_name'];
		$borrowed_date = $_POST['borrowed_date'];
		$return_date = $_POST['return_date'];
		$days = $diff;
		$fine = $fine;
		$total = $ftotal;
		
		$query = "INSERT INTO calculatefine (id, borrower_name, days, fine, total)
		 			VALUES ('$id', '$borrower_name', '$days', '$fine', '$total')";

		$result = mysqli_query($conn, $query);
		
		if($result)
		{
			echo "Data successfully added into the system";
			header("location:../../view/manageFineModule/viewFineDetails.php");
		}
		else
		{
			die("Error inserting data !  ".$conn->error);
			header("location:../../view/manageFineModule/calculateFine.php");
		}
	}
	
	else
	{
		header("location:../../view/manageModule/calculateFine.php");
	}
?>