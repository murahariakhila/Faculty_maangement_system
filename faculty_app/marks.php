<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($_POST['marks'] as $id => $marks) {
        $conn->query("UPDATE students SET marks=$marks WHERE student_id=$id");
    }
}

$result = $conn->query("SELECT * FROM students");
?>

<h2>Marks</h2>

<form method="post">
<table border="1">
<tr>
    <th>Name</th>
    <th>Max Marks</th>
    <th>Marks Obtained</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?php echo $row['name']; ?></td>
    <td>100</td>
    <td>
        <input type="number" name="marks[<?php echo $row['student_id']; ?>]" value="<?php echo $row['marks']; ?>">
    </td>
</tr>
<?php } ?>

</table>

<br>
<input type="submit" value="Save Marks">
</form>