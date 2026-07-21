<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM INPUT PHP</title>
</head>
<body>
    <!-- GET perpindahan url nampak
         POST perpindahan url tidak nampak  -->
    <form action="" method="get">   <!-- //bisa menggunakan method GET atau POST  -->
        Masukkan Umur:
        <input type="number" name="umur">
        <input type="submit" name="proses" value="proses">
    </form>
    <?php
    //JIKA UMUR >= 50 TAHUN, DAPAT KTP LANSIA
    //JIKA UMUR >= 40 TAHUN DAN <=48 DAPAT KTP PRALANSIA
    //JIKA UMUR LEBIH 30 TAHUN, DAPAT KTP DEWASA
    //JIKA UMUR LEBIH 20 TAHUN, DAPAT KTP REMAJA
    //JIKA UMUR LEBIH 5 TAHUN, DAPAT KTP ANAK
    //SELAIN ITU TIDAK DAPAT
    // $umur=18;   //DATA INPUT

    if(isset($_GET['proses'])) {    //MENAHAN KELUARNYA PEMROSESAN INPUT MENGGUNAKAN (isset)
    $umur = $_GET['umur'];  // bisa menggunakan GET atau POST
    if ($umur >=50) {
        echo ("Anda Mendapatkan KTP Lansia");
    }
        else if ($umur >=40 && $umur <=49) {
            echo ("Anda Mendapatkan KTP Pralansia");
        }
        else if ($umur >=30) {
            echo ("Anda Mendapatkan KTP Dewasa");
    }
        else if ($umur >=20) {
            echo ("Anda Mendapatkan KTP Remaja");
    }
        else if ($umur >=5) {
            echo ("Anda Mendapatkan KTP Anak");
    }
    else {
        echo ("Tidak Dapat");
    }}
?>
<hr>

<?php
    // SWITCH CASE
    $baju="L";
    $baju=strtolower($baju);
    switch($baju) {
        case "l":
            echo "Large";
            break;
        case "m":
            echo "Medium";
            break;
            default:
            echo "Small";
    } 

    echo "<hr>";
    $nilai=80;
    switch($nilai){
        case $nilai <=70:
            echo "$nilai: Nilai Cukup";
            break;
        case $nilai <=80:
            echo "$nilai: Nilai Memuaskan";
            break;
        case $nilai <=100:
            echo "$nilai: Nilai Sangat Memuaskan";
            break;
            default:
            echo "Nihil";
    }
echo "<hr>";

        //TERNARY OPERATOR YG HANYA MEMILIKI 3 EXPRESSION 
        //CONTOH:
        //JIKA NILAI >=5 MAKA BAIK, SELAIN ITU BURUK

        //MEMAKAI FUNGSI IF
        $nilai2=10; //INPUT NILAI
        if ($nilai2>5) {
            echo "Baik";
        }
        else {
            echo "Buruk";
        }
echo "<hr>";

        //MEMAKAI FUNGSI TERNARY
        $nilai3=8;  //INPUT NILAI
        echo $nilai3>5 ? 'Baik' : 'Buruk';
?>
</body>
</html>
    <!-- //FUNGSI IF
    //JIKA UMUR LEBIH 50 TAHUN, DAPAT KTP LANSIA
    //JIKA UMUR LEBIH 40 TAHUN, DAPAT KTP PRALANSIA
    //JIKA UMUR LEBIH 30 TAHUN, DAPAT KTP DEWASA
    //JIKA UMUR LEBIH 20 TAHUN, DAPAT KTP REMAJA
    //JIKA UMUR LEBIH 5 TAHUN, DAPAT KTP ANAK
    //SELAIN ITU TIDAK DAPAT
    // $umur=18;   //DATA INPUT
    // if ($umur >=50) {
    //     echo ("Anda Mendapatkan KTP Lansia");
    // }
    //     else if ($umur >=40) {
    //         echo ("Anda Mendapatkan KTP Pralansia");
    // }
    // else {
    //     echo ("Tidak Dapat");
    // }
    

    //JIKA UMUR >= 50 TAHUN, DAPAT KTP LANSIA
    //JIKA UMUR >= 40 TAHUN DAN <=48 DAPAT KTP PRALANSIA
    //JIKA UMUR LEBIH 30 TAHUN, DAPAT KTP DEWASA
    //JIKA UMUR LEBIH 20 TAHUN, DAPAT KTP REMAJA
    //JIKA UMUR LEBIH 5 TAHUN, DAPAT KTP ANAK
    //SELAIN ITU TIDAK DAPAT
//     $umur=18;   //DATA INPUT
//     if ($umur >=50) {
//         echo ("Anda Mendapatkan KTP Lansia");
//     }
//         else if ($umur >=40 && $umur <=49) {
//             echo ("Anda Mendapatkan KTP Pralansia");
//     }
//         else if ($umur >=30) {
//             echo ("Anda Mendapatkan KTP Dewasa");
//     }
//         else if ($umur >=20) {
//             echo ("Anda Mendapatkan KTP Remaja");
//     }
//         else if ($umur >=5) {
//             echo ("Anda Mendapatkan KTP Anak");
//     }
//     else {
//         echo ("Tidak Dapat");
//     }
//  -->
