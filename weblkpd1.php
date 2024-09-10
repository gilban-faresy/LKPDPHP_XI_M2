<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="weblkpd1.css">
    <title>LKPD 1</title>
</head>
<body>
    <center>
<div class="form">
    <br>
<h2>Masukkan Kalimat untuk Deteksi Simbol</h2>

<form method="POST">
    <textarea name="input_text" rows="4" cols="50" placeholder="Tulis kalimat di sini..."></textarea><br><br>
    <input type="submit" value="Deteksi Simbol">
</form>
<br><br>
<?php
function penanda($simbol){
    preg_match_all('/[\'^£$%&*()}{@#~?><>,|!=_+¬-]/', $simbol, $matches);
    return $matches[0];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $str = $_POST['input_text'];
    $detek_simbol = penanda($str);

    if (!empty($detek_simbol)) {
        echo "<b>Teks: " . $str . "</b>";
        echo "<br>";
        echo "Karakter yang terdapat pada kalimat: " . implode(", ", $detek_simbol);
    } else {
        echo "<b>Teks: " . $str . "</b>";
        echo "<br>";
        echo "Tidak terdapat simbol pada kalimat.";
    }
}
?>
</div>
</center>
</body>
</html>
