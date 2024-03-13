<?php session_start();
if(isset($_POST["btnLogin"])){
    $username=$_POST["username"];
    $password=$_POST["password"];
    if($username== "tangila" && $password== "123"){
        $_SESSION["fname"]=$username;
        header("location:demo.php");
    }else{
        $msg="user name or passwors incorrete!";
    }
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
    <?php
    echo isset($msg)?$msg:"";
    ?>
    <form action="#" method="post">
    <div>
        Username<br/>
        <input type="text" name="username"/>
    </div>
    <div>
        Password<br/>
        <input type="password" name="password"/>
    </div>
    <div>
        <input type="submit" value="LogIn" name="btnLogin"/>
    </div>
   </form>
    
</body>
</html>