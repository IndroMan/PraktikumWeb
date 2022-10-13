<?php
include 'config.php';
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $email = $_POST['email'];
        $telpon = $_POST['telpon'];
        $alamat = $_POST['alamat'];
        $query = mysqli_query($db, "INSERT INTO imahasiswa (nama, nim, email, telpon,alamat)
                                VALUES('$nama', '$nim', '$email', '$telpon', '$alamat')");


        if ($query) {
            header("Location:index.php");
    }else{
        echo "EROR";
    }
}
?>