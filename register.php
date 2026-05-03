<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';

    // TEMP success (backend will store later)
    $message = "<p class='success'>Account created successfully!</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register - Pastimes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <h2>Register</h2>

    <?= $message ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required
               value="<?= $_POST['username'] ?? '' ?>">

        <input type="email" name="email" placeholder="Email" required
               value="<?= $_POST['email'] ?? '' ?>">

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Register</button>
    </form>

    <a href="login.php">Already have an account?</a>
</div>

</body>
</html>