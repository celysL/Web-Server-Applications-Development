<?php
declare(strict_types=1);

/*
 * finalProject login.php
 * 
 * @author Ying-Shan Liang (Celine Liang)
 * @since 2023-04-17
 * (c) Copyright 2023 Ying-Shan Liang 
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    
</head>

<body>
    <div id="form">
        <h1>Login</h1>
        <form name="login" method="POST">
            <label>Username: </label>
            <input type="text" id="username" name="username"><br><br>
            <label>Password: </label>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" id="btn" value="login" name="Submit"><br><br>
        </form>
    </div>
</body>

</html>