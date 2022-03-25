<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="sticky-footer.css" rel="stylesheet">
    <title>Contact</title>
</head>

<body class="body">


<nav class="navbar navbar-expand-sm navbar-light sm-light">
        <div class="container-fluid">

            <a class="navbar-brand" href="../index.html"><img src="../images/navlogo.jpeg" alt=""></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="about.html">About</a>
                    <a class="nav-link" href="../displayfinal.php">Top 500</a>
                    <a class="nav-link" href="../search.html">Search</a>
                    <a class="nav-link" href="login.php">Administration Login</a>
                    <a class="nav-link" href="../contact.html">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>




    <div class="container">
        <div class="page-header">
            <h1>Admin Dashboard</h1>
            <p class="lead">Please Select An Option Below. You Can Create, Update or Delete An Entry</p>
        </div>
        <!--page header-->


        <div class="row">
            <div class="col-sm-6">

                <p class="lead">Welcome <?php echo $_SESSION['userField'];?></p>
                <p><a href="logout.php" class="btn btn-danger bt-sm">Log Out</a></p>


                <form>
                    <div class="form-group">
                        <label for="formName">Create A New Entry</label>
                        <br>
                        <a class="btn btn-primary" href="insertform.php" role="button">Create</a>
                        
                    
                    </div>

                    <div class="form-group">
                        <label for="formEmail">Delete An Existing Entry</label>
                        <br>
                        <a class="btn btn-primary" href="deletealbums.php" role="button">Delete</a>
                    </div>

                    <div class="form-group">
                        <label for="formMessage">Update An Existing Entry</label>
                        <br>
                        <a class="btn btn-primary" href="editalbums.php" role="button">Update</a>
                    </div>
                    <br>
                    

                </form>

            </div>

        </div>

    </div>

    


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>


</body>

</html>