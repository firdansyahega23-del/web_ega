<?php
$nilai=['wilar'=>90, 'edi'=>80, 'pras'=>70, 'tio'=>50];
$ar_judul=['No','Nama','Nilai','Keterangan'];
//fungsi agregat di array
$total = array_sum($nilai); //total nilai
$min = min($nilai); //nilai terendah
$max = max($nilai); //nilai tertinggi
$jml = count($nilai); //banyak data
$rata = $total / $jml; //rata2
$keterangan=[
'total nilai'=>$total,
'terendah'=>$min,
'tertinggi'=>$max,
'rata-rata'=>$rata,
'banyak peserta'=>$jml
];
?>
<!-- sintak html -->
<table align="center" border="1" width="50%" cellpadding="2" cellspacing="0">
<thead>
<tr>
<?php
foreach ($ar_judul as $judul){
echo "<td> $judul </td>";
}
?>
</tr>
</thead>
<tbody>
<?php
$no=1; //looping nomor
foreach($nilai as $nama => $nl){
//jika >=60 Lulus, Selain itu Gagal
$ket=($nl >=60) ? 'Lulus' : 'Gagal';
?>
<tr>
<td><?= $no?></td>
<td><?= $nama ?></td>
<td><?= $nl ?></td>
<td><?= $ket ?></td>
</tr>
<?php
$no++; //looping nomor
}
?>
</tbody>
<tfoot>
<!-- isi agregat -->
<?php
foreach($keterangan as $ktr => $hasil){
?>
<tr>
<th colspan="3"><?= $ktr ?></th>
<th><?= $hasil ?></th>
</tr>
<?php
}
?>
</tfoot>
</table>