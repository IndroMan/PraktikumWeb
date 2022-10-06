<?php 
 
error_reporting(0);
 
session_start();

//  var_dump($_GET);
session_start();
if(isset($_POST['rsubmit'])){
    $_SESSION['rusername'] = $_POST ['rusername'];
    $_SESSION['rpassword'] = $_POST ['rpassword'];
    $_SESSION['KonfirPass'] = $_POST ['KonfirPass'];
    $_SESSION['rsubmit'] = $_POST ['rsubmit'];
}
if (isset($_SESSION['uname'])) {
    header("Location: berhasil_login.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pwd = ($_POST['pwd']);

    if ($_SESSION['uname'] = $row['uname']) {
        header("Location: berhasil_login.php");
    } else {
        echo "<script>alert('Email atau pwd Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>Niagahoster Tutorial</title>
</head>
<body>
    <div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
 
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="pwd" name="pwd" value="<?php echo $_POST['pwd']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
            <p class="login-register-text">Anda belum punya akun? <a href="reg.php">Register</a></p>
        </form>
    </div>
</body>
</html>