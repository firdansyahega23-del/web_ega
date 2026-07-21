
<?php
// Variabel pesan error
$errornrp = "";
$errornama = "";
$errorlahir = "";
$errortgl = "";
$errorjk = "";
$errorpangkat = "";
$errorhobi = "";
$errorkomentar = "";
$errorfoto = "";


if(isset($_POST['proses'])){ //isset() akan mengecek apakah data sudah dikirim.
    
    $nrp = $_POST['NRP'];
    $nama = $_POST['NAMA'];
    $lahir = $_POST['lahir'];
    $tgl = $_POST['tgl'];
    $jk = $_POST['jk'] ?? "";
    $pangkat = $_POST['pangkat'];
    $hobi = $_POST['hobi'] ?? array();
    $komentar = $_POST['komentar'];


    $foto = $_FILES['upload']['name'];
    $tmp = $_FILES['upload']['tmp_name'];
    $ukuran = $_FILES['upload']['size'];


    $valid = true; //jika semua data benar


    // VALIDASI NRP
    if($nrp==""){
        $errornrp="NRP wajib diisi.";
        $valid=false; // jika ada data yang salah
    }
    else if(!is_numeric($nrp)){
        $errornrp="NRP hanya boleh angka.";
        $valid=false;
    }
    else if(strlen($nrp)<8 || strlen($nrp)>12){
        $errornrp="NRP harus 8-12 digit.";
        $valid=false;
    }
    else{
        $errornrp = "";
    }


    // VALIDASI NAMA
    if($nama==""){
        $errornama="Nama wajib diisi.";
        $valid=false;
    }
    else if(strlen($nama)>30){
        $errornama="Nama maksimal 30 karakter.";
        $valid=false;
    }
    else{
        $errornama = "";
    }


    // TEMPAT LAHIR
    if($lahir==""){
        $errorlahir="Tempat lahir wajib diisi.";
        $valid=false;
    }
    else{
        $errorlahir = ""; //hasil kosong
    }


    // TANGGAL
    if($tgl==""){
        $errortgl="Tanggal lahir wajib diisi.";
        $valid=false;
    }
    else if($tgl > date("Y-m-d")){
        $errortgl="Tanggal tidak boleh melebihi hari ini.";
        $valid=false;
    }
    else{
        $errortgl = "";
    }


    // JENIS KELAMIN
    if($jk==""){
        $errorjk="Pilih jenis kelamin.";
        $valid=false;
    }
    else{
        $errorjk = ""; //hasil kosong
    }


    // PANGKAT
    if($pangkat==""){
        $errorpangkat="Pilih pangkat.";
        $valid=false;
    }
    else{
        $errorpangkat = ""; //hasil kosong
    }


    // HOBI
    if(count($hobi)==0){
        $errorhobi="Pilih minimal satu hobi.";
        $valid=false;
    }
     else{
        $errorhobi = ""; //hasil kosong
    }


    // KOMENTAR
    if($komentar==""){
        $errorkomentar="Komentar wajib diisi.";
        $valid=false;
    }
    else if(strlen($komentar)<10){
        $errorkomentar="Komentar minimal 10 karakter.";
        $valid=false;
    }
    else if(strlen($komentar)>200){
        $errorkomentar="Komentar maksimal 200 karakter.";
        $valid=false;
    }
    else{
        $errorkomentar = "";
    }


    // FOTO
    //explode(".", $foto) → memisahkan nama file berdasarkan titik (.).
    //end($pecah) → mengambil bagian terakhir, yaitu ekstensi file.
    $pecah = explode(".", $foto);
    $ext = strtolower(end($pecah));


    if($foto==""){
        $errorfoto = "Pilih foto.";
        $valid = false;
    }
    else if($ext!="jpg" && $ext!="jpeg" && $ext!="png"){
        $errorfoto = "Foto harus JPG, JPEG atau PNG.";
        $valid = false;
    }
    else if($ukuran > 2*1024*1024){
        $errorfoto = "Ukuran foto maksimal 2 MB.";
        $valid = false;
    }
    else{
       $errorfoto=""; //foto valid
    }
}
?>



