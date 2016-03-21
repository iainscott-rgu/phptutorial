<?php
session_start();

    $user = $_SESSION['username'];
    echo "<h2>".$user. " is currently logged on</h2>";

?>

<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>



</head>
<body>
<h1>Hello</h1>

</body>
</html>