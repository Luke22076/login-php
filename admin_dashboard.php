<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

include('db.php');

$sql = "SELECT username, email, name, role FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <div class="dashboard">
        <h1>Willkommen, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p><a href="logout.php">Logout</a></p>
        
        <h2>Benutzerliste</h2>
        <div class="table-container">
            <table>
                <tr>
                    <th>Benutzername</th>
                    <th>E-Mail</th>
                    <th>Name</th>
                    <th>Rolle</th>
                </tr>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>" . htmlspecialchars($row['username']) . "</td>
                                <td>" . htmlspecialchars($row['email']) . "</td>
                                <td>" . htmlspecialchars($row['name']) . "</td>
                                <td>" . htmlspecialchars($row['role']) . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Keine Benutzer gefunden</td></tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>

</body>
</html>
