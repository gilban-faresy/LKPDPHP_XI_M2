<?php 
function penanda($simbol){
    preg_match_all('/[\'^£$%&*()}{@#~?><>,|!=_+¬-]/', $simbol, $matches);
    return $matches[0];
}

$str ="Selamat ulang tahun yang ke-17!" ;
$detek_simbol = penanda($str);

if(!empty($detek_simbol)){
    echo "<b> Teks : " . $str . "</b>";
    echo "<br>";
    echo "karakter yang terdapat pada kalimat : " . implode(", ", $detek_simbol);
}else{
    echo "<b> Teks : " . $str . "</b>";
    echo "<br>";
    echo "Tidak terdapat simbol pada kalimat";
}
?>