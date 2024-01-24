<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $oldusername = $_POST["oldusername"];
    $oldpsswrd = $_POST["oldpassword"];
    $oldemail = $_POST["oldemail"];
    $newusername = $_POST["newusername"];
    $newpsswrd = $_POST["newpassword"];
    $newemail = $_POST["newemail"];

    try {
        require_once "dbh.inc.php";

        $query = "SELECT id FROM users WHERE username = :username AND psswrd = :psswrd; AND email = :email";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $oldusername);
        $stmt->bindParam(":psswrd", $oldpsswrd);
        $stmt->bindParam(":email", $oldemail);

        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            $user_id = $result["id"];

            $stmt = null;

            $query = "UPDATE users SET username = :username, psswrd = :psswrd, email = :email WHERE id = :id;";

            $stmtUpdate = $pdo->prepare($query);

            $stmtUpdate->bindParam(":username", $newusername);
            $stmtUpdate->bindParam(":psswrd", $newpsswrd);
            $stmtUpdate->bindParam(":email", $newemail);
            $stmtUpdate->bindParam(":id", $user_id);

            $stmtUpdate->execute();

            $pdo = null;
            $stmtUpdate = null;
        }

        

        header("Location: ../index.php");

        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} 
else {
    header("Location: ../index.php");
}