<?php
session_start();
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />

    <?php
    $user = $_SESSION['username'];
    echo $user." is currently logged on";

    ?>

</head>
<body>
<h1>Hello</h1>

</body>
</html>