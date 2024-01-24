<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $psswrd = $_POST["password"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        $query = "DELETE FROM users WHERE username = :username AND psswrd = :psswrd";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":psswrd", $psswrd);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} 
else {
    header("Location: ../index.php");
}