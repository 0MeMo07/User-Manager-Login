# User-Manager-Login

UserManager - Login is a web application developed for user management and login functionalities. It allows you to create, view, and delete user records stored in a MySQL database. Users can log in using their username and password.

## Features

- User registration: Create new user records by providing a username and password.
- User login: Authenticate users by checking their credentials against the stored records.
- User list: View the list of registered users, including their usernames and passwords.
- User deletion: Delete user records from the database.

## Requirements

To run this application locally, you need to have the following software installed:

- XAMPP (or any other web server software)
- MySQL database

## Installation

1. Clone the repository to your local machine.
2. Place the cloned files inside the web server's document root directory (e.g., htdocs for XAMPP).
3. Start XAMPP and make sure the Apache and MySQL services are running.
4. Open phpMyAdmin or any other MySQL client and create a new database called `loginpagephp`.
5. Import the `phplogin.sql` file located in the `database` directory to create the necessary table.
6. Update the database connection details in the `yönetim.php` and `login.php` files with your MySQL credentials.

## Usage

1. Open your web browser and navigate to `http://localhost/User-Manager-Login/login.php`.
2. Use the provided login form to enter your username and password.
3.To create an account, you can create it from phpmyadmin or from yönetim.php
4. After logging in, you will be redirected to the management page (`yönetim.php`) where you can view and delete user records.
5. To log out, click the "Logout" button at the top right corner of the page.

## Notes

- This application is for educational purposes and may not have advanced security features. Do not use it in a production environment without proper security enhancements.
- Make sure to secure your MySQL database by using strong passwords and restricting access to authorized users only.

Feel free to customize and modify this application according to your needs. If you encounter any issues or have suggestions for improvement, please let me know.
