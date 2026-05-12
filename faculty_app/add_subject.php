<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['subject_name'];
    $dept = $_POST['dept_id'];

    $conn->query("INSERT INTO subject (subject_name, dept_id)
                  VALUES ('$name', '$dept')");
    echo "Subject Added!";
}
?>

<h2>Add Subject</h2>

<form method="post">
Subject Name: <input type="text" name="subject_name"><br><br>
Dept ID: <input type="number" name="dept_id"><br><br>

<input type="submit" value="Add Subject">
</form>