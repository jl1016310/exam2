<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome to the Bike Shop!</h1>

    <?php
    require 'db.php';
    require 'functions.php';

    $stmt = $pdo->query(getAllProducts());
    echo "<h2>Products</h2>";
    echo "<table border='1'><tr><th>ID</th><th>Name</th
><th>Price</th></tr>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>$" . number_format($row['price'], 2) . "</td></tr>";
    }
    echo "</table>";

  
    $stmt = $pdo->query(getCustomerOrderSummary());
    echo "<h2>Order Summary</h2>";
    echo "<table border='1'><tr><th>First Name</th><th>Last Name</th><th>Order Count</th><th>Total Spent</th></tr>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr><td>{$row['first_name']}</td><td>{$row['last_name']}</td><td>{$row['order_count']}</td><td>\${" . number_format($row['total_spent'], 2) . "}</td></tr>";
    }
    echo "</table>";
    ?>

<?php include 'components/footer.php'; ?>
</body>




</html>
