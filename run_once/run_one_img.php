<?php

include("conn.php");
 
$query = "SELECT * FROM albums";
 
$result=$conn->query($query);
 
  if(!$result){
   
    echo $conn->error;
 
  }else{
 
    while($row = $result->fetch_assoc()){
 
        $album=$row["album"];


        $search=str_replace(' ','%20',$album);

        $rowid=$row['id'];
      
      
 
      //echo $search;
      $endpoint = "https://en.wikipedia.org/w/api.php?action=query&titles={$search}&prop=pageimages&pithumbsize=400&format=json&formatversion=2&pilicense=any";
 
      $json = file_get_contents($endpoint);
 
      //convert to PHP array
      $img = json_decode($json, true);
    
 
      if(!empty($img["query"]["pages"][0]["thumbnail"]["source"])){
 
             $imgpath = $img["query"]["pages"][0]["thumbnail"]["source"];
      }else{
 
        $imgpath = "https://via.placeholder.com/400.png/09f/fff";
      }

      echo"<p>$imgpath</p>";

      $edit="UPDATE albums SET urlpath='$imgpath' WHERE id=$rowid ";

      $res= $conn->query($edit);

      if(!$res){
          echo "<br>".$conn->error;
      }

    }
}  

    ?>