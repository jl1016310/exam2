
<?php
function getAllProducts() {
    return "SELECT * FROM products";
}

///return a SQL string that retrieves each customer's first name, last name, number of orders, and total amount spent
function getCustomerOrderSummary() {
    return "SELECT c.first_name, c.last_name, COUNT(o.id) AS order_count, SUM(o.total_amount) AS total_spent
            FROM customers c
            JOIN orders o ON c.id = o.customer_id
            GROUP BY c.id, c.first_name, c.last_name";
}   
?>
