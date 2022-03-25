<?php 

include("../conn.php");





$update_id = $conn->real_escape_string($_POST["idField"]);
$update_album = $conn->real_escape_string($_POST["albumField"]);
$update_artist = $conn->real_escape_string($_POST["artistField"]);
$update_year = $conn->real_escape_string($_POST["yearField"]);
$update_number = $conn->real_escape_string($_POST["numberField"]);
$update_genre = $conn->real_escape_string($_POST["genreField"]);
$update_subgenre = $conn->real_escape_string($_POST["subgenreField"]);
$update_url = $conn->real_escape_string($_POST["urlField"]);



$updateSQL = "UPDATE albums SET number =  '$update_number', year = '$update_year', album='$update_album',
artist='$update_artist', genre='$update_genre', subgenre='$update_subgenre', urlpath='$update_url' 
WHERE id = '$update_id'";



$result = $conn->query($updateSQL);
  if(!$result){
      echo $conn->error;
}else{
echo "<p>Update successful <a href='editalbums.php'>back to list</a></p>";
} 


?>