<h2>Missing semicolon</h2>
<?php
	echo "Cat";
	echo "Dog"
	echo "Lion";
?>


<h2>Fatal Errors</h2>
<?php
	function fun1() {
		echo "Vineet Saini";
	}
	fun2();
	echo "Fatal Error !!";
?>

<h2>Warning</h2>
<?php
	include ("bootstrap.php");
?>

<h2>Notice Error</h2>
<?php
$x = "abc";
echo $y;
?>
