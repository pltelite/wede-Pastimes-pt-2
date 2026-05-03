<?php
// TEMP fake data (your partner will replace with DB later)
$products = [
    ["name" => "Nike Hoodie", "price" => "R500", "brand" => "Nike"],
    ["name" => "Adidas Sneakers", "price" => "R800", "brand" => "Adidas"],
    ["name" => "Zara Jacket", "price" => "R650", "brand" => "Zara"]
];

$message = "";

// Handle adding new item (frontend only for now)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = "<p class='success'>Item added successfully (not saved yet)</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products - Pastimes</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .product {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <h2>Pastimes Marketplace</h2>
</div>

<div class="container">

    <h3>Clothing Items</h3>

    <?= $message ?>

    <!-- Product List -->
    <?php foreach ($products as $item): ?>
        <div class="product">
            <strong><?= $item["name"] ?></strong><br>
            Brand: <?= $item["brand"] ?><br>
            Price: <?= $item["price"] ?>
        </div>
    <?php endforeach; ?>

    <hr>

    <!-- Add Item Form -->
    <h3>Add New Item</h3>

    <form method="POST">
        <input type="text" name="name" placeholder="Item Name" required>
        <input type="text" name="brand" placeholder="Brand" required>
        <input type="text" name="price" placeholder="Price (e.g. R500)" required>

        <button type="submit">Add Item</button>
    </form>

    <a href="dashboard.php">Back to Dashboard</a>

</div>

</body>
</html>