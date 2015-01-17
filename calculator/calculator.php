

<html>
<head>
<title>Simple Math With User Input</title>
</head>
<body>
<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$a = $num1 + $num2;
$b = $num1 - $num2;
$c = $num1 * $num2;
$d = $num1/$num2;


echo "The sum of the two numbers is ". $a;
echo "<br>";
echo "The difference of the two numbers is ". $b;
echo "<br>";
echo "The multiplication of the two numbers is ". $c;
echo "<br>";
echo "The divition of the two numbers is ". $d;



?>
</body>
</html>
