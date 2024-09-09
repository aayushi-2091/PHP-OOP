<?php
// Define the Comparable interface
interface Comparable {
    public function compareTo($other);
}

// Define the Product class
class Product implements Comparable {
    private $name;
    private $price;

    // Constructor to initialize the properties
    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    // Getter for the name property
    public function getName() {
        return $this->name;
    }

    // Getter for the price property
    public function getPrice() {
        return $this->price;
    }

    // Implement the compareTo method from the Comparable interface
    public function compareTo($other) {
        if (!$other instanceof Product) {
            throw new InvalidArgumentException("Argument must be a Product.");
        }
        
        if ($this->price > $other->getPrice()) {
            return 1;
        } elseif ($this->price < $other->getPrice()) {
            return -1;
        } else {
            return 0;
        }
    }

    // Optional: Implement the __toString() method for easy display
    public function __toString() {
        return "Product: Name = " . $this->name . ", Price = $" . $this->price;
    }
}

// Example usage
$product1 = new Product("Laptop", 1000);
$product2 = new Product("Smartphone", 700);

echo $product1->compareTo($product2); 
echo "\n";
echo $product2->compareTo($product1);
echo "\n";
echo $product1->compareTo($product1); 
?>
