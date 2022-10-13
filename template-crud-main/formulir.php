<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIA UNMUL</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="judul">Sistem Informasi Akademik Unmul</h1>
    <div class="form-class">
        <h3>Tambah Mahasiswa Baru</h3>
        <form action="tambah.php" method="post">

            <label for="">Nama Lengkap</label><br>
            <input type="text" name="nama" class="form-text"><br>

            <label for="">NIM</label><br>
            <input type="number" name="nim" class="form-text"><br>

            <label for="">Email</label><br>
            <input type="email" name="email" class="form-text"><br>

            <label for="">Nomor HP</label><br>
            <input type="number" name="telpon" class="form-text"><br>

            <label for="">Alamat</label><br>
            <textarea name="alamat" id="" cols="64" rows="10"></textarea><br>

            <input type="submit" name="submit" value="Kirim" class="btn-submit">

        </form>
    </div>

</body>

</html>