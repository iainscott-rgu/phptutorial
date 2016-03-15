<html>
<head>

</head>
<header>

    <h1>Aberdeen is	the	home of	specs, mugs	and	sausage	rolls.</h1>

    <p>You are only	allowed	to:</p>
    <ul><li>Buy specs if you are over 16</li>
    <li>Buy mugs if	you	are	over 18</li>
    <li>Buy sausage rolls if you are over 21</li>
    </ul>

</header>
<body>


<?php

$myage = 41;
$myname = "Iain Scott";
$specs = "<p>He can buy specs</p>";
$mugs = "<p>He can buy mugs</p>";
$rolls = "<p>He can buy rolls</p>";

print $myname. " is ". $myage. "years old";

if($myage > 16){

    echo $specs;
}
if($myage > 18){

    echo $mugs;
}

if($myage > 21){

    echo $rolls;
}

?>


<main>


</main>
<footer>



</footer>
</body>
</html>
