<?php
include 'db.php';

if(isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $time = $_POST['time'];
    $room = $_POST['room'];

    $query = "INSERT INTO classes (subject, time, room_no) 
              VALUES ('$subject', '$time', '$room')";

    mysqli_query($conn, $query);

    header("Location: dashboard.php");
    exit();
}
?>

<h2>Add Class</h2>

<form method="POST">
    <input type="text" name="subject" placeholder="Subject" required><br><br>
    <input type="text" name="time" placeholder="Time" required><br><br>
    <input type="text" name="room" placeholder="Room No" required><br><br>

    <button type="submit" name="submit">Add</button>
</form>