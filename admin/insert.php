<?php

include("../conn.php");


 
			$mynumber = $conn->real_escape_string($_POST['numberField']);
			$myyear = $conn->real_escape_string($_POST['yearField']);
			$myalbum = $conn->real_escape_string($_POST['albumField']);
			$myartist = $conn->real_escape_string($_POST['artistField']);
			$mygenre = $conn->real_escape_string($_POST['genreField']);
            $mysubgenre = $conn->real_escape_string($_POST['subgenreField']);
            $myurlpath = $conn->real_escape_string($_POST['urlField']);
            						
			// echo "<p>$mynumber</p>
            //     <p>$mynumber</p>
            //     <p>$myyear</p>
            //     <p>$myalbum</p>
            //     <p>$myartist</p>
            //     <p>$mygenre</p>
            //     <p>$mysubgenre</p>
            //     <p>$myurlpath</p>";
            
                $insertsql = "INSERT INTO albums(number, year, album, artist, genre, subgenre, urlpath) VALUES('$mynumber', '$myyear','$myalbum','$myartist','$mygenre','$mysubgenre','$myurlpath')";
				$result= $conn->query($insertsql); 

                
                
                
                if(!$result){
				
                
                    echo $conn->error;
				}else{
				
					echo "<p>Record Added. Thanks! </p>";
                        

				
				}
                
				?>



				
				


