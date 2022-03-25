<?php
 
include("conn.php");  //prints conn to connect to db
 
 
$file = "albumlist.csv";



if (file_exists($file)) {    //ask for file, if exists run code
 
    $filepath = fopen($file, "r");
    //$removeheader=fgetcsv($filepath);
 
    while( ($line = fgetcsv($filepath)) !== FALSE ){  //line is indexed array

        $number=$conn->real_escape_string($line[0]);
        $year=$conn->real_escape_string($line[1]);
        $album=$conn->real_escape_string($line[2]);
        $artist=$conn->real_escape_string($line[3]);
        $genre=$conn->real_escape_string($line[4]);
        $subgenre=$conn->real_escape_string($line[5]);

        //echo $artist;

        
        $insert = "INSERT INTO albums(number,year,album,artist,genre,subgenre)
        
               VALUES ('$number','$year','$album','$artist','$genre','$subgenre')";

            $result=$conn->query($insert);

            if(!$result){
                echo $conn->error;
                die();
            }



    }
}

?>