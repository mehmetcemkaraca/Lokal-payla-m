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
   
           <center><b>Bu web sitesi mehmet cem karaca tarafından yazılmıştır..</b> <br> <a href="https://github.com/mehmetcemkr">Github Adresim.</a><br> iletişim:mehmetcemkr@gmail.com <br><image src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSx9vpeumdDmlxSIpE-o5PI-d5BlzYCEbBz_o5JdsFD0A&s"> </br>
<b>bağış yaparak projelerime destek olabilirsiniz.
  
</b> </br>

<div class="card" style="width: 18rem;">
  <div class="card-body">
    
    <p class="card-text">TR69 0001 0024 2586 9454 5950 01</p>
   
  </div>
</div>


</center>
           
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

