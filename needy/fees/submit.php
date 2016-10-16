<?php
  include 'pass.php';
  session_start();
 $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $email=$_SESSION['email'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $cname = $_POST['cname'];
    $descfees = $_POST['descfees'];
    $image=$_POST['image'];
    $sqlRowCheck = "SELECT * FROM fees";
   // echo $_FILES['image'];
    $rowCheckResult = $conn->query($sqlRowCheck);
    
    $number = ($rowCheckResult->num_rows)+1;       //to check how many posts are already added
    $path = "uploads/$number.png";
    $actualpath = "localhost/angelhacks/needy/$path";
    

$resultimage = move_uploaded_file($_FILES["image"]["tmp_name"], $path);
    //file_put_contents($path,base64_decode($image));
    
    if(isset($name) && isset($age))
    { 
        $queryInsert = "INSERT INTO fees VALUES('','$email','$name','$age','$cname','$descfees','$actualpath')";
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
