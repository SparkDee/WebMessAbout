<?php 

include("../conn.php");





$update_id = $conn->real_escape_string($_POST["idField"]);
// $update_album = $conn->real_escape_string($_POST["albumField"]);
// $update_artist = $conn->real_escape_string($_POST["artistField"]);
// $update_year = $conn->real_escape_string($_POST["yearField"]);
// $update_number = $conn->real_escape_string($_POST["numberField"]);
// $update_genre = $conn->real_escape_string($_POST["genreField"]);
// $update_subgenre = $conn->real_escape_string($_POST["subgenreField"]);
// $update_url = $conn->real_escape_string($_POST["urlField"]);




$updateSQL = "DELETE FROM albums WHERE id='$update_id'";
//WHERE id = '$update_id'";



$result = $conn->query($updateSQL);
  if(!$result){
      echo $conn->error;
}else{
echo "<p>Delete Successful <a href='deletealbums.php'>back to list</a></p>";
} 


?>