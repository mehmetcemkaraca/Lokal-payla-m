<?php
$kullanici_adi = "admin";
$sifre = "admin";

if(isset($_POST['kullanici']) && isset($_POST['sifre'])) {
    // Formdan gelen değerler
    $gelen_deger1 = $_POST['kullanici'];
    $gelen_deger2 = $_POST['sifre'];

    if($gelen_deger1 == $kullanici_adi && $gelen_deger2 == $sifre) {
        // Cookie ekle
        setcookie("kullanici", $kullanici_adi, time() + 3600);  // 1 saatlik cookie
        header("Location: edit.php");
        exit();
    }
} else if(isset($_COOKIE["kullanici"])) {
    if($_COOKIE["kullanici"] == $kullanici_adi) {
        header("Location: edit.php");
        exit();
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Giriş Yap</h2>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="kullanici">Kullanıcı Adı:</label>
                        <input type="text" id="kullanici" name="kullanici" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sifre">Şifre:</label>
                        <input type="password" id="sifre" name="sifre" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Giriş Yap" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
