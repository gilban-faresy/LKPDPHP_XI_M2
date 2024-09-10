<?php
function cariKoin($jumlahUang) {
    $koin = [1000, 500, 200, 100, 50];
    $hasil = [];

    foreach ($koin as $nilaiKoin) {
        while ($jumlahUang >= $nilaiKoin) {
            $jumlahUang -= $nilaiKoin;
            $hasil[] = $nilaiKoin;
        }
    }
    return $hasil;
}

$jumlahUang = 1750;
$koinYangDigunakan = cariKoin($jumlahUang);

echo "Jenis Koin untuk uang Rp. $jumlahUang <br>";
echo "<ul>";
foreach ($koinYangDigunakan as $koin) {
    echo "<li>$koin</li>";
}
?>