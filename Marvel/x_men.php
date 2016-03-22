<html>
<head>


    <?php

    include ("connection.php");

    $sql="SELECT * FROM marvelmovies WHERE title = %X-Men";

    $result=mysqli_query($db,$sql);
    while($row=$result->fetch_array()){

        echo "<p>".$row['marvelMovieID']." ".$row['title']." ".$row['yearReased']." ".$row['productionStudio']." ".$row['notes'."<p>"];
    }

    ?>




</head>
<body>

<br><a href="all_movies.php">All Movies</a>
<br><a href="marvel_movies.php">Marvel Movies</a>
<br><a href="movies_2010.php">Movies created after 2010</a>
<br><a href="x-men.php">X-Men Movies</a>
<br><a href="index.php">Index</a>


<main>
   <p>Here are all the x-men movies...</p>
</main>
</body>
</html>







