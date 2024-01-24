<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $psswrd = $_POST["password"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        $query = "SELECT id FROM users WHERE username = :username AND psswrd = :psswrd; AND email = :email";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":psswrd", $psswrd);
        $stmt->bindParam(":email", $email);

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $user_id = $result["id"];

        $stmt = null;

        $query = "UPDATE users SET username = :username, psswrd = :psswrd, email = :email WHERE id = :id;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":psswrd", $psswrd);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":id", $user_id);

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