# Faculty Management System

A web-based Faculty Management System developed using PHP, MySQL, XAMPP, and phpMyAdmin. This project helps manage faculty information, student records, attendance, subjects, classes, and marks through a centralized dashboard. The system was built to simplify academic management tasks and improve organization within educational institutions.

---

## Features

* Faculty Login Authentication
* Dashboard Management
* Add and Manage Faculty
* Student Management
* Subject Management
* Class Management
* Attendance Tracking
* Marks Management
* Session Handling using PHP
* Database Connectivity with MySQL

---

## Technologies Used

* Frontend: HTML, CSS, JavaScript
* Backend: PHP
* Database: MySQL
* Server Environment: XAMPP
* Database Tool: phpMyAdmin

---

## Project Structure

```bash
faculty_app/
│
├── login.php
├── dashboard.php
├── add_faculty.php
├── add_subject.php
├── add_class.php
├── students.php
├── attendance.php
├── marks.php
├── db.php
└── logout.php
```

---

## How to Run the Project

### Step 1: Install XAMPP

Download and install XAMPP on your system.

### Step 2: Start Apache and MySQL

Open XAMPP Control Panel and start:

* Apache
* MySQL

---

### Step 3: Move Project Folder

Place the `faculty_app` folder inside the `htdocs` directory.

Example:

```bash
xampp/htdocs/faculty_app
```

---

### Step 4: Open phpMyAdmin

Open the browser and go to:

```bash
http://localhost/phpmyadmin
```

---

### Step 5: Create Database

1. Create a new database
2. Import the SQL file if available
3. Ensure database credentials match in `db.php`

Example:

```php
$conn = mysqli_connect("localhost","root","","faculty_db");
```

---

### Step 6: Run the Project

Open the browser and run:

```bash
http://localhost/faculty_app/login.php
```

---

## Learning Outcomes

* PHP and MySQL Integration
* CRUD Operations
* Session Management
* Backend Development
* Database Handling
* Form Validation
* Client-Server Architecture

---

## Future Improvements

* Responsive Mobile UI
* Email Notifications
* Password Encryption
* Advanced Admin Controls
* Role-Based Authentication
* Better Dashboard Analytics

---

## Author

Developed as an academic mini-project for learning full-stack web development concepts using PHP and MySQL.
