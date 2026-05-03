<?php
$user = $_GET['user'] ?? 'Guest';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Pastimes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="navbar">
    <h2>Pastimes Dashboard</h2>
</div>

<div class="container">
    <h3>Welcome, <?= htmlspecialchars($user) ?> 👋</h3>

    <p>This is your dashboard.</p>

    <a href="products.php"><button>View Items</button></a>
<a href="products.php"><button>Add Clothing Item</button></a>

    <a href="index.php">Logout</a>
</div>

</body>
</html>