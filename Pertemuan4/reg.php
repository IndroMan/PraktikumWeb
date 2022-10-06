<?php 

?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
 
    <title>Niagahoster Register</title>
</head>
<body>
    <div class="container">
        <form action="login.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="uname" name="uname" value="<?php echo $uname; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="remail" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="pwd" name="rpwd" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm pwd" name="cpwd" required>
            </div>
            <div class="input-group">
                <button name="rsubmit" class="btn" id="sb">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="login.php">Login </a></p>
        </form>
    </div>
</body>
</html>