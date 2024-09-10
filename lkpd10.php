<?php
function cekJawaban($namaSiswa, $jawabanSiswa, $jawabanBenar) {
    $jumlahBenar = 0;
    $jumlahSalah = 0;
   
    foreach ($jawabanSiswa as $index => $jawaban) {
        
        if ($jawaban == $jawabanBenar[$index]) {
            $jumlahBenar++;
        } else {
            $jumlahSalah++;
        }
    }
    echo "Nama: $namaSiswa";
    echo "<br>";
    echo "Jumlah Jawaban Benar: $jumlahBenar";
    echo "<br>";
    echo "Jumlah Jawaban Salah: $jumlahSalah";
}
$jawabanBenar = ['A', 'D', 'C', 'C', 'C', 'B', 'A', 'E', 'B', 'A'];
$namaSiswa = "Putri";
$jawabanSiswa = ['A', 'B', 'B', 'A', 'C', 'B', 'A', 'C', 'B', 'A'];

cekJawaban($namaSiswa, $jawabanSiswa, $jawabanBenar);
?>