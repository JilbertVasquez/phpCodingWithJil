<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];

    try {
        require_once "dbh.inc.php";

        $query = "SELECT * FROM users WHERE username = :username";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);

        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} 
else {
    header("Location: ../index.php");
}