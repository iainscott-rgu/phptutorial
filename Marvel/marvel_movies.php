Only the Marvel Movies...

<?php

include ("connection.php");

$sql="SELECT * FROM marvelmovies WHERE productionStudio = 'Marvel Studios'";

$result=mysqli_query($db,$sql);
while($row=$result->fetch_array()){

    echo "<p>".$row['marvelMovieID']." ".$row['title']." ".$row['productionStudio']." ".$row{'notes'};
}

?>