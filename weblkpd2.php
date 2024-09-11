<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="weblkpd2.css">
    <title>Document</title>
</head>
<body>
    <center>
    <div class="tabel">
        <h2>diskon</h2>
    <form method="post">
        <input type="number" name="input_number"><br>
        <input type="submit" value="input">
    </form>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$uang= $_POST['input_number'];
$date = date('l');
$diskon_selasa= 5;
$diskon_lebih = 7;
if($date ==='tuesday'){
$har_sel = ($diskon_selasa/100) * $uang;
$setelah_diskon = $uang - $har_sel;
 echo "Hari ini hari : <b>" . $date . "</b><br>";
 echo "Total pembelanjaan : " ."<b>" ."Rp " . number_format($uang,0,',','.') . "</b><br>";
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
}
?>
</div>
</center>
</body>
</html>