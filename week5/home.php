<?php
session_start();

    $username = $_SESSION['username'];
    echo $username." is currently logged on";

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />



</head>
<body>
<h1>Hello</h1>

</body>
</html>