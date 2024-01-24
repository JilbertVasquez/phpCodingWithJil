<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <h1>sign up</h1>
    <form action="includes/formhandler.inc.php" method="POST">
        <input type="text" placeholder="Username" name="username">
        <input type="text" placeholder="Password" name="password">
        <input type="text" placeholder="Email" name="email">
        <button id="submit-button">sign up</button>
    </form>

    <h1>Change Account</h1>
    <section id = "update-user">
        <form action="includes/userupdate.inc.php" method="POST">
            <input type="text" placeholder="Username" name="username">
            <input type="text" placeholder="Password" name="password">
            <input type="text" placeholder="Email" name="email">
            <button id="submit-button">Update</button>
        </form>
        <form action="includes/userupdate.inc.php" method="POST">
            <input type="text" placeholder="Username" name="username">
            <input type="text" placeholder="Password" name="password">
            <input type="text" placeholder="Email" name="email">
            <button id="submit-button">Update</button>
        </form>
    </section>

    <h1>Delete Account</h1>
    <form action="includes/userdelete.inc.php" method="POST">
        <input type="text" placeholder="Username" name="username">
        <input type="text" placeholder="Password" name="password">
        <button id="submit-button">Delete</button>
    </form>

</body>
</html>