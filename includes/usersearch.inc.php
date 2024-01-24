<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];

    try {
        require_once "dbh.inc.php";

        $query = "SELECT * FROM users WHERE username = :username";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} 
else {
    header("Location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>

    <?php
        if (empty($results)) {
            echo "<div>";
            echo "<p>There were no results!</p>";
            echo "</div>";
        }
        else {
            echo "<div>";
            foreach ($results as $row) {
                echo "<h3>ID: " . htmlspecialchars($row["id"]) . "<h3/>";
                echo "<h3>Name: " . htmlspecialchars($row["username"]) . "<h3/>";
                echo "<h3>Email: " . htmlspecialchars($row["email"]) . "<h3/>";
            }
            
            
            echo "</div>";
        }
        
    ?>

</body>
</html>