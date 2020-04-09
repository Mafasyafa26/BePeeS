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

      <div class="container p-3 my-3 bg-dark text-white">
        <h2>Demografi Kota Probolinggo</h2>
      </div>

      <img src="demografi-1.jpg" width="1000px" height="500px" style="display: block; margin: auto;">

      <div class="container p-3 my-3 bg-dark text-white">
        <p>Jumlah penduduk Kota Probolinggo akhir tahun 2017 hasil registrasi penduduk, menurut Dinas Kependudukan dan Catatan Sipil tercatat sebesar 235.440 jiwa. Bila dilihat dari status kewarganegaraan, hanya 0,03 persen atau sebesar 73 jiwa yang berkewarganegaraan asing (WNA) dari total penduduk Kota Probolinggo.

Kepadatan Penduduk adalah banyaknya penduduk per km persegi. Pada tahun 2017, kepadatan penduduk Kota Probolinggo sebesar 4.155,31 orang per km persegi. Kecamatan Mayangan merupakan kecamatan yang mempunyai kepadatan penduduk terbesar dibandingkan 4 kecamatan yang lain yaitu sebesar 7.376,07 orang per km persegi. Sebaliknya, Kecamatan Kedopok merupakan kecamatan yang dengan kepadatan penduduk terendah yaitu hanya 2.533,55 orangper km persegi.</p>
    </div>

    <img src="kepadatanpenduduk.png" width="40%" height="40%" style="display: block; margin: auto;">

    <div class="container p-3 my-3 bg-dark text-white">
    <p>Berdasarkan jenis kelaminnya, jumlah penduduk WNI perempuan tahun 2017 lebih banyak daripada penduduk laki-laki yaitu sebanyak 118.553 jiwa (50,35%). Sedangkan untuk jumlah penduduk WNA, jumlah penduduk laki-laki sebanyak 45 orang (61,64%) dan penduduk perempuan sebanyak 28 orang (38,36%).

Berdasarkan kelompok umurnya, jumlah penduduk paling banyak berada pada rentang usia 15-19 tahun yaitu sebanyak 20.057 jiwa (8,52%) dan yang paling sedikit adalah yang berada pada rentang usia 70-74 tahun yaitu sebanyak 3.920 jiwa (1,66%).

 </p>
    
    </div>

    <ul class="pagination">
         <li class="page-item"><a class="page-link" href="index.html">Home</a></li>
         <li class="page-item"><a class="page-link" href="sejarah.php">1</a></li>
         <li class="page-item"><a class="page-link" href="infrastruktur.php">2</a></li>
         <li class="page-item"><a class="page-link" href="potensidaerah.php">3</a></li>
         <li class="page-item"><a class="page-link" href="geografis.php">4</a></li>
         <li class="page-item active"><a class="page-link" href="#">5</a></li>
      </ul>
     
</body>
</body>
</html>