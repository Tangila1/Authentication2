<?php
session_start();
if(!isset($_SESSION["fname"])){
    header("location:login.php");
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
    <form action="#" method="post">
        <div>ID<br/>
        <input type="text" name="id">
        </div>

        <div>Name<br/>
        <input type="text" name="name">
        </div>
        <div>Email<br/>
        <input type="text" name="email">
        </div>
        <div>Phone<br/>
        <input type="text" name="phone">
        </div>
        <div>
            <input type="submit" name="submit" value="submit">
            <a href="logout.php">
                <input type="button" name="submit" value="logout">
        </a>
        </div>

    </form>
    
</body>
</html>