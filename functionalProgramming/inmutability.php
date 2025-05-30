<?php
class Location{
    private string $city;
    private string $country;

    public function __construct(string $city, string $country) {
        $this->city = $city;
        $this->country = $country;
    }
    //getters and setters
    public function getCity(): string {
        return $this->city;
    }
    public function getCountry(): string {
        return $this->country;
    }
    public function setCity(string $city): void {
        $this->city = $city;
    }
    public function setCountry(string $country): void {
        $this->country = $country;
    }
    // add immutability test using that class
    public function withCity(string $city): Location {
        return new Location($city, $this->country);
    }
}

$location = new Location("New York", "USA");
$location2 = $location->withCity("Los Angeles");
echo "Original Location: " . $location->getCity() . ", " . $location->getCountry() . "\n";
