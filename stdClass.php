<?php 
$beer = new stdClass();
$beer->name = "Heineken";
$beer->type = "Lager";
$beer->alcohol = 5.0;
//pretty print the object
$array = (array)$beer;
echo "<pre>";
print_r($beer);
print_r($array);
// print all array properties
foreach ($array as $key => $value) {
    echo "$key: $value\n";
}
$object = [
    "name" => "Heineken",
    "type" => "Lager",
    "alcohol" => 5.0
];
$objectObject = (object)$object;
echo "<br>Object as array:<br>";
echo "<pre>";
print_r($objectObject);
echo "</pre>";
echo "<br>Object properties:<br>";
foreach ($object as $key => $value) {
    echo "$key: $value\n";
}
echo "</pre>";