<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <h1>Search</h1>
    <form action="includes/usersearch.inc.php" method="POST">
        <input type="text" placeholder="Username" name="username">
        <button id="search-button">Search</button>
    </form>

    <?php
        var_dump($results);
    ?>

</body>
</html>