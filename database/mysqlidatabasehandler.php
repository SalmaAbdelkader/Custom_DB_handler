<?php
namespace PHPMVC\Lib\Database;

// MySQLiDatabaseHandler extends the abstract DatabaseHandler and implements its methods
class MySQLiDatabaseHandler extends DatabaseHandler
{
    // Static variable to hold the database connection instance
    private static $_handler;

    // Private constructor to prevent direct instantiation and enforce singleton pattern
    private function __construct(){
        self::init(); // Initialize the database connection
    }

    // Method to initialize the database connection using PDO
    protected static function init()
    {
        try {
            // Creating a new PDO connection with the provided database credentials
            self::$_handler = new \PDO(
                'mysql:host=' . DATABASE_HOST_NAME . ';dbname=' . DATABASE_DB_NAME,
                DATABASE_USER_NAME, DATABASE_PASSWORD
            );
        } catch (\PDOException $e) {
            // Catch and handle any exceptions (currently left empty, but should log errors)
        }
    }

    // Method to return a single instance of the database connection (Singleton Pattern)
    public static function getInstance()
    {
        if (self::$_handler === null) {
            self::$_handler = new self(); // Create a new instance if none exists
        }
        return self::$_handler; // Return the existing instance
    }

    // Placeholder method for preparing SQL statements
    public function prepare()
    {
        // Implementation needed for SQL query preparation
    }
}
?>
