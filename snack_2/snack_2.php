<?php 
    if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])) {
        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];


    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./snack_2.php" method="get">
        <label for="name_input">Name:</label>
        <input type="text" name="name" id="name_input" required>

        <label for="email_input">Email:</label>
        <input type="email" name="email" id="email_input" required>

        <label for="age_input">Age:</label>
        <input style="width: 40px;" type="text" name="age" id="age_input" maxlength="3" required>

        <button type="submit">Send</button>
    </form>
</body>
</html>