# PHPMVC Database Handler

This project is a PHP-based database handler implementation that follows the **Factory Design Pattern** and **Singleton Pattern** to manage database connections using **PDO** and **MySQLi**.

## Features
- Supports **PDO** and **MySQLi** database connections.
- Uses the **Factory Pattern** to dynamically select the database driver.
- Implements the **Singleton Pattern** to ensure only one database connection instance exists.
- Provides a structured, reusable, and maintainable database connection system.

## Folder Structure
```
PHPMVC/
│── Lib/
│   ├── Database/
│   │   ├── DatabaseHandler.php
│   │   ├── PDODatabaseHandler.php
│   │   ├── MySQLiDatabaseHandler.php
│── config.php
│── index.php
│── README.md
```

## Installation
### 1. Clone the Repository
```bash
git clone https://github.com/yourusername/your-repository.git
cd your-repository
```

### 2. Configure Database Settings
Update your `config.php` file with the following credentials:
```php
define('DATABASE_CONN_DRIVER', 1); // 1 for PDO, 2 for MySQLi
define('DATABASE_HOST_NAME', 'your_database_host');
define('DATABASE_DB_NAME', 'your_database_name');
define('DATABASE_USER_NAME', 'your_username');
define('DATABASE_PASSWORD', 'your_password');
```

### 3. Run the Project
Make sure your server supports PHP and run:
```bash
php -S localhost:8000
```
Open your browser and visit: `http://localhost:8000`

## Usage
### Initializing a Database Connection
```php
use PHPMVC\Lib\Database\DatabaseHandler;

$database = DatabaseHandler::factory();
```

### Running SQL Queries with PDO
```php
$stmt = $database->prepare("SELECT * FROM users WHERE id = :id");
$stmt->execute(['id' => 1]);
$result = $stmt->fetch();
print_r($result);
```

## Contributing
1. Fork the repository
2. Create a new branch (`git checkout -b feature-branch`)
3. Commit your changes (`git commit -m 'Add new feature'`)
4. Push to the branch (`git push origin feature-branch`)
5. Create a Pull Request

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---
Developed by **Eng/Salma**

