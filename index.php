<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document: Warning Alert Notifications</title>
</head>
<!-- MATERIAL ICONS FROM GOOGLE --> <!-- MATERIAL ICONS FROM GOOGLE -->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<link rel="stylesheet" href="style.css">
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<body>
    <button class="b">Show Alert</button>
    <div class="alert ">
        <span class="material-symbols-outlined warning">error</span>
        <span class="msg">Warning: You need to try sending the code again!</span>
        <span class="close-btn">
            <span class="material-symbols-outlined close">close</span>
        </span>
    </div>
    
    <script>
        $('.b').click(function(){
            $('.alert').removeClass("hide");
            $('.alert').addClass("show");
            $('.alert').addClass("showAlert");
            setTimeout(function(){
                $('.alert').removeClass("show");
                $('.alert').addClass("hide");
            },5000);
        });
        $('.close-btn').click(function(){
            $('.alert').addClass("hide");
            $('.alert').removeClass("show");
        });
    </script>
</body>
</html>