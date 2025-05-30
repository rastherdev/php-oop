<?php
//create a Beer class
class Beer {
    public $name;
    public $type;
    public $alcohol;

    public function __construct($name, $type, $alcohol) {
        $this->name = $name;
        $this->type = $type;
        $this->alcohol = $alcohol;
    }
}

$beer = new Beer("Heineken", "Lager", 5.0);
// Convert the Beer object to JSON format
$beerJson = json_encode($beer, JSON_PRETTY_PRINT);
// Output the JSON representation of the beer object
header('Content-Type: application/json');
echo $beerJson;
// You can also decode JSON back into a Beer object
$decodedBeer = json_decode($beerJson);
// Display the decoded object
echo "\nDecoded Object:\n";
echo "<pre>";
print_r($decodedBeer);
echo "</pre>";