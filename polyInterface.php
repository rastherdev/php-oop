<?php 
interface GetIfo{
    public function getInfo(): string;
}

class Addres implements GetIfo {
    private string $city;
    private string $country;

    public function __construct(string $city, string $country) {
        $this->city = $city;
        $this->country = $country;
    }

    public function getInfo(): string {
        return "City: {$this->city}, Country: {$this->country}";
    }
}