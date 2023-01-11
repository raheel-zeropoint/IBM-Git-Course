<?php
$x = 1;
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

?>
<?php
echo "<br><br>Do while Loop.";
$x = 1;

do {
  echo "<br>The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>

<?php
echo "<br><br>For Loop.";
for ($x = 0; $x <= 10; $x++) {
  echo "<br>The number is: $x <br>";
}
?>

<?php
echo "<br><br>Foreach Loop.";
$array = array(1,2,3,4,5); 
foreach ($array as $val) {
  echo "<br>The number is: $val <br>";
}
?>