<?php

include ("connection.php");

$sql="SELECT * FROM marvelmovies";

$result=mysqli_query($db,$sql);
while($row = $result->fetch_array())
{
echo "this is the title".$row['title'];

}

?>