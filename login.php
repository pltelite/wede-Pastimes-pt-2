<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';

    // TEMP login (replace later)
    if ($username == "admin") {
        header("Location: dashboard.php?user=$username");
        exit();
    } else {
        $message = "<p class='error'>Invalid login</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Pastimes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h2>Login</h2>

    <?= $message ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required
               value="<?= $_POST['username'] ?? '' ?>">

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>

    <a href="register.php">Create account</a>
</div>

</body>
</html>