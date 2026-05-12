<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST['present'] as $id) {
        $conn->query("UPDATE students SET attendance = attendance + 1 WHERE student_id=$id");
    }
}

$result = $conn->query("SELECT * FROM students");
?>

<h2>Attendance</h2>

<form method="post">
<table border="1">
<tr>
    <th>Name</th>
    <th>Status</th>
    <th>Mark Present</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?php echo $row['name']; ?></td>
    <td>Absent</td>
    <td>
        <input type="checkbox" name="present[]" value="<?php echo $row['student_id']; ?>">
    </td>
</tr>
<?php } ?>

</table>

<br>
<input type="submit" value="Save Attendance">
</form>