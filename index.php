<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link id="theme-link" rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Ana Sayfa</title>
    <style>
        .center-frame {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }
    </style>
    <script>
        function changeTheme() {
            var theme = document.getElementById("theme").value;
            var themeLink = document.getElementById("theme-link");
            if (theme === "dark") {
                themeLink.href = "https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/darkly/bootstrap.min.css";
            } else {
                themeLink.href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css";
            }
        }
    </script>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="https://www.sanko.k12.tr/uploads/2023/10/a6148bdaaafc51d0c92ec18d2a2a0bd8.png" width="120" height="120" class="d-inline-block align-top" alt="">
           
        </a>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Ana Sayfa <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="Hakkinda.php">Hakkında</a>
      </li>
      <li class="nav-item">
        
      </li>
    </ul>
  </div>
</nav>

        
        <select id="theme" onchange="changeTheme()">
            <option value="light">Açık Tema</option>
            <option value="dark">Koyu Tema</option>
        </select>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Duyurular</h2>
                        <!-- Duyurularınızı buraya ekleyin -->
                       
                        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";

try {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, duyuru_basligi, duyuru_icerigi, gorunurluk_durumu FROM Duyurular WHERE gorunurluk_durumu = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $baslik = substr($row["duyuru_basligi"], 0, 15) . "";
            echo "<a target='_blank' href='goruntule.php?id=".$row["id"]."&type=duyuru"."' title='".$row["duyuru_basligi"]."'>".$baslik."</a><br>";
        }
    } else {
        echo "Duyuru yok";
    }
    $conn->close();
} catch (Exception $e) {
    echo 'Hata oluştu: ',  $e->getMessage(), "\n";
}

?>



                    </div>
                </div>
            </div>
            <div class="col-md-6 center-frame">
                <iframe src="https://www.instagram.com/sankookul/embed" width="750" height="750" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">PDF'ler</h2>
                        <!-- PDF linklerinizi buraya ekleyin -->

                           
                        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site";

try {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, pdf_adi, pdf_linki, gorunurluk_durumu FROM pdflink WHERE gorunurluk_durumu = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $baslik = substr($row["pdf_linki"], 0, 10) . "...";
            echo "<a target='_blank' href='goruntule.php?id=".$row["id"]."&type=pdf"."' title='".$row["pdf_adi"]."'>".$baslik."</a><br>";
        }
    } else {
        echo "Link yok";
    }
    $conn->close();
} catch (Exception $e) {
    echo 'Hata oluştu: ',  $e->getMessage(), "\n";
}

?>

                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

