<?php
//  var_dump($_GET);
session_start();
if(isset($_POST['rsubmit'])){
    $_SESSION['rusername'] = $_POST ['rusername'];
    $_SESSION['rpassword'] = $_POST ['rpassword'];
    $_SESSION['KonfirPass'] = $_POST ['KonfirPass'];
    $_SESSION['rsubmit'] = $_POST ['rsubmit'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 4</title>
</head>
<body>
    <h1>Pertemuan 4</h1>
    <form action="index.php" method="get">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username"> <br>
        <label for="password"> Password </label><br>
        <input type="password" name="password" id="password"> <br>
        <input type="submit" value="KIRIM" name="submit">
    </form>
    <?php
    if(isset($_GET['submit']) && isset($_SESSION['rsubmit'])){
        if($_GET['username'] == $_SESSION['rusername']){
            if($_GET['password'] == $_SESSION['rpassword']){
                echo "<h1>LOGIN BERHASIL</h1>";
            }
        }
    }
?>
    <p>Belum punya akun ? <a href="register.php">Register</a></p>
</body>
</html>