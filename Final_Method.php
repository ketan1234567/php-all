
<?php

class User {
	
    protected $userId;

    public function __construct($userId) {
        $this->userId = $userId;
    }

    public final function getUserDetails() {
        // Logic to fetch user details
        echo "Fetching details for user ID: $this->userId.<br>";
    }
}

class AdminUser extends User {
    // No attempt to override getUserDetails
    public function getAdminDetails() {
        // Custom logic for admin details
        echo "Fetching admin details for user ID: $this->userId.";
    }
	
}

// Instantiate and use User
$user = new User(1);
$user->getUserDetails();  // Output: Fetching details for user ID: 1.

// Instantiate and use AdminUser
$adminUser = new AdminUser(2);
$adminUser->getAdminDetails();  // Output: Fetching admin details for user ID: 2.



?>