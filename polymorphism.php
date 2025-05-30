<?php 
class Discount {
    protected float $discount;

    public function __construct(float $discount) {
        $this->discount = $discount;
    }

    public function getDiscount($price): float {
       echo "discount applied: {$this->discount}";
       return $price - ($price * $this->discount / 100);
    }
}

class SpecialDiscount extends Discount {
    const SpecialDiscount = 2;

    public function getDiscount($price): float {
        echo "special discount applied: {$this->discount}";
        return $price - ($price * $this->discount / 100) * self::SpecialDiscount;
    }
}

$discount = new SpecialDiscount(.01);
$discountAmount = $discount->getDiscount(100);