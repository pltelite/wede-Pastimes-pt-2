<!DOCTYPE html>
<html>
<head>
    <title>Seller Dashboard</title>
</head>
<body>

<h1>Upload Clothing Item</h1>

<form action="uploadClothes.php" method="post" enctype="multipart/form-data">

    <label>Item Name:</label><br>
    <input type="text" name="itemName"><br><br>

    <label>Brand:</label><br>
    <input type="text" name="brand"><br><br>

    <label>Price:</label><br>
    <input type="number" name="price"><br><br>

    <label>Description:</label><br>
    <textarea name="description"></textarea><br><br>

    <label>Image:</label><br>
    <input type="file" name="image"><br><br>

    <input type="submit" value="Upload">

</form>

</body>
</html>
