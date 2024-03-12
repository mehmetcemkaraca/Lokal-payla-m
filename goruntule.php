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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";


if(isset($_GET['id']) && isset($_GET['type'])) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    $id = $_GET['id'];
    $type = $_GET['type'];

    if ($type == 'duyuru') {
        $sql = "SELECT * FROM Duyurular WHERE id = $id AND gorunurluk_durumu = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='card'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $row["duyuru_basligi"] . "</h5>";
                echo "<p class='card-text'>" . $row["duyuru_icerigi"] . "</p>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "0 results";
        }
    } elseif ($type == 'pdf') {
        $sql = "SELECT id, pdf_adi, pdf_linki, gorunurluk_durumu FROM pdflink WHERE id = $id AND gorunurluk_durumu = 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='card'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $row["pdf_adi"] . "</h5>";
                echo "<p class='card-text'><a target='_blank' href='" . $row["pdf_linki"] . "'>PDF Linki</a></p>";

                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "Link yok";
        }
    }

    $conn->close();
}
?>

    </div>
</body>
</html>
