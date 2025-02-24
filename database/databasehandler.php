<?php
namespace PHPMVC\Lib\Database;

// Abstract class that serves as a blueprint for database handlers
abstract class DatabaseHandler
{
    // Constants representing different database drivers
    const DATABASE_DRIVER_POD       = 1; // PDO driver
    const DATABASE_DRIVER_MYSQLI    = 2; // MySQLi driver

    // Private constructor to prevent instantiation of this class
    private function __construct() {}

    // Abstract method that must be implemented by subclasses to initialize the database connection
    abstract protected static function init();

    // Abstract method that must be implemented by subclasses to retrieve an instance of the database handler
    abstract protected static function getInstance();

    // Factory method to handle database connection using the specified driver
    // This follows the Factory Design Pattern to dynamically create database handler instances
    public static function factory()
    {
        $driver = DATABASE_CONN_DRIVER; // Get the database driver from the configuration
        
        // Return an instance of the appropriate database handler based on the driver type
        if ($driver == self::DATABASE_DRIVER_POD) {
            return PDODatabaseHandler::getInstance(); // Use PDO handler
        } elseif ($driver == self::DATABASE_DRIVER_MYSQLI) {
            return MySQLiDatabaseHandler::getInstance(); // Use MySQLi handler
        }
    }
}

