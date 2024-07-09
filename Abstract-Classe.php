<!DOCTYPE html>
<html>
<body>

<?php

// Abstract class
abstract class Payment {
    // Abstract method for processing payment
    abstract public function processPayment($amount);

    // Regular method for logging payment
    public function logPayment($amount) {
        echo "Logging payment of $" . $amount . "\n"."<br>";
    }
}

class CreditCardPayment extends Payment {
    public function processPayment($amount) {
        echo "Processing credit card payment of $" . $amount . "\n"."<br>";
    }
}

class PayPalPayment extends Payment {
    public function processPayment($amount) {
        echo "Processing PayPal payment of $" . $amount . "\n"."<br>";
    }
}

class BankTransferPayment extends Payment {
    public function processPayment($amount) {
        echo "Processing bank transfer payment of $" . $amount . "\n"."<br>";
    }
}

// Example usage
$payment1 = new CreditCardPayment();
$payment1->processPayment(100);
$payment1->logPayment(100);

$payment2 = new PayPalPayment();
$payment2->processPayment(200);
$payment2->logPayment(200);

$payment3 = new BankTransferPayment();
$payment3->processPayment(300);
$payment3->logPayment(300);

?>




 
</body>
</html>
