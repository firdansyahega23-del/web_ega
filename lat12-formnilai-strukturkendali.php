<!DOCTYPE html>
<html>
<head>
<title>FORM NILAI</title>
</head>
<body>
<form action="#" method="GET">
<table align="center" border="0" width="400" cellpadding="10">
<thead>
<tr bgcolor="khaki">
<th colspan="2">Form Nilai</th>
</tr>
</thead>
<tbody>
<tr>
<td>Nama Siswa</td>
<td>
<input type="text" name="nama" value="" size="30" />
</td>
</tr>
<tr>
<td>Mata Pelajaran</td>
<td>
<select name="mp">
<option value="">-- Pilih Pelajaran --</option>
<option value="Matematika">Matematika</option>
<option value="IPA">IPA</option>
<option value="IPS">IPS</option>
<option value="PAI">PAI</option>
<option value="PENJAS">PENJAS</option>
</select>
</td>
</tr>
<tr>
<td>Nilai</td>
<td>
<input type="text" name="nilai" value="" size="5" />
</td>
</tr>
</tbody>
<tfoot>
<tr bgcolor="khaki">
<th colspan="2">
<input type="submit" name="proses" value="Simpan"/>
<input type="reset" name="unproses" value="Batal"/>
</th>
</tr>
</tfoot>
</table>
</form>
</body>
</html>
<?php
//PROSES GET
$nama = $_GET['nama'];
$pelajaran = $_GET['mp'];
$nilai = $_GET['nilai'];
//PROSES EKSEKUSI
$proses = $_GET['proses'];
if (!empty($proses)) {
//EKSKUSI GRADE (IF ELSE)
if($nilai >100) { $grade = ''; }
else if($nilai >=85 && $nilai <=100) { $grade = 'A'; }
else if($nilai >=75 && $nilai <85) { $grade = 'B'; }
else if($nilai >=60 && $nilai <75) { $grade = 'C'; }
else if($nilai >=35 && $nilai <60) { $grade = 'D'; }
else if($nilai >=0 && $nilai <35) { $grade = 'E'; }
else { $grade = ''; }
//EKSEKUSI PREDIKAT DENGAN SWITCH CASE
switch ($grade) {
case 'A':
$predikat = 'Memuaskan';
break;
case 'B':
$predikat = 'Bagus';
break;
case 'C':
$predikat = 'Cukup';
break;
case 'D':
$predikat = 'Kurang';
break;
case 'E':
    $predikat = 'Buruk';
break;
default:
$predikat = '';
break;
}
//EKSEKUSI KETERANGAN LULUS/GAGAL
$keterangan = ($nilai >= 60) ? 'Lulus' : 'Gagal';
//Hasil Cetak (print hasil)
echo '<center>';
echo 'Nama Siswa : ' .$nama;
echo '<br>Mata Pelajaran : ' .$pelajaran;
echo '<br>Nilai : ' .$nilai;
echo '<br>Grade : '.$grade;
echo '<br>Predikat : '.$predikat;
echo '<br>Keterangan : '.$keterangan;
echo '</center>';
}
?>