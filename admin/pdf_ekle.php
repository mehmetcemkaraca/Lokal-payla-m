<?php
if(!isset($_COOKIE["kullanici"])) {
    
    header("Location: index.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";
if(isset($_POST['pdf_adi']) && isset($_POST['pdf_linki'])) {
  
    $conn = new mysqli($servername, $username, $password, $dbname);
    $pdf_adi = $_POST['pdf_adi'];
    $pdf_linki = $_POST['pdf_linki'];
    
    $sql = "INSERT INTO Pdflink (pdf_adi, pdf_linki, gorunurluk_durumu) VALUES ('$pdf_adi', '$pdf_linki', 1)";

     if ($conn->query($sql) === TRUE) {
         echo "PDF başarıyla eklendi";
     } else {
         echo "Hata: " . $sql . "<br>" . $conn->error;
     }

     $conn->close();
}
?>
