<!doctype html>
<form action="ciag.php" method="post">
Wprowadź A1:<br />
<input name="a2" /><br />
Wprowadź A2:<br />
<input name="a3" /><br />
Ile wyrazów ciągu wyświetlić?<br />
<input name="k" /><br /><br />
<input type="submit" value="Oblicz!" /> <br /> <br />
</form>

<?php
if (isset($_POST["a2"])) {
	$a1=$_POST["a2"];
}
if (isset($_POST["a3"])) {
	$a3=$_POST["a3"];
}
if (isset($_POST["a2"]) && isset($_POST["a3"]) && isset($_POST['k'])) {
$r=($a1+$a3)/2;
$n=$_POST['k'];
$a122=$a1+($n--)*$r;
$a121=$a1+($n--)*$r;

for( $n = 1; $n <= $_POST["k"]; $n++ )
   echo $an=$a1+($n-1)*$r."<br>";

	echo "<br>";
	
echo "Różnica między elementami: $r";
	echo "<br>";
echo "A122=$a122";
	echo "<br>";
echo "A121=$a121";
	echo "<br>";
echo "Pierwszy wyraz ciągu:$a1";
	echo "<br>";
echo "Drugi wyraz ciągu:$a3";
	echo "<br>";
echo "Różnica ciągu: $r";
}
?>
</html>