<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="#" method="post" enctype="multipart/form-data">
    <h2 align="center"> FORMULIR PERSONEL PELATIHAN<br>
    <i>PUSINFOLAHTA TNI TA 2026</i></center></h2>   
    <!-- <center><img src="gambar/logoTNI.png" width="100" height="100"></center> -->
    <table border="1" align="center"cellpadding="20" cellspacing="1">
        <tr>
            <td colspan="2" align="center" bgcolor="yellow"><b> PERSONEL 2026</td></b>
            <!-- <td></td> -->
        </tr>
        <tr>
            <td><label>NRP :</label>
            <td><input type="text" name="NRP" placeholder="Isikan NRP Lengkap..." size="30" maxlength="30" required>
        <br><span style='color:red'><?= $errornrp??'' ?></span></td> <!-- //    MEMAKSAKAN UNTUK HARUS PENGISIAN (REQUIRED)   // -->
        </tr>
        <tr>
            <td><label>NAMA :</label></td>
            <td><input type="text" name="NAMA" placeholder="Isikan Nama Lengkap..." size="30" maxlength="30"><br><span style='color:red'><?= $errornama??'' ?></span></td>
        </tr>
        <tr>
            <td><label>PASSWORD :</label></td>
            <td><input type="password" name="PASS" placeholder=" Isikan Password..." size="30" maxlength="30"></td>
        </tr>
        <tr>
            <td><label>E-Mail :</label></td>
            <td><input type="email" name="E-MAIL" placeholder=""></td>
        </tr>
    <tr>
        <td><label>WARNA :</label></td>
        <td><input type="color" name="WARNA" placeholder=""></td>
    </tr>
    <tr>
        <td><label>TANGGAL LAHIR :</label></td>
        <td><input type="date" name="TANGGAL" placeholder=""></td>
    </tr>
    <tr>
        <td><label>NILAI UJIAN :</label></td>
        <td><input type="number" name="NILAI" placeholder="" min="0" max="10"></td>
    </tr>
    <tr>
        <td><label for="">UPLOAD FOTO :</label></td>
        <td><input type="file" name="UPLOAD" placeholder=""></td>
    </tr>
    <tr>
        <td><label>JENIS KELAMIN :</label></td>
        <td>
            <input type="radio" name="JK" value="L">Laki-Laki
            <input type="radio" name="JK" value="P">Perempuan
        </td>
    </tr>
    <tr>
        <td><label>HOBI :</label></td>
        <td>
    <input type="checkbox" name="HOBI[]" value="futsal;"> FUTSAL
    <input type="checkbox" name="HOBI[]" value="badminton";> BADMINTON
    <input type="checkbox" name="HOBI[]" value="renang;"> RENANG
    <input type="checkbox" name="HOBI[]" value="basket;"> BASKET
        </td>
    </tr>
    <tr>
        <td><label>PANGKAT/GOL :</label></td>
        <td>
                <select name="PANGKAT">
                <option value=""> Pangkat/Gol?</option>
                <option value="PA">PA</option>
                <option value="BA">BA</option>
                <option value="TA">TA</option>
                <option value="PNS">PNS</option>
        </td>
    <tr>    
        <td><label><p> KOLOM KOMENTAR :</label></p></td>
        <td><textarea name="KOMENTAR" cols="20" rows="5"></textarea></td>
    </tr>
    <tr>
    <td colspan="2" align="center" bgcolor="yellow"><input type="submit" name="proses" value="SIMPAN">&nbsp;&nbsp;&nbsp;
    <input type="reset" name="unproses" value="BATAL"></td>
    <!-- <td></td> -->
</table>
 </form>   
 </body>
 </html>

  <?php
if(isset($_POST['proses'])){ //isset() akan mengecek apakah data sudah dikirim.
    // JIKA SEMUA VALID
    if($valid){ //hanya simpan data jika semua validasi berhasil
        move_uploaded_file($tmp,"UPLOAD/".$foto);
       
        echo "<hr>";
        echo "<h2>DATA BERHASIL DISIMPAN</h2>";


        echo "NRP : ".$nrp."<br>";
        echo "Nama : ".$nama."<br>";
        echo "Tempat Lahir : ".$lahir."<br>";
        echo "Tanggal Lahir : ".$tgl."<br>";
        echo "Jenis Kelamin : ".$jk."<br>";
        echo "Pangkat : ".$pangkat."<br>";


        echo "Hobi : ";
        foreach($hobi as $isi){
            echo $isi.", ";
        }


        echo "<br>";
        echo "Komentar : ".$komentar."<br>";
        echo "Foto : ".$foto."<br><br>";
        echo "<img src='upload/$foto' width='200'>";
    }
}
?>

