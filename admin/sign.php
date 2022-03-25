<?php 

session_start();

include("../conn.php");


$uname = $_POST["userField"]; 

$pass = $_POST["passField"];

$checkuser="SELECT * FROM albumsusers WHERE user='$uname' AND pword='$pass' ";

$result = $conn->query($checkuser);
  if(!$result){
    echo $conn->error;
  }
  

$num = $result->num_rows;
  if($num > 0){
     session_start(); 
    $_SESSION['userField']=$uname;
    echo "signed in";

    header("Location: adminuserdash.php");
    echo "signed in";
}else{
  echo "incorrect";

    header("Location: login.php");
  }
?>