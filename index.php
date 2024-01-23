<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form>
        <input type="text" placeholder="Username">
        <input type="text" placeholder="Password">
        <input type="text" placeholder="Email">
        <input type="submit" value="submit">
    </form>

    <?php
    echo "HELLO WORLD";
    ?>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input {
            font-size: 18px;
            margin: 5px;
        }
    </style>
</body>
</html>