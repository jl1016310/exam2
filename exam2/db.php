
<?php
$type = 'mysql';
$server= 'localhost';
$db   = 'exam2';  
$port = '3306'; 
$user = 'root';
$pass = '';
$charset = 'utf8mb4';   
$dsn = "$type:host=$server;port=$port;dbname=$db;charset=$charset";     
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$dsn = "$type:host=$server;port=$port;dbname=$db;charset=$charset";
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>