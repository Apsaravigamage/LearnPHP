<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" type="text/css" href="style.css">
</head>
<body>
<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="contact.php">CONTACT</a></li>
</ul>
<?php 
    $_SESSION['username']="dani948a";
    echo $_SESSION['username'];

    if(!isset($_SESSION['username'])){
        echo"You are not logged in!";
    }else{
        echo" You are looged in!"; 
    }
?>
    
</body>
</html>