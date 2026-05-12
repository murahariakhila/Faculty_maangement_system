<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dept = $_POST['dept_id'];

    $conn->query("INSERT INTO faculty (name, email, phone, dept_id)
                  VALUES ('$name', '$email', '$phone', '$dept')");
    echo "Faculty Added!";
}
?>

<h2>Add Faculty</h2>

<form method="post">
Name: <input type="text" name="name"><br><br>
Email: <input type="text" name="email"><br><br>
Phone: <input type="text" name="phone"><br><br>
Dept ID: <input type="number" name="dept_id"><br><br>

<input type="submit" value="Add Faculty">
</form>