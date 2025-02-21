# Login Page

This is a simple login system with user and admin dashboards, implemented in PHP and MySQL.

## Requirements

- XAMPP or any other web server with PHP and MySQL support
- Web browser

## Installation

1. Clone the repository or download the files and place them in the `htdocs` directory of XAMPP (or the equivalent directory of your web server).

    ```sh
    git clone https://github.com/Luke22076/login-php.git
    ```

2. Start the Apache and MySQL servers using the XAMPP Control Panel.

3. Create a new database named `login_db` and import the provided SQL file to create the necessary tables:

    ```sql
    CREATE DATABASE login_db;
    USE login_db;

    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL UNIQUE,
        email VARCHAR(100) NOT NULL,
        name VARCHAR(100) NOT NULL,
        password_hash VARCHAR(255) NOT NULL,
        role ENUM('user', 'admin') NOT NULL DEFAULT 'user'
    );
    ```

4. Adjust the database connection settings in the [db.php](http://_vscodecontentref_/8) file if needed:

    ```php
    <?php

    $servername = "localhost";  // MySQL server
    $username = "root";         // MySQL username
    $password = "";             // MySQL password
    $dbname = "login_db";       // Database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    ```

## Usage

1. Open a web browser and navigate to `http://localhost/login-page/register.php` to register a new user.

2. After registration, you can log in at `http://localhost/login-page/login.php`.

3. Depending on your user role, you will be redirected to either the user dashboard (`user_dashboard.php`) or the admin dashboard (`admin_dashboard.php`).

4. On the admin dashboard page, you can view a list of all users and add new users.

5. On the secure page (`secure_page.php`), you can see how long you've been logged in.

## License

This project is licensed under the MIT License. For more details, check the `LICENSE` file.
