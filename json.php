<?php
// explain JSON and how it is used in PHP Using stdClass
// JSON (JavaScript Object Notation) is a lightweight data interchange format that is easy for humans to read and write, and easy for machines to parse and generate. In PHP, JSON is often used to encode and decode data structures, such as arrays and objects, into a string format that can be easily transmitted or stored.
// The stdClass is a built-in class in PHP that is used to create generic objects. It is often used when you want to create an object without defining a specific class. You can add properties to an instance of stdClass dynamically, making it flexible for various use cases.
header('Content-Type: application/json');
$beer = new stdClass();
$beer->name = "Heineken";
$beer->type = "Lager";
$beer->alcohol = 5.0;
// Convert the stdClass object to JSON format
$beerJson = json_encode($beer, JSON_PRETTY_PRINT);
// Output the JSON representation of the beer object
echo $beerJson;
// You can also decode JSON back into a stdClass object
$decodedBeer = json_decode($beerJson);
// Display the decoded object
echo "\nDecoded Object:\n";
echo "<pre>";
print_r($decodedBeer);
echo "</pre>";