<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SELAMAT DATANG!<php echo $name?></h1>
    <P>Terimakasih telah bergabung di website kami, media belajar kita bersama</P>
<?php
$namaLengkap = $_POST["first"] . " " . $_POST["last"];
$gender = isset($_POST["gender"]) ? $_POST["gender"] : "tidak ada kelamin";
$negara = $_POST["negara"];
$bahasa = isset($_POST['bahasa']) ? implode(", ", $_POST["bahasa"]) : "Tidak ada";
$bio = $_POST["bio"];
?>
<h4>Nama lengkap : <?= $namaLengkap; ?> </h4>
<h4>gender : <?= $gender; ?> </h4>
<h4>negara : <?= $negara; ?> </h4>
<h4>bahasa : <?= $bahasa; ?> </h4>
<h4>bio : <?= $bio; ?> </h4>
</body>
</html>