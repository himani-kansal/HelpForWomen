<?php
  include 'pass.php';
  session_start();
 $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(!(isset($_SESSION['email'])))
{ 
    $name = $_POST['name'];
    $pin = $_POST['pin'];
    $email = $_POST['email'];
    $phone=$_POST['phone'];


    $sqlRowCheck = "SELECT * FROM needy";
	$rowCheckResult = $conn->query($sqlRowCheck);
	

    if(isset($name) && isset($email)  && isset($pin) )
    {
   
	$queryCheck = "SELECT * FROM needy  WHERE `email`='$email'";
	$resultCheck=$conn->query($queryCheck);
	
	$jsonresponse=new stdClass();
	if($resultCheck->num_rows>0){
    		die("THE USER ALREADY EXISTS!!!");
    		}
	else{ 
		$queryInsert = "INSERT INTO needy VALUES('','$name','$email','$pin','$phone')";
		$queryInsertResult = $conn->query($queryInsert);

		if($queryInsertResult==NULL)
			{
			die("THE DATA IS NOT INSERTED !!! PLEASE TRY AGAIN!!");
			}
			$query = "SELECT * FROM needy WHERE `email`='$email' AND `pin`='$pin'";
			$result=$conn->query($query);
	
			$jsonresponse=new stdClass();
			$row=$result->fetch_array();
    		$jsonresponse->status=TRUE;
    		$_SESSION['name']=$row['name'];
    		$_SESSION['email']=$row['email'];

		header('Location:aabb/index.html');

		}

	}


	else{

	header('Location:index.php');
		}
}
else
{

   header('Location:home.php');

}
 ?>
