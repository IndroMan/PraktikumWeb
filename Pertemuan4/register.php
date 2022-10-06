<?php

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Register</h1>
    <form action="index.php" method="post">
        <label for="rusername">Username</label> <br>
        <input type="text" name="rusername" id="username"> <br>
        <label for="rpassword"> Password </label><br>
        <input type="password" name="rpassword" id="password"> <br>
        <label for="KonfirPass"> Konfirmasi Password </label><br>
        <input type="password" name="KonfirPass" id="konfir"> <br>
        <input type="submit" value="KIRIM" name="rsubmit">
    </form>
    <?php

    ?>
</body>
</html>