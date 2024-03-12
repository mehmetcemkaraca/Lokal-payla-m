<?php
if(!isset($_COOKIE["kullanici"])) {
    
        header("Location: index.php");
        exit();
    }

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";



if(isset($_POST['duyuru_basligi']) && isset($_POST['duyuru_icerigi'])) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $duyuru_basligi = $_POST['duyuru_basligi'];
    $duyuru_icerigi = $_POST['duyuru_icerigi'];

    $sql = "INSERT INTO Duyurular (duyuru_basligi, duyuru_icerigi, gorunurluk_durumu) VALUES ('$duyuru_basligi', '$duyuru_icerigi', 1)";

     if ($conn->query($sql) === TRUE) {
        echo "Duyuru başarıyla eklendi";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
     }

     $conn->close();
}
?>
