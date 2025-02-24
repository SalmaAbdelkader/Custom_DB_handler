<?php
namespace PHPMVC\Lib\Database;

// PDODatabaseHandler extends DatabaseHandler and implements a Singleton Pattern for database connection
class PDODatabaseHandler extends DatabaseHandler
{
    // Static property to hold the single instance of this class
    private static $_instance;

    // Static property to hold the PDO database connection instance
    private static $_handler;

    // Private constructor to prevent direct instantiation and enforce singleton pattern
    private function __construct(){
        self::init(); // Initialize the database connection
    }

    // Magic method to allow calling PDO methods directly on this class instance
    public function __call($name, $arguments)
    {
        return call_user_func_array(array(&self::$_handler, $name), $arguments);
    }

    // Method to initialize the database connection using PDO
    protected static function init()
    {
        try {
            // Creating a new PDO connection with error handling and UTF-8 character set
            self::$_handler = new \PDO(
                'mysql:host=' . DATABASE_HOST_NAME . ';dbname=' . DATABASE_DB_NAME,
                DATABASE_USER_NAME, DATABASE_PASSWORD, array(
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING, // Set error mode to warnings
                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' // Ensure UTF-8 encoding
                )
            );
        } catch (\PDOException $e) {
            // Catch and handle any exceptions (currently empty, should log errors)
        }
    }

    // Method to return a single instance of the database connection (Singleton Pattern)
    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self(); // Create a new instance if none exists
        }
        return self::$_instance; // Return the existing instance
    }
}

