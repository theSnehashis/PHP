# Assignment 3 — PHP with MySQL

**Paper:** PHP with MySQL
**Paper Code:** BCAC591
**Course:** BCA — Semester 5

This assignment focuses on PHP form handling, server-side validation, MySQL database connectivity, registration, and login functionality.

## 📋 Assignment Questions

### Q1 — User Input Form

Create an HTML form that accepts:

* Full Name
* Email Address

The submitted data is received by a PHP file and displayed back to the user.

### Q2 — Registration Form

Create a registration form containing:

* Username
* Email Address
* Gender
* Mobile Number
* Country
* Password
* Confirm Password
* Terms and Conditions checkbox
* Submit button

The submitted registration data is processed by a PHP file and displayed back to the user.

### Q3 — Server-Side Validation

Validate the registration form on the server side.

Validation requirements include:

* Username cannot be empty.
* Username may contain alphanumeric characters and spaces.
* Email cannot be empty.
* Email must follow a valid email format.
* Gender must be selected.
* Mobile number cannot be empty.
* Mobile number must be numeric, with `+` allowed.
* Country must be selected.
* Password must contain at least 8 characters.
* Confirm Password must match Password.
* Validation errors are displayed in red.
* Each error is prefixed with an asterisk (`*`).

### Q4 — MySQL Database and Connection

Create a MySQL database:

```text
mysitedb
```

Create a table:

```text
registration
```

with the following fields:

| Field    | Type                |
| -------- | ------------------- |
| id       | INT, AUTO_INCREMENT |
| username | VARCHAR             |
| email    | VARCHAR             |
| gender   | ENUM('m','f','o')   |
| mobile   | VARCHAR             |
| country  | VARCHAR             |
| password | VARCHAR             |

A `connect.php` file is used to establish and test the database connection.

### Q5 — Registration and Database Insertion

Submit the registration form using the POST method.

The submitted values are processed by `processreg.php` and inserted into the `registration` table.

If the insertion is successful, the user is redirected to the Q5 login page. Otherwise, the user is redirected back to the registration page.

### Q6 — Login System

Create a login form containing:

* Username
* Password
* Login button

The submitted login information is processed by `loginprocess.php`.

The username and password are checked against the `registration` table.

If the credentials are found, the user is redirected to `home.php`.

Otherwise, the user is redirected back to the login page.

---

# 📁 Folder Structure

Each question is kept **separate and independent**.

```text
Assignment_3/
│
├── README.md
│
├── Q1/
│   ├── index.html
│   └── process.php
│
├── Q2/
│   ├── registration.php
│   └── process.php
│
├── Q3/
│   └── registration.php
│
├── Q4/
│   └── connect.php
│
├── Q5/
│   ├── registration.php
│   ├── processreg.php
│   ├── connect.php
│   ├── login.php
│   ├── loginprocess.php
│   └── home.php
│
└── Q6/
    ├── login.php
    ├── loginprocess.php
    ├── connect.php
    └── home.php
```

## ▶️ How to Run

### Requirements

* XAMPP
* Apache
* MySQL
* PHP
* phpMyAdmin
* Visual Studio Code

### Start XAMPP

Start:

```text
Apache
MySQL
```

### Repository Location

Place the repository inside:

```text
C:\xampp\htdocs\PHP
```

### Q1

Open:

```text
http://localhost/PHP/Assignment_3/Q1/index.html
```

### Q2

Open:

```text
http://localhost/PHP/Assignment_3/Q2/registration.php
```

### Q3

Open:

```text
http://localhost/PHP/Assignment_3/Q3/registration.php
```

### Q4

Open:

```text
http://localhost/PHP/Assignment_3/Q4/connect.php
```

### Q5

Open:

```text
http://localhost/PHP/Assignment_3/Q5/registration.php
```

Q5 flow:

```text
registration.php
       ↓
processreg.php
       ↓
MySQL Database
       ↓
login.php
       ↓
loginprocess.php
       ↓
home.php
```

### Q6

Open:

```text
http://localhost/PHP/Assignment_3/Q6/login.php
```

Q6 flow:

```text
login.php
     ↓
loginprocess.php
     ↓
MySQL Database
     ↓
home.php
```

## 🗄️ Database Setup

For Q4, Q5, and Q6, create the following database using phpMyAdmin:

```text
mysitedb
```

Create the `registration` table:

```sql
CREATE TABLE registration (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    email VARCHAR(100),
    gender ENUM('m','f','o'),
    mobile VARCHAR(20),
    country VARCHAR(100),
    password VARCHAR(255)
);
```

## 🧠 Concepts Covered

* HTML Forms
* PHP Form Processing
* POST Method
* Server-Side Validation
* Regular Expressions
* Email Validation
* MySQL
* phpMyAdmin
* MySQLi
* Prepared Statements
* INSERT Queries
* SELECT Queries
* Registration Systems
* Login Systems
* PHP Redirection

## ⚠️ Note

These programs are created for academic and learning purposes.

The database examples demonstrate basic PHP and MySQL concepts. In production applications, passwords should be securely hashed rather than stored as plain text.

---

**PHP with MySQL — BCA Semester 5**
