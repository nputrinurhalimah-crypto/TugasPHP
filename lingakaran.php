<?php
$hasil = "";
if (isset($_POST['luas'])) {
    $luas = $_POST['luas'];
    $r = sqrt($luas / 3.14);
    $hasil = "Luas : $luas <br> Jari-jari : " . number_format($r, 2);
}
?>
<h3>Hitung Jari-jari Lingkaran</h3>
<form method="POST">
    Luas Lingkaran : <input type="number" name="luas" required>
    <button type="submit">Hitung</button>
</form>
<br>
<?php echo $hasil; ?>