<!DOCTYPE html>
<html>
<body>

<?php


class BankAccount {
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber, $initialBalance) {
        $this->accountNumber = $accountNumber;
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }

    public function getBalance() {
        return $this->balance;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }
}



// Example usage
$account = new BankAccount('123456789', 1000);
$account->deposit(500);
$account->withdraw(200);
echo "Account Number: " . $account->getAccountNumber() . "\n"."<br>"; // Output: 123456789
echo "Balance: $" . $account->getBalance() . "\n"."<br>"; // Output: 1300

?>


</body>
</html>
