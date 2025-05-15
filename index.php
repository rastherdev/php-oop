<?php
$sale = new Sale();
$sale->total = 10.5;
$sale->date = '2023-10-01';
print_r($sale);

class Sale
{
    // global variables
    public $total = 0;
    public $date = '';

    // constructor
    public function __construct($total = 0, $date= '')
    {
        $this->total = $total;
        $this->date = $date;
    }

    public function createInvoice()
    {
        // code to create invoice
        echo "Invoice created with total: " . $this->total . " on date: " . $this->date;
    }
}
