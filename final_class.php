

<?php

final class Authenticator {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function authenticate() {
        // Core authentication logic
        if ($this->username == 'admin' && $this->password == 'password123') {
            echo "User authenticated successfully.";
        } else {
            echo "Authentication failed.";
        }
    }
}



// Instantiate and use Authenticator
$auth = new Authenticator('admin', 'password123');
$auth->authenticate();  // Output: User authenticated successfully.





?>