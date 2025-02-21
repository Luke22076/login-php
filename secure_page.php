<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

echo "<h1>Willkommen auf der verschlüsselten Seite, {$_SESSION['username']}!</h1>";
echo "<p><a href='logout.php'>Logout</a></p>";
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verschlüsselte Seite</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <div class="dashboard">
        <h1>Willkommen auf der sicheren Seite!</h1>
        <p><a href="logout.php">Logout</a></p>
    </div>
</div>

</body>
</html>
