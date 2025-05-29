<?php
// set strict types
declare(strict_types=1);
$sale = new Sale();
$sale->total = 10;
$sale->date = '2023-10-01';
$concept1 = new Concept('Product 1', 5.0, 2);
$concept2 = new Concept('Product 2', 10.0, 1);
$sale->addConcept($concept1);
$sale->addConcept($concept2);

$saleOnline1 = new OnlineSale('https://example.com', 30, '2023-10-03', 'Credit Card');
$saleOnline1->addConcept(new Concept('Product 3', 15.0, 2));
// create invoice for sale 1
//echo $saleOnline1->createInvoice();
// show info total for sale 1
echo $saleOnline1->showInfoTotal();
$saleOnline2 = new OnlineSale('https://example.com', 40, '2023-10-04', 'PayPal');

echo "<pre>";
print_r($sale->concepts);
echo "</pre>";

class Sale
{
    // global variables
    public int $total = 0;
    public string $date = '';
    public array $concepts;
    public static $count = 0;

    // constructor
    public function __construct(int $total = 0, string $date = '')
    {
        $this->total = $total;
        $this->date = $date;
        self::$count++;
    }

    // add function to add concept
    public function addConcept(Concept $concept): void
    {
        $this->concepts[] = $concept;
        $this->createInvoice();
    }

    private function createInvoice(): string
    {
        // code to create invoice
        return "Invoice created with total";
    }

    public static function resetCount()
    {
        self::$count = 0;
    }

    // add getter and setter for date
    public function getDate(): string
    {
        return $this->date;
    }
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    // destructor
    public function __destruct() {}
}


// add class OnlineSale using inheritance

class OnlineSale extends Sale
{
    public string $url = '';
    public string $paymentMethod = '';

    // constructor
    public function __construct(string $url, int $total = 0, string $date = '', string $paymentMethod = '')
    {
        parent::__construct($total, $date);
        $this->url = $url;
        $this->paymentMethod = $paymentMethod;
    }
    // add a function showInfoTotal using strict types
    public function showInfoTotal(): string
    {
        return "Total: {$this->total} - Date: {$this->date} - URL: {$this->url}";
    }

    // destructor
    public function __destruct() {}
}
// add class concept
class Concept
{
    public string $name = '';
    public int|float|string $price = 0.0;
    public int $quantity = 0;

    // constructor
    public function __construct(string $name, int|float|string $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    // destructor
    public function __destruct() {}
}
