<?php

// KOMENTAR 1
# KOMENTAR 2

/* ini adalah komentar 1
komentar 2
komentar 3
komentar 4
*/

echo "Belajar PHP"; //<br> bisa ditempel
echo "<br>";
echo "Belajar WEB <br>";
print 'Belajar MySQL'; // BISA MEMAKAI '' (PETIK SATU) ATAU "" (PETIK DUA)
echo "<hr>";

//Variabel User

$nama="Budi Raharjo";
$kata="Selamat Pagi";
$kata2="Belajar PHP";
echo 'Halo '.$nama.' Apa Kabar?';
echo "<br>";
//halo selamat pagi pak budi raharjo, silahkan belajar PHP hari ini
echo 'Halo '.$kata.' Pak '.$nama.', silahkan '.$kata2.' hari ini';
echo "<br>";

//Pak Kasino Bekerja Sebagai Tentara, Beliau Tinggal di Depok. Umurnya 30 Tahun Dengan Berat 74.5 Kg
$nama2="Kasino"; //TIPE DATA STRING
$kerja="Tentara"; //TIPE DATA STRING
$alamat="Depok"; //TIPE DATA STRING
$umur="30 Tahun"; //TIPE DATA INTEGER
$berat="74.5 kg"; //TIPE DATA FLOAT
echo 'Pak '.$nama2.' Bekerja Sebagai '.$kerja.' , Beliau Tinggal Di '.$alamat.' . Umurnya '.$umur.' Dengan Berat '.$berat; 
echo "<br>";
echo "Pak $nama2 Bekerja Sebagai $kerja , Beliau Tinggal Di $alamat . Umurnya $umur Dengan Berat $berat";
echo "<br>";

//VARIABEL SISTEM
echo $_SERVER['SERVER_ADMIN'];
echo $_SERVER['SERVER_PORT'];
echo $_SERVER['DOCUMENT_ROOT'];
// $_GET dan $_POST (termasuknya)
echo "<br>";
//VARIABEL CONSTANTA
//define: RUMUS UNTUK MEMANGGIL VARIABEL KONSTANTA
define('phi',3.14 ); //phi diameter 3,14
define('pelajaran','laravel');
define('dbserver','localhost');

//CETAK
//SOAL CETAK PELAJARAN, DBSERVER DAN PHI
echo 'matpel:' .pelajaran. '<br>';
echo 'dbserver:' .dbserver. '<br>';
echo 'phi:' .phi. '<br>';

//TIPE DATA
$hitungstring="Belajar"; //MENGHITUNG JUMLAH HURUF "Belajar"
var_dump($hitungstring); //TIPE STRING
echo "<hr>";

$angka=12177; //TIPE INTEGER
$angka2=12.177; //TIPE FLOAT
var_dump($angka);
echo "<br>";
var_dump($angka2);
echo "<hr>";

$str="PaK iNdrO sEdAnG bElAjAR Php"; // TEKS ASLI
echo "$str";
echo "<br>";

//KONVERSI HURUF $str MENJADI KAPITAL
$besar=strtoupper($str);
$kecil=strtolower($str);
echo "$besar"; // MENGGUBAH KALIMAT MENJADI HURUF BESAR
echo "<br>";
echo "$kecil"; // MENGGUBAH KALIMAT MENJADI HURUF KECIL
echo "<br>";
echo ucwords($str); //MENGUBAH HURUF PERTAMA BESAR
echo "<br>";
echo lcfirst($str); //MENGUBAH HURUF PERTAMA KECIL
echo "<hr>";

echo "<h3>Operator Aritmatika</h3>";
$a=10;
$b=4;
echo $a+$b. '<br>';
echo $a-$b. '<br>';
echo $a*$b. '<br>';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Sisipkan PHP Ke HTML</h2>
    <?php echo "Ini Cara Pertama Isi Dari PHP" ?>
    <br>
    <?= "Ini Cara Kedua Isi Dari PHP" ?>
</body>
</html>