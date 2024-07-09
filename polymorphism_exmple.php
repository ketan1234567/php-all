<!DOCTYPE html>
<html>
<body>

<?php

abstract class Employee {
    protected $name;
    protected $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    abstract public function calculateSalary();

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }
}

class FullTimeEmployee extends Employee {
    public function calculateSalary() {
        return $this->salary / 12; // Monthly salary calculation
    }	
}

class PartTimeEmployee extends Employee {
    public function calculateSalary() {
        return $this->salary * 0.2; // Part-time hourly rate calculation
    }
}

class Contractor extends Employee {
    public function calculateSalary() {
        return $this->salary; // Contract-based payment calculation
    }
}

// Example usage
$employees = [
    new FullTimeEmployee("Alice", 60000),
    new PartTimeEmployee("Bob", 20),
    new Contractor("Charlie", 3000)
];

foreach ($employees as $employee) {
    echo "Employee: " . $employee->getName() . "\n"."<br>";
    echo "Salary: $" . $employee->calculateSalary() . "\n"."<br>";
}

?>



</body>
</html>
