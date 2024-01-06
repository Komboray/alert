<?php
//we need to borrow the conn in commection

include("connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "SELECT *
            FROM `users`
            WHERE `email` = '$email'
            AND `pass` = '$pass'";

    $result = mysqli_query($conn, $sql);

    if($result){
        $num = mysqli_num_rows($result);

        if($num>0){

            header("Location:index.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple error messages</title>
</head>
 <!-- MATERIAL ICONS FROM GOOGLE -->

<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


<!-- the css link --><!-- the css link --><!-- the css link --><!-- the css link --><!-- the css link -->

<!-- <link rel="stylesheet" href="multi-alert.css"> -->
<link rel="stylesheet" href="sign.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

<body>
    <div class="container">
        <div class="form-box">
            <h1 id="title">Sign in</h1>
            <form action=" <?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "POST">
                <div class="input-group">
                    <!-- <div class="input-field" id="nameField">
                        <span></span>
                        <input type="text" name="name" id="name" placeholder="Name">
                    </div> -->

                    <div class="input-field">
                        <span></span>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>

                    <div class="input-field">
                        <span></span>
                        <input type="password" name="pass" id="pass" placeholder="Password" required>
                    </div>
                    <p>Lost Password <a href="">Click Here!</a></p>


                </div>
                <div class="btn-field">
                    
                    <!-- <button type="button"  id="signupBtn" class="disable"><a href="signup.php" style = "text-decoration:none; color:red;">Sign up</a></button>
                    <button type="submit" id="signinBtn" class="disable"><a href="signup.php"></a> Sign up</button> -->
                    <button type="submit" name = "submit" id="signinBtn" >Sign in</button>


                </div>
            </form>
        </div>
    </div>


    <!-- the alert begins here -->

    <!-- <div class="buttons">
        <button onclick="showToast(successMsg)">Success</button>
        <button onclick="showToast(errorMsg)">Error</button>
        <button onclick="showToast(invalidMsg)">Invalid</button>

    </div> -->
    <div id="toastBox">

    </div>
</body>
<script>
    let toastBox = document.getElementById('toastBox');
    let successMsg = '<span class="material-symbols-outlined">task_alt</span>Successfully submitted';
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
</html>