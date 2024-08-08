<?php
    session_start();
    print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: home.php');



    }

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<a href="logout.php">logout</a>
<body>
    
</body>
</html>