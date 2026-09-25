<?php

$test = "Hi";
$num = 2.5;

echo "Number: \$".$num."<br>";
echo "Hello world<br> {$test}<br>";

$cars = array("Mercedes", "BMW", "Ferrari");

foreach($cars as $car){
	echo"Car: ". $car. "<br>";
}

$foods = array("MCDO" => "Two piece chicken",
"Jollibee" => "Jolly spaghetti",
"Mang inasal" => "Unli rice"
);

foreach($foods as $place => $food){
	echo "Place and food: {$place} => {$food}<br>";
}

function nameStudent($name){
	return "Hello ".$name."<br>";
}

echo nameStudent("Trazo");
echo nameStudent("Sensal");
echo nameStudent("Savior");
echo nameStudent("Maramara");
echo nameStudent("Buhangin");

for($i = 0;$i < 5; $i++){
	echo "Test {$i}<br>";
}
?>