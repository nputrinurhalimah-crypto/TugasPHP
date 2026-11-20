<?php
$harga = 120000;
$diskon = 0;
if ($harga > 100000) {
  $diskon = $harga * 0.10;
}
$total = $harga - $diskon;

echo "===== STRUK BELANJA =====<br>";
echo "Total Belanja: Rp " . number_format($harga, 0, ',', '.') . "<br>";
echo "Diskon 10%: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Total Bayar: Rp " . number_format($total, 0, ',', '.');
?>