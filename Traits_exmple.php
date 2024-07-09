<?php

trait Logger {
    public function log($message) {
        echo "[LOG]: $message\n";
    }
}

trait Validator {
    public function validateEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            $this->log("Invalid email: $email");
            return false;
        }
    }
}
trait Notifier {
    public function sendNotification($message) {
        echo "[NOTIFICATION]: $message\n";
    }
}


class Customer {
    use Logger, Validator, Notifier;

    private $email;

    public function __construct($email) {
        $this->email = $email;
    }

    public function register() {
        if ($this->validateEmail($this->email)) {
            $this->log("Registering customer with email: " . $this->email);
            $this->sendNotification("Welcome to our store!");
        } else {
            $this->log("Customer registration failed for email: " . $this->email);
        }
    }
}

$customer = new Customer("customer@example.com");
$customer->register();



?>