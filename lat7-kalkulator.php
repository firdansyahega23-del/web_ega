<?php
$a = $_GET['a'];
$b = $_GET['b'];
$hasil = $_GET['hasil'];
$tombol = $_GET['proses'];

if(isset($tombol)) {
    if($tombol == 'tambah'){
        $hasil = $a + $b;
    }
    else if($tombol == 'kurang'){
        $hasil = $a - $b;
    }
    else if($tombol == 'kali'){
        $hasil = $a * $b;
    }
    else if($tombol == 'bagi'){
        $hasil = $a / $b;
    }
    else {
        $hasil = 0;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALKULATOR</title>
</head>
<body>
    <form action="" method="get">
        Angka1 :<input type="text" name="a" value="<?= $a ?>">
        Angka2 :<input type="text" name="b" value="<?= $b ?>">
        Hasil :<input type="text" value="<?= $hasil ?>">
        <hr>
        <button type="submit" name="proses" value="tambah"> + </button>
        <button type="submit" name="proses" value="kurang"> - </button>
        <button type="submit" name="proses" value="kali"> x </button>
        <button type="submit" name="proses" value="bagi"> &#247 </button>
        <input type="reset" value="clear">
    </form>

</body>
</html>