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

if ($panda > $shifat) {
    echo "Panda Older";
}elseif ($panda < $shifat) {
    echo "Shifat Older";
}

//Marks Calculator
$marks = 70;

if ($marks >=80 && $marks <= 100) {
    echo "A+";
}elseif ($marks >=70 && $marks <= 79) {
        echo "A";
}elseif ($marks >=60 && $marks <= 69) {
     echo "A-";
}elseif ($marks >=50 && $marks <= 59) {
    echo "B";
}elseif ($marks >=40 && $marks <= 49) {
    echo "c";
}elseif ($marks >=33 && $marks <= 39) {
    echo "D";
}elseif ($marks >=0 && $marks <= 32) {
    echo "F";
}else {
    echo "Invalid Number";
}
?>