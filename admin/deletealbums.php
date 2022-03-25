<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="styles.css">

</head>

<body>
    <div class="container">


		<div class="row">
			<div class="column  column-90">
				<h2>List-Select Album To Delete</h2>
				<a class="btn btn-primary" href="../index.html" role="button">Home</a>
			</div>
			
		</div>
       

        <table class="table table-striped table-responsive">
 
  <thead>
    <tr>
      
      <th scope="col">Number</th>
      <th scope="col">Year</th>
      <th scope="col">Album</th>
      <th scope="col">Artist</th>
      <th scope="col">Genre</th>
      <th scope="col">Subgenre</th>
      <th scope="col">URL</th>
    </tr>
  </thead>

<tbody>

	
     <?php
		//connnect tp your MySQL DB server
		include("../conn.php");

		//build a SQL quuery to run on MySQL
		$read = "SELECT * FROM albums";

		//go button in phpmyadmin
		$result = $conn->query($read);

		//check there are NO errors in SQL sytnax
		if(!$result){
			echo $conn -> error;
		}

		//create associate array from above SQL query
		//loop through the array storing a column value
		//print the value into a <li> element

		while($row = $result->fetch_assoc()){

			$number = $row['number'];
			$yr = $row["year"];
			$album = $row["album"];
            $artist = $row["artist"];
            $genre = $row["genre"];
            $subgenre = $row["subgenre"];
			$url = $row["urlpath"];
            $albumid=$row["id"];
            
            
            echo "<tr>
					<td>$number</td>
					<td>$yr</td>
					<td>$album</td>
                    <td>$artist</td>
                    <td>$genre</td>
                    <td>$subgenre</td>
                    <td>$url</td>
                    <td><a href='edit.php?editid=$albumid' class='btn btn-danger' role='button' aria-pressed='true'>delete</a></td>
				</tr>";

		}


	?>

		</tbody>
        
	</table>
    

</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>
</html>
