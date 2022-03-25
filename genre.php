<?php

//include("conn.php");

$searchgenre = $_POST['genreform'];

    $endpoint="http://mdavidson04.lampt.eeecs.qub.ac.uk/webprojapi/api.php?genre={$searchgenre}";

    $dataset = file_get_contents($endpoint); //find data and use endpoint response

    $allalbums = json_decode($dataset, true); //decode and convert to assoc array  

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <title>Genre Search</title>
</head>

<body>
<p class="lead">Albums Returned By Genre: <?php echo $searchgenre?></p>
<table class="table table-striped table-responsive">
        <thead>
            <tr>
                <th>Artist</th>
                <th>Album</th>
                <th>Year</th>
                <th>Genre</th>
            </tr>
        </thead>

        <tbody>
        
<?php


foreach($allalbums as $row) {       //define what to cycle through each item as a row

    echo "<tr>
            <td>{$row['artist']}</td>
            <td>{$row['album']}</td>
            <td>{$row['year']}</td>
            <td>{$row['genre']}</td>
            </tr>";
    }

?>


</tbody>
</table>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>


</body>

</html>


