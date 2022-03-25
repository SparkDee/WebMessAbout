<?php
        //JSON 
        header('Content-Type: application/json');
		//connnect tp your MySQL DB server
		include("conn.php");


            if(isset($_GET['year'])){
            $year=$_GET['year'];
            $query="SELECT *FROM albums WHERE year=$year";
            
            $result=$conn->query($query);
            $dataset=array();
            while($row=$result->fetch_assoc()){
                $dataset[]=$row;
                
            }
            
            echo json_encode($dataset);

        }

        

            if(isset($_GET['artist'])){
            $artist=$_GET['artist'];
            //$artist=str_replace(' ','%20',$artist);
            //$query="SELECT *FROM albums WHERE artist=$artist";
            $query="SELECT *FROM albums WHERE artist LIKE '%$artist%' ";
            $result=$conn->query($query);
            $dataset=array();
            while($row=$result->fetch_assoc()){
                $dataset[]=$row;
                
            }
            
            echo json_encode($dataset);

        }


        if(isset($_GET['genre'])){
            $genre=$_GET['genre'];
            //$query="SELECT *FROM albums WHERE genre=$genre ";
            $query="SELECT *FROM albums WHERE genre LIKE '%$genre%' ";
            $result=$conn->query($query);
            $dataset=array();
            while($row=$result->fetch_assoc()){
                $dataset[]=$row;
                
            }
            
            echo json_encode($dataset);

        }

        ?>

		