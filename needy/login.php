<?php
include 'pass.php';
$conn=new mysqli($servername,$username,$password,$dbname);
session_start();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(!(isset($_SESSION['email'])))
{
    $email = $_POST['email1'];
    $pin =   $_POST['pin1'];
    $query = "SELECT * FROM needy WHERE `email`='$email' AND `password`='$pin'";
    $result=$conn->query($query);

    if($result->num_rows>0){
         $row=$result->fetch_array();

            $_SESSION['name']=$row['name'];
            $_SESSION['email']=$row['email'];
            $_SESSION['dp']=$row['dpurl'];
             header('Location:home.php');            
    }
    else{
        header('Location:index.php');
    }
}
else
{ 
    header('Location:games.php');     

}
    
 ?>