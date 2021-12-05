<?php
$one = "Hello";
$two = "Hello World";
$three = "Hello Bro";
$panda = 20;
$shifat = 25;

echo "$one";
echo "<br>";
echo "$two";
echo "<br>";
echo "$three";
echo "<br>";

echo var_dump($one);
echo "<br>";

if ($panda>$shifat) {
    echo "Panda Older";
}elseif ($panda<$shifat) {
    echo "Shifat Older";
}
?>