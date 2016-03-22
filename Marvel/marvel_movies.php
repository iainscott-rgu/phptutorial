Only the Marvel Movies...

<?php

include ("connection.php");

$sql="SELECT * FROM marvelmovies";

$result=mysqli_query($db,$sql);
while($row=$result->fetch_array()){

    echo "<p>".$row['marvelMovieID']." ".$row['title']." ".$row['productionStudio']." ".$row{'notes'};
}

?>