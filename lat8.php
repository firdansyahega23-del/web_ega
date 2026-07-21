<?php


//pengualangan angka 1 s/d 50
//pengulangan angak 10 s/d 1
for($x=50;$x>=0;$x=$x-4){ //$x++ => $x=$x+1
    echo '<br>'.$x;
}


echo "<hr>";


for ($y=1;$y<=10;$y++){
    echo "<input type='radio' name='jumlah' value'$y'>";
}


echo "<hr>";


?>


Tanggal Lahir:
<select name="tgl">
    <option value="">Tanggal</option>
    <?php
    for($tgl=1;$tgl<=31;$tgl++){
        echo "<option value=$tgl>$tgl</option>";
    }
    ?>
</select>
