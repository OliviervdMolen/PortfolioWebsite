
<?php

if(!empty( $_POST["message"])) {

mail("olivier.molen@gmail.com", "Here is the subject line",

$_POST["insert your message here"]. "From: olivier.beusichem@gmail.com");

}

?>


<!DOCTYPE html>


<html>
<link href='https://fonts.googleapis.com/css?family=Bebas Neue' rel='stylesheet'>

<head></head>

<body>
    <div>


        <form method="post" action="PortfolioContactForm.php">

            <textarea name="message"></textarea>

            <input type="submit">

        </form>



    </div>
</body>

</html>