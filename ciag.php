<!doctype html>

<form action="ciag.php" method="post">
Wprowadź A1:<br />

<input name="a2" /><br />

Wprowadź A3:<br />

<input name="a3" /><br /><br />

<input type="submit" value="Oblicz!" /> <br /> <br />
</form>

<?php

$a1=$_POST["a2"];
$a3=$_POST["a3"];
$r=($a1+$a3)/2;
$n=122;
$a122=$a1+($n-1)*$r;
$n=121;
$a121=$a1+($n-1)*$r;

for( $n = 1; $n <= 10; $n++ )
   echo $an=$a1+($n-1)*$r."<br>";

	echo "<br>";
	
echo "Różnica między elementami: $r";
	echo "<br>";
echo "A122=$a122";
	echo "<br>";
echo "A121=$a121";
?>
</html>