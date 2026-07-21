<?php
//buat function untuk IF
function hitung($a,$b,$tombol){
if($tombol == 'tambah'){
$hasil = $a + $b;
}
else if($tombol == 'kurang'){
$hasil = $a - $b;
}
else {
$hasil = 0;
}
return $hasil;
}
//tangkap request form
$a = $_GET['a'];
$b = $_GET['b'];
$tombol = $_GET['proses'];
$hasil = hitung($a,$b,$tombol);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kalkulator</title>
</head>
<body>
<center>
<font size="5">Kalkulator Sederhana</font>
<hr color="red">
<form action="#" method="GET">
<table>
<tr>
<td>Angka 1</td>
<td><input type="text" name="a"></td>
</tr>
<tr>
<td>Angka 2</td>
<td><input type="text" name="b"></td>
</tr>
<tr>
<td>Hasil</td>
<td><input type="text" value="<?= $hasil ?>"></td>
</tr>
</table>
<hr color="blue">
<button type="submit" name="proses" value="tambah">+</button>
<button type="submit" name="proses" value="kurang">-</button>
<button type="submit" name="proses"
value="pangkat">^</button>
<input type="reset" value="clear">
</form>
</center>
</body>
</html