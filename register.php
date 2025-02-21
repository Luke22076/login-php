<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO users (username, email, name, password_hash, role) VALUES ('$username', '$email', '$name', '$password_hash', 'user')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registrierung erfolgreich. <a href='login.php'>Hier einloggen</a>";
    } else {
        echo "Fehler: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrierung</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h1>Registrierung</h1>

    <form action="register.php" method="post">
        <input type="text" name="username" placeholder="Benutzername" required><br>
        <input type="email" name="email" placeholder="E-Mail" required><br>
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="password" name="password" placeholder="Passwort" required><br>
        <button type="submit">Registrieren</button>
    </form>

    <a href="login.php">Bereits ein Account? Hier einloggen</a>
</div>

</body>
</html>
