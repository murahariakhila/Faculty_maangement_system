<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
include 'db.php';

$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
<title>Students</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    display: flex;
}

/* SIDEBAR */
.sidebar {
    width: 220px;
    background: #1e3c72;
    color: white;
    height: 100vh;
    position: fixed;
    padding-top: 20px;
}

.sidebar a {
    display: block;
    color: white;
    padding: 12px;
    text-decoration: none;
}

.sidebar a:hover {
    background: #2a5298;
}

/* MAIN */
.main {
    margin-left: 220px;
    padding: 20px;
    width: 100%;
    background: #f4f6f9;
}

/* TABLE */
table {
    width: 100%;
    border-collapse: collapse;
    background: white;
}

th, td {
    padding: 12px;
    border: 1px solid #ddd;
    text-align: center;
}

th {
    background: #1e3c72;
    color: white;
}

.low {
    color: red;
    font-weight: bold;
}

.good {
    color: green;
    font-weight: bold;
}
</style>

</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <a href="dashboard.php">🏠 Dashboard</a>
    <a href="students.php">👨‍🎓 Students</a>
    <a href="attendance.php">📅 Attendance</a>
    <a href="marks.php">📊 Marks</a>
    <a href="logout.php">🚪 Logout</a>
</div>

<!-- MAIN -->
<div class="main">

<h2>Students</h2>

<table>
<tr>
    <th>Name</th>
    <th>Year</th>
    <th>Attendance %</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['year']; ?></td>

    <td>
        <?php 
        $percent = $row['attendance'];

        if ($percent < 75) {
            echo "<span class='low'>$percent% (Low)</span>";
        } else {
            echo "<span class='good'>$percent% (Good)</span>";
        }
        ?>
    </td>
</tr>
<?php } ?>

</table>

</div>

</body>
</html>