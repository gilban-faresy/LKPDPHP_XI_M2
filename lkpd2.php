<?php 
$uang = 130000;
$date = date('l');
$diskon_selasa= 5;
$diskon_lebih = 7;
if($date ==='tuesday'){
$har_sel = ($diskon_selasa/100) * $uang;
$setelah_diskon = $uang - $har_sel;
 echo "Hari ini hari : <b>" . $date . "</b>";
 echo "<br>";
 echo "Total pembelanjaan : " ."<b>" ."Rp " . number_format($uang,1,',','.') . "</b>";
 echo "<br>";
 echo "Total yang harus dibayar : " ."<b>" ."Rp " . number_format($setelah_diskon,0,',','.') . "</b>";
}elseif($uang > 100000){
    $har_lebih = ($diskon_lebih/100) * $uang;
    $setelah_dis_lebih= $uang - $har_lebih;
    echo "Hari ini hari : <b>" . $date . "</b>";
    echo "<br>";
    echo "Total pembelanjaan : " ."<b>" ."Rp " . number_format($uang,0,',','.') . "</b>";
    echo "<br>";
    echo "Total yang harus dibayar : " ."<b>" ."Rp " . number_format($setelah_dis_lebih,0,',','.') . "</b>";
}else{
    echo "Hari ini hari : <b>" . $date . "</b>";
    echo "<br>";
    echo "Total pembelanjaan : " ."<b>" ."Rp " . number_format($uang,0,',','.') . "</b>";
    echo "<br>";
    echo "Total yang harus dibayar : " ."<b>" ."Rp " . number_format($uang,0,',','.') . "</b>";
}

?>