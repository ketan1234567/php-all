<!DOCTYPE html>
<html>
<body>

<?php

interface LoggerInterface {
    public function logInfo($message);
    public function logError($message);

}

class FileLogger implements LoggerInterface {
    public function logInfo($message) {
        echo "Logging info to a file: " . $message . "\n"."<br>";
    }

    public function logError($message) {
        echo "Logging error to a file: " . $message . "\n"."<br>";
    }
}

class DatabaseLogger implements LoggerInterface {
    public function logInfo($message) {
        echo "Logging info to a database: " . $message . "\n"."<br>";
    }

    public function logError($message) {
        echo "Logging error to a database: " . $message . "\n"."<br>";
    }
}

class EmailLogger implements LoggerInterface {
    public function logInfo($message) {
        echo "Sending info via email: " . $message . "\n"."<br>";
    }

    public function logError($message) {
        echo "Sending error via email: " . $message . "\n"."<br>";
    }
}

//  We can store object instances of Array in name of $loggers
$loggers = [
    new FileLogger(),
    new DatabaseLogger(),
    new EmailLogger()
];

foreach ($loggers as $logger) {
    $logger->logInfo("This is an info message."."<br>");
    $logger->logError("This is an error message."."<br>");
}

?>





 
</body>
</html>
