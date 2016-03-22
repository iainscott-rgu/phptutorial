<?php

include ("connection.php");

$sql="SELECT * FROM marvelmovies WHERE yearReleased = >2009";

$result=mysqli_query($db,$sql);
while($row=$result->fetch_array()){

    echo "<p>".$row['marvelMovieID']." ".$row['title']." ".$row['yearReleased']." ".$row['productionStudio']." ".$row['notes']."</p>";
}

?>