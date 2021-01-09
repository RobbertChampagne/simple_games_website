<?php

session_start();

//IF NOT LOGGED IN YET
if(!isset($_SESSION['name'])){
    $_SESSION['msg'] = "You must log in first to view this page"; //message not logged in 
    header("location: login.php");
}


?>
<!DOCTYPE html>
<html>
    <head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="fairygamewindowstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="highscorescript.js"></script>
    <!--jQuery link to use AJAX-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

</head>
<body>

    <?php include "navbar.php"; ?>

    <div id="highscorecontainer">
        <h1 id="highscoreTitle">HighScores</h1>
    </div>
    
    
    

</body>
</html>