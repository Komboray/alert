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
<body onload = "showToast(successMsg)">
    <button class="b">Show Alert</button>
    <div class="alert ">
        <span class="material-symbols-outlined warning">error</span>
        <span class="msg">Warning: You need to try sending the code again!</span>
        <span class="close-btn">
            <span class="material-symbols-outlined close">close</span>
        </span>
    </div>

    <div id="toastBox">

    </div>
    
    <script>
        // $('.b').click(function(){
        //     $('.alert').removeClass("hide");
        //     $('.alert').addClass("show");
        //     $('.alert').addClass("showAlert");
        //     setTimeout(function(){
        //         $('.alert').removeClass("show");
        //         $('.alert').addClass("hide");
        //     },5000);
        // });
        // $('.close-btn').click(function(){
        //     $('.alert').addClass("hide");
        //     $('.alert').removeClass("show");
        // });

        let toastBox = document.getElementById('toastBox');
    let successMsg = '<span class="material-symbols-outlined">task_alt</span>Successfully logged in';
    let errorMsg = '<span class="material-symbols-outlined">report</span> Error occurred!';
    let invalidMsg = '<span class="material-symbols-outlined">gpp_bad</span> Invalid submission';

    function showToast(msg){
        let toast = document.createElement('div');
        toast.classList.add('toast');
        toast.innerHTML = msg;
        toastBox.appendChild(toast);


        
        if(msg.includes('Error')){
            toast.classList.add('Error');
        }
        if(msg.includes('Invalid')){
            toast.classList.add('Invalid');
        }

        setTimeout(()=>{
            toast.remove();
        }, 6000);

    }

    </script>
</body>
</html>