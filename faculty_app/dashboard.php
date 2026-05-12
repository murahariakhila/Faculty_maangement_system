<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

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

.sidebar h2 {
    text-align: center;
    margin-bottom: 30px;
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

/* HEADER */
.header h2 {
    margin: 0;
}

.header p {
    color: gray;
}

/* CARDS */
.cards {
    display: flex;
    gap: 20px;
    margin-top: 20px;
}

.card {
    flex: 1;
    background: white;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

/* TABLE */
table {
    width: 100%;
    margin-top: 30px;
    border-collapse: collapse;
    background: white;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
}

th {
    background: #1e3c72;
    color: white;
}
</style>

</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h2>FMS</h2>
    <a href="dashboard.php">🏠 Dashboard</a>
    <a href="students.php">👨‍🎓 Students</a>
    <a href="attendance.php">📅 Attendance</a>
    <a href="marks.php">📊 Marks</a>
    <a href="logout.php">🚪 Logout</a>
</div>

<!-- MAIN CONTENT -->
<div class="main">

    <!-- HEADER -->
    <div class="header">
        <h2>Welcome, <?php echo $_SESSION['user']; ?> 👋</h2>
        <p>Here’s what’s happening today!</p>
    </div>

    <!-- CARDS -->
    <div class="cards">
        <div class="card">
            <h3>5</h3>
            <p>Subjects</p>
        </div>

        <div class="card">
            <h3>60</h3>
            <p>Students</p>
        </div>

        <div class="card">
            <h3>4</h3>
            <p>Classes Today</p>
        </div>

        <div class="card">
            <h3>85%</h3>
            <p>Avg Attendance</p>
        </div>
    </div>

    <!-- TODAY'S CLASSES -->
    <h3>Today's Classes</h3>
<a href="add_class.php">
    <button>Add Class</button>
</a>

    <table>
        <tr>
            <th>Subject</th>
            <th>Time</th>
            <th>Room No</th>
        </tr>
<?php
$query = "SELECT * FROM classes";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['subject'] . "</td>";
    echo "<td>" . $row['time'] . "</td>";
    echo "<td>" . $row['room_no'] . "</td>";

    echo "</tr>";
}
?>

    </table>

</div>

</body>
</html>