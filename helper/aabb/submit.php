<?php
  include '../pass.php';
  session_start();
 $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $email=$_SESSION['email'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    

    if(isset($name) && isset($age))
    { 
        $queryInsert = "INSERT INTO location VALUES('','$email','$country','$state')";
        $queryInsertResult = $conn->query($queryInsert);
    
        if($queryInsertResult==NULL)
            {
            
            die("THE DATA IS NOT INSERTED !!! PLEASE TRY AGAIN!!");
            }
        header('Location:../games.php');

        

    }


    else{

    header('Location:index.php');
        }


 ?>
