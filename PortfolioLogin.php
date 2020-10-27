<?php
session_start();
?>
<html class="html">

<link rel="stylesheet" href="PortfolioLogin.css">
<link href='https://fonts.googleapis.com/css?family=Bebas Neue' rel='stylesheet'>
<head>

<title>Olivier van der Molen - Login</title>
</head>

<body>


<div class="mainScrollBody">
    <div class="glass">
        <img src="recources/accountLogin.png" class="accountLogin">
        <div class="loginForm">
            <form action="login.php" method="post">
                Username: <br><input type="text" name="user_id"><br><br>
                Password: <br><input type="password" name="user_password"><br>
                <input type="submit" value="login">
       </form>
       <?php
       echo '<p style="color: yellow;">'.$_SESSION['user_id'].'</p>';
       ?>

       </div>




    </div>
    <div>
        <a href="index.php"><button type="button" class="cancel">CANCEL</button></a>
    </div>


</div>





</body>

<footer>
</footer>






</html>
