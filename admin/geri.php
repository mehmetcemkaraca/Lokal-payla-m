<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Görüntüle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
   
<?php
if(!isset($_COOKIE["kullanici"])) {
    
        header("Location: index.php");
        exit();
    }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_GET['id']) && isset($_GET['type'])) {
    $id = $_GET['id'];
    $type = $_GET['type'];
    
    if ($type == 'duyuru') {
        $sql = "SELECT * FROM Duyurular WHERE id = $id";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // Görünürlük durumunu 1 yap
                $update_sql = "UPDATE Duyurular SET gorunurluk_durumu = 1 WHERE id = $id";
                $conn->query($update_sql);
            }
        } else {
            echo "0 results";
        }
    } elseif ($type == 'pdf') {
        $sql = "SELECT * FROM pdflink WHERE id = $id"; // $sql değişkeni tanımlanmamıştı
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // Görünürlük durumunu 0 yap
                $update_sql = "UPDATE pdflink SET gorunurluk_durumu = 1 WHERE id = $id";
                $conn->query($update_sql);
            }
        } else {
            echo "Link yok";
        }
    }
}

$conn->close();
?>
