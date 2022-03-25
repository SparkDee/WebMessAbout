<?php

include("../conn.php");

//SQL INSERT QUERY


?>





<html>


<head>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
<link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
        
</head>

<body>




<div class="container">

    
    <?php

    

            echo "<form method='POST' action='insert.php'><fieldset><label for='nameField'><h2>Create A New Entry</h2></label>  
                
                <input type='text' value='Number' name='numberField'>
                
                <input type='text' value='Year' name='yearField'>

                <input type='text' value='Album' name='albumField'>

                <input type='text' value='Artist' name='artistField'>
                
                <input type='text' value='Genre' name='genreField'>

                <input type='text' value='Subgenre' name='subgenreField'>

                <input type='text' value='URL' name='urlField'>

                <input type='hidden' value='id' name='idField'>   
                
                
                
                <input class='button-primary' type='submit' value='create'></fieldset></form>";
        
    ?>



    


    </div>

    
</body>
</html>