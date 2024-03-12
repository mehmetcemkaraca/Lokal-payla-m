
<?php
if(!isset($_COOKIE["kullanici"])) {
    
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2>Duyuru Ekle</h2>
                <form action="duyuru_ekle.php" method="post">
                    <div class="form-group">
                        <label for="duyuru_basligi">Duyuru Başlığı</label>
                        <input type="text" class="form-control" id="duyuru_basligi" name="duyuru_basligi" required>
                    </div>
                    <div class="form-group">
                        <label for="duyuru_icerigi">Duyuru İçeriği</label>
                        <textarea class="form-control" id="duyuru_icerigi" name="duyuru_icerigi" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Ekle</button>
                </form>
            </div>
            <div class="col-md-4">
                <h2>PDF Ekle</h2>
                <form action="pdf_ekle.php" method="post">
                    <div class="form-group">
                        <label for="pdf_adi">PDF Adı</label>
                        <input type="text" class="form-control" id="pdf_adi" name="pdf_adi" required>
                    </div>
                    <div class="form-group">
                        <label for="pdf_linki">PDF Linki</label>
                        <input type="text" class="form-control" id="pdf_linki" name="pdf_linki" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ekle</button>
                </form>
            </div>
           
            <br>

            
            <div class="container">
            <br>
            
                <h2>Silme işlemleri</h2>
                <b>silmek için üzerine tıklayınız</b> 
                <br>


    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM Duyurular WHERE gorunurluk_durumu=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<a href='javascript:void(0)' onclick='sendRequest(" . $row["id"] . ", \"duyuru\")' title='".$row["duyuru_basligi"]."'>".$row["duyuru_basligi"]."</a><br>";
    }
}

$sql = "SELECT * FROM pdflink WHERE gorunurluk_durumu=1 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<a href='javascript:void(0)' onclick='sendRequest(" . $row["id"] . ", \"pdf\")' title='".$row["pdf_adi"]."'>".$row["pdf_adi"]."</a><br>";
    }
}

$conn->close();
?>
    </div>
    <script>
    function sendRequest(id, type) {
        $.ajax({
            url: 'sil.php',
            type: 'GET',
            data: { id: id, type: type },
            success: function(response) {
                window.location.reload(false)
            }
        });
    }
    </script>
</body>

<div class="container">
            <br>
            
                <h2>Geri dönüşüm işlemleri</h2>
                <b>geri dönüştürmek için üzerine tıklayınız</b> 
                <br>


    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM Duyurular WHERE gorunurluk_durumu=0";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<a href='javascript:void(0)' onclick='sendRequest2(" . $row["id"] . ", \"duyuru\")' title='".$row["duyuru_basligi"]."'>".$row["duyuru_basligi"]."</a><br>";
    }
}

$sql = "SELECT * FROM pdflink WHERE gorunurluk_durumu=0 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<a href='javascript:void(0)' onclick='sendRequest2(" . $row["id"] . ", \"pdf\")' title='".$row["pdf_adi"]."'>".$row["pdf_adi"]."</a><br>";
    }
}

$conn->close();
?>
    </div>
    <script>
    function sendRequest2(id, type) {
        $.ajax({
            url: 'geri.php',
            type: 'GET',
            data: { id: id, type: type },
            success: function(response) {
                window.location.reload(false)
            }
        });
    }
    </script>
</body>


</html>
