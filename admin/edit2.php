<html>
<head>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
        
         </head>
<body>
    <div class="container">


<h2>Edit Album</h2> 


<?php
if(isset($_POST['nameField'])) {
       
    
    //include("functions.php");
        
        update_album($_POST['idField'],$_POST['numberField'],$_POST['yearField'], $_POST['albumField'], $_POST['artistField'],
        
          $_POST['genreField'], 
        
        $_POST['subgenreField'], $_POST['urlField'] );




    } else {
        include("../conn.php");
        $id_data= $conn->real_escape_string($_GET["editid"]);
        $readalbum = "SELECT* FROM albums WHERE id= $id_data ";   
        $result = $conn->query($readalbum);
        if(!$result) {
            echo $conn -> error;    
        
        } while($row = $result->fetch_assoc()){
			
            
            //$id_data=$row['id'];
            $number_data = $row['number'];
            $year_data = $row['year'];
            $album_data = $row['album'];
            $artist_data = $row['artist'];
            $genre_data = $row['genre'];
            $subgenre_data = $row['subgenre'];
            $url_data = $row['urlpath'];
            
            



        }

        
        echo "<form method='POST' action='update.php'><fieldset><label for='nameField'>Name</label>  
                
                <input type='text' value='$album_data' name='albumField'>
                
                <input type='text' value='$number_data' name='numberField'>

                <input type='text' value='$year_data' name='yearField'>

                <input type='text' value='$artist_data' name='artistField'>
                
                <input type='text' value='$genre_data' name='genreField'>

                <input type='text' value='$subgenre_data' name='subgenreField'>

                <input type='text' value='$url_data' name='urlField'>

                <input type='hidden' value='$id_data' name='idField'>   
                
                
                
                <input class='button-primary' type='submit' value='update'></fieldset></form>";
        }
    ?>


    
    
    </div>
</body>
</html>

