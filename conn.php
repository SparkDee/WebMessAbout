<?php
    $host= "mdavidson04.lampt.eeecs.qub.ac.uk";

    $username="mdavidson04";
    
    $pw ="";
    
    $db="mdavidson04";
    
    $conn= new mysqli($host,$username,$pw,$db);
    
    if($conn->error){
        echo "not connected".$conn->error;
    
    }else{
        //echo "connected to DB";
    }
    
?>

