<h2>Form REGISTRASI</h2>
<form method="POST">
    Nama : <input type="text" name="nama" required><br><br>
    Username/Email : <input type="text" name="username" required><br><br>
    Password : <input type="password" name="password" required><br><br>
    Konfirmasi Password : <input type="password" name="konfirmasi" required><br><br>
    <button type="submit" name="daftar">DAFTAR</button>
    <button type="reset">BATAL</button>
</form>

<hr>

<h2>Form LOGIN</h2>
<form method="POST">
    Username/Email : <input type="text" name="user_login" required><br><br>
    Password : <input type="password" name="pass_login" required><br><br>
    <button type="submit" name="login">LOGIN</button>
    <button type="reset">BATAL</button>
</form>

<?php
if (isset($_POST['daftar'])) {
    if ($_POST['password'] != $_POST['konfirmasi']) {
        echo "Password tidak sama!";
    } else {
        echo "Registrasi Berhasil, Nama : " . $_POST['nama'];
    }
}
if (isset($_POST['login'])) {
    echo "Login Berhasil, Selamat Datang " . $_POST['user_login'];
}
?>