<h1>Selamat Datang Di Web Pusinfolahta TNI 2026</h2>
<br>
<form action="" method="post">
        <input type="submit" name="logout" value="logout">
</form>

<?php
if(isset($_POST['logout'])) {
    header('location: lat5-login.php');
}
?>