
<?php

class InMemoryLogger {
    private static $logs = [];

    // Static method to log an info message
    public static function info($message) {
        self::log('INFO', $message);
    }

    // Static method to log a warning message
    public static function warn($message) {
        self::log('WARN', $message);
    }

    // Static method to log an error message
    public static function error($message) {
        self::log('ERROR', $message);
    }

    // Private static method to handle the actual logging
    private static function log($level, $message) {
        $date = date('Y-m-d H:i:s');
        $formattedMessage = "[$date] [$level] $message";
        self::$logs[] = $formattedMessage;
    }

    // Static method to retrieve all log messages
    public static function getLogs() {
        return self::$logs;
    }

    // Static method to print all log messages
    public static function printLogs() {
        foreach (self::$logs as $log) {
            echo $log . PHP_EOL;
        }
    }
}

// Usage of static methods
InMemoryLogger::info('This is an informational message.'.'<br>');
InMemoryLogger::warn('This is a warning message.'.'<br>');
InMemoryLogger::error('This is an error message.'.'<br>');



// Alternatively, you can directly print all logs
InMemoryLogger::printLogs();

?>