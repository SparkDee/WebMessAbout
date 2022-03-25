<?php

include("conn.php");
$query="SELECT * FROM albums";
$result=mysqli_query($conn,$query);

?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>The List</title>
  <link href="sticky-footer.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>

<body class="body">


<nav class="navbar navbar-expand-sm navbar-light sm-light">
        <div class="container-fluid">

            <a class="navbar-brand" href="index.html"><img src="images/navlogo.jpeg" alt=""></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="about.html">About</a>
                    <a class="nav-link" href="displayfinal.php">Top 500</a>
                    <a class="nav-link" href="search.html">Search</a>
                    <a class="nav-link" href="admin/login.php">Administration Login</a>
                    <a class="nav-link" href="contact.html">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>

  
  <div class="container">

    <div class="page-header">
        <h1>The Top 500</h1>
        <p class="lead">Find Your Favourite!</p>
        <p>Where is your favourite on the list? </p>
    </div>
    <!--page header-->

    
    
    
    
    
    
    <h3>Top 500</h3>
    
    <?php

    if(mysqli_num_rows($result)>0){
        echo "<table class= 'table table-striped table-responsive'><tr><th>Number</th>
              <th>Year</th>
              <th>Album</th>
              <th>Artist</th>
              <th>Genre</th>
              <th>Subgenre</th>
              <th>Image</th>
            </tr>";
    
            
            while($row=mysqli_fetch_assoc($result)){
           echo "<tr><td>".$row["number"]."</td><td>".
                $row["year"]."</td><td>".
                $row["album"]."</td><td>".
                $row["artist"]."</td><td>".
                $row["genre"]."</td><td>".
                $row["subgenre"]."</td><td>".
                
                "<img src={$row['urlpath']} style='width:75px' 'height:75px'>"."</td></tr>";
    
            }
            echo "</table>";
    }else{
        echo "table void";
    }
    ?>
    
    
    
    
    
</div>



  
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>


</body>

</html>