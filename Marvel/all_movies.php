
<html>
<head>

</head>
<body>

<br><a href="all_movies.php">All Movies</a>
<br><a href="marvel_movies.php">Marvel Movies</a>
<br><a href="movies_2010.php">Movies created after 2010</a>
<br><a href="x_men.php">X-Men Movies</a>
<br><a href="index.php">Index</a>


<main>
    <p>Here's the details of all the movies...</p>




    <?php

    include ("connection.php");

    $sql="SELECT * FROM marvelmovies";

    $result=mysqli_query($db,$sql);
    while($row = $result->fetch_array())
    {
        echo "<p>".$row['marvelMovieID']." ".$row['title']." ".$row['yearReleased']." ".$row['productionStudio']." ".$row['notes']."</p>";

    }

    ?>


</main>
</body>
</html>
