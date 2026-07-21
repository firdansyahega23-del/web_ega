<?php
    session_start();
    if(!$_SESSION['usersesi']) {
        header('location:berandaku-session.php');
    }
?>

<h1>Selamat Datang Di Web Pusinfolahta TNI 2026</h2>
<h2>Anda Login Sebagai <mark><?= $_SESSION['usersesi']; ?></mark></h2>
<br>
<form action="" method="post">
        <input type="submit" name="logout" value="logout">
</form>

<?php
if(isset($_POST['logout'])) {
    header('location:lat6-sessionlogin.php');
}
?>