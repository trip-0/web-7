<?php
    $expiration=time()+(60*60*24*24);
    if(!isset($_COOKIE['last_visited'])){
        setcookie('last_visited',date('Y-m-d H:i:s'),$expiration);
    }
    $lastvisitedDateTime=$_COOKIE['last_visited']??"unknown";
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Last Visited Date-Time</h2>
<p>
    <?php
    if($lastvisitedDateTime!='unknown')
    echo "last visited on:".$lastvisitedDateTime;
    else
    echo 'Welcome! This is your first visit.';

    ?>
</p>
    
</body>
</html>
