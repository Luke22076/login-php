<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benutzer Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <div class="dashboard">
        <h1>Willkommen, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
        <p><a href="logout.php">Logout</a></p>
    </div>
</div>

</body>
</html>
