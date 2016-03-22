<?php

include ("connection.php");

$spl="SELECT * FROM marvelmovies";

$result=mysqli_query($db,$sql);
while($row = $result->fetch_assoc())
{
echo "this is the title".['title'];

}

?>