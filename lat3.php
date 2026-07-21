<?php
$siswa="Dono";
$matkul="PHP";
$nilai=80;  //NILAI YG DIINPUT

//JIKA NILAINYA  >=60. KET: LULUS, SELAIN ITU KET: GAGAL
//TERNARY
$ket=($nilai>=60)? "Lulus" : "Gagal";


//FUNGSI IF
//JIKA NILAINYA >=85 DAN <=100 GRADE A
//JIKA NILAINYA >=75 DAN <85 GRADE B
//JIKA NILAINYA >=60 DAN <75 GRADE C
//JIKA NILAINYA >=50 DAN <60 GRADE D
//SELAIN ITU GRADE E
if($nilai >=85 && $nilai <=100){
    $grade="A";
    echo ("GRADE A");
}
else if ($nilai >=75 && $nilai <85){
    $grade="B";
}
else if ($nilai >=60 && $nilai <75){
    $grade="B";
}
else if ($nilai >=50 && $nilai <60){
    $grade="B";
}
else if ($nilai >=75 && $nilai <85){
    $grade="B";
}
else $grade="E";

// SWITCH CASE
//JIKA GRADE A MAKA PREDIKAT SANGAT MEMUASKAN
//JIKA GRADE B MAKA PREDIKAT MEMUASKAN
//JIKA GRADE C MAKA PREDIKAT CUKUP
//JIKA GRADE D MAKA PREDIKAT KURANG
//SELAIN ITU HANCUR
//CETAK HASIL INPUTAN
switch($grade) {
    case "A";
        $predikat="Sangat Memuaskan";
        break;
    case "B";
        $predikat="Memuaskan";
        break;
    case "C";
        $predikat="Sangat Memuaskan";
        break;
    case "D";
        $predikat="Sangat Memuaskan";
        break;
    default:
    $predikat="Hancur";
}
echo $siswa. '<br>';
echo $matkul. '<br>';
echo $nilai. '<br>';
echo $ket. '<br>';
echo $grade. '<br>';
echo $predikat. '<br>';
?>