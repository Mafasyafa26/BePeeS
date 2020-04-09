<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  
    <a class="navbar-brand" href="#">
        <img src="Pemda_Probolinggo.png" alt="Logo" style="width:200px;">
        <a href="login.php" class="btn btn-outline-success mr-3">Login</a> 
        <a href="#" class="btn btn-outline-danger">Daftar</a> 
      </a>
    <div class="jumbotron text-center bg-dark text-white">
        <h1 style="text-align: center">Badan Pusat Statistik</h1>
        <p style="text-align: center;">Kota Probolinggo</p>
    </div>
    
    <nav class="navbar navbar-expand-sm bg-dark navbar-right">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Profil
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="sejarah.php">Sejarah</a>
            <a class="dropdown-item" href="infrastruktur.php">Infrastruktur</a>
            <a class="dropdown-item" href="potensidaerah.php">Potensi Daerah</a>
            <a class="dropdown-item" href="geografis.php">Geografis</a>
            <a class="dropdown-item" href="demografi.php">Demografi</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Informasi Publik
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="pariwisata.php">Pariwisata</a>
            <a class="dropdown-item" href="transportasi.php">Transportasi</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Berita</a>
        </li>
        
        
      </ul>
        <form class="form-inline ml-auto" action="action_page.php">
          <input class="form-control" type="text" placeholder="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </nav>

      <div class="container p-3 my-3 bg-primary text-white">
        <h2>Geografis</h2>
      </div>

      <img src="peta.jpg" width="50%" height="50%" style="display: block; margin: auto;">

      <div class="container p-3 my-3 bg-dark text-white">
        <p>Kota  Probolinggo  secara geografis terletak pada koordinat 7 43'41'- 7 49'04' Lintang  Selatan dan 113 10' - 113 15' Bujur Timur, dengan garis pantai sepanjang 7 km2 dan secara umum terletak di propinsi Jawa  Timur bagian Timur berbatasan dengan kota Pasuruan dan Kabupaten  Lumajang.

Kota transit yang dilewati oleh jalur jalan propinsi yang sangat sibuk. Kota Probolinggo terletak pada ketinggian 0 - 50m di atas permukaan air laut, dengan tanah dengan karakteristik berlereng dari luas kota secara keseluruhan.</p>
</div>

      <ul class="pagination">
         <li class="page-item"><a class="page-link" href="index.html">Home</a></li>
         <li class="page-item"><a class="page-link" href="sejarah.php">1</a></li>
         <li class="page-item"><a class="page-link" href="infrastruktur.php">2</a></li>
         <li class="page-item"><a class="page-link" href="potensidaerah.php">3</a></li>
         <li class="page-item active"><a class="page-link" href="#">4</a></li>
         <li class="page-item"><a class="page-link" href="demografi.php">5</a></li>
      </ul>
     
</body>
</body>
</html>