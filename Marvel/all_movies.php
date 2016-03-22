Here's the details of all the movies...

<?php

include ("connection.php");

$sql="SELECT * FROM marvelmovies";

$result=mysqli_query($db,$sql);
while($row = $result->fetch_array())
{
echo "<p>".$row['marvelmovieid'].$row['title'].$row['yearreleased'].$row['productionstudio'].$row['notes']."<br>";

}

?>