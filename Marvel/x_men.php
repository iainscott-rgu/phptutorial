Here are all the x-men movies...

<?php

include ("connection.php");

$sql="SELECT * FROM marvelmovies WHERE title = %X-Men";

$result=mysqli_query($db,$sql);
    while($row=$result->fetch_array()){

        echo "<p>".$row['marvelMovieID']." ".$row['title']." ".$row['yearReased']." ".$row['productionStudio']." ".$row['notes'."<p>"];
     }

?>