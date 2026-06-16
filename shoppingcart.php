<!DOCTYPE html>
<html>
<head>
    <title>Past Times - Shopping Cart</title>
</head>
<body>

<h1>Shopping Cart</h1>

<table border="1">
    <tr>
        <th>Item</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Action</th>
    </tr>

    <tr>
        <td>Vintage Jacket</td>
        <td>R250</td>
        <td>
            <input type="number" value="1" min="1">
        </td>
        <td>
            <button>Update</button>
            <button>Remove</button>
        </td>
    </tr>
</table>

<br>

<button onclick="location.href='clothes.php'">
    Continue Shopping
</button>

<button onclick="location.href='checkout.php'">
    Checkout
</button>

</body>
</html>
