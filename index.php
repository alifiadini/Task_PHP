<?php
// About
$p1 = "Hi! Saya Alifia Dini Mediani Putri, Mahasiswa Universitas Banten Jaya, Fakultas Ilmu Komputer, 
Program Studi Teknik Informatika, Semester 6. Usia saya 20 Tahun. Saya berasal dari Serang Banten, Indonesia.";

$p2 = "Saya memiliki cita cita menjadi programmer yang sukses, walaupun sekarang ini saya masih terbilang baru 
belajar tetapi saya akan terus berusaha belajar untuk mendapatkan ilmu yang lebih luas.";

// Biodata
$nama = "Alifia Dini Mediani Putri";
$ttl = "Serang, 27 agustus 2003";
$alamat = "Serang Banten";
$email = "alifiadini@gmail.com";
$no_hp = '08725314764';

// Education
$tk = "Manbaul Ulum";
$sd = "Umbul Tengah 1";
$smp = "Al-Ihya";
$sma = "1 Kramatwatu";
$univ = "Banten Jaya";

// Social Media
$instagram = "@dinii";
$twitter = "@pikachu";
$facebook = "@alifia dini";
$line = "@dinoy";
$discord = "@ZSA";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- My css -->
    <link rel="stylesheet" href="./css/style.css">
    <title>My Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    </head>
    <body id="home">

    <!-- Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand"
          href="#">Pikachu</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"
          id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active"
                aria-current="page"
                href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                href="#biodata">Biodata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"
                href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Jumbroton -->
    <section class="jumbotron text-center">
        <img src="img/pikachu.jpg" alt="Admin" width="130" class="rounded-circle img-thumbnail"/>
        <h1 class="display-4 class fw-bold fs-3">Alifia Dini M.p</h1>
        <p class="lead fw-normal fs-6">I'm Student | Mahasiswi In Universitas Banten Jaya</p>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,224L12,202.7C24,181,48,139,72,117.3C96,96,120,96,144,133.3C168,171,192,245,216,261.3C240,277,264,235,288,202.7C312,171,336,149,360,117.3C384,85,408,43,432,69.3C456,96,480,192,504,208C528,224,552,160,576,138.7C600,117,624,139,648,165.3C672,192,696,224,720,197.3C744,171,768,85,792,74.7C816,64,840,128,864,170.7C888,213,912,235,936,208C960,181,984,107,1008,80C1032,53,1056,75,1080,74.7C1104,75,1128,53,1152,85.3C1176,117,1200,203,1224,240C1248,277,1272,267,1296,234.7C1320,203,1344,149,1368,144C1392,139,1416,181,1428,202.7L1440,224L1440,320L1428,320C1416,320,1392,320,1368,320C1344,320,1320,320,1296,320C1272,320,1248,320,1224,320C1200,320,1176,320,1152,320C1128,320,1104,320,1080,320C1056,320,1032,320,1008,320C984,320,960,320,936,320C912,320,888,320,864,320C840,320,816,320,792,320C768,320,744,320,720,320C696,320,672,320,648,320C624,320,600,320,576,320C552,320,528,320,504,320C480,320,456,320,432,320C408,320,384,320,360,320C336,320,312,320,288,320C264,320,240,320,216,320C192,320,168,320,144,320C120,320,96,320,72,320C48,320,24,320,12,320L0,320Z"></path></svg>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col">
            <h2><b>About</b></h2>
          </div>
        </div>
        <br>
        <div class="row justify-content-center text-center mb-4">
          <div class="col">

          <!-- Cetak hasil PHP di dalam HTML -->
            <p><?= $p1 ?></p>
          </div>
          <div class="col">
            <p><?= $p2 ?></p>
          </div>
          
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#BEF1FD" fill-opacity="1" d="M0,192L10.4,197.3C20.9,203,42,213,63,202.7C83.5,192,104,160,125,144C146.1,128,167,128,188,133.3C208.7,139,230,149,250,170.7C271.3,192,292,224,313,229.3C333.9,235,355,213,376,213.3C396.5,213,417,235,438,218.7C459.1,203,480,149,501,122.7C521.7,96,543,96,563,122.7C584.3,149,605,203,626,197.3C647,192,668,128,689,96C709.6,64,730,64,751,96C772.2,128,793,192,814,192C834.8,192,856,128,877,138.7C897.4,149,918,235,939,240C960,245,981,171,1002,149.3C1022.6,128,1043,160,1064,154.7C1085.2,149,1106,107,1127,96C1147.8,85,1169,107,1190,144C1210.4,181,1231,235,1252,229.3C1273,224,1294,160,1315,144C1335.7,128,1357,160,1377,170.7C1398.3,181,1419,171,1430,165.3L1440,160L1440,320L1429.6,320C1419.1,320,1398,320,1377,320C1356.5,320,1336,320,1315,320C1293.9,320,1273,320,1252,320C1231.3,320,1210,320,1190,320C1168.7,320,1148,320,1127,320C1106.1,320,1085,320,1064,320C1043.5,320,1023,320,1002,320C980.9,320,960,320,939,320C918.3,320,897,320,877,320C855.7,320,835,320,814,320C793,320,772,320,751,320C730.4,320,710,320,689,320C667.8,320,647,320,626,320C605.2,320,584,320,563,320C542.6,320,522,320,501,320C480,320,459,320,438,320C417.4,320,397,320,376,320C354.8,320,334,320,313,320C292.2,320,271,320,250,320C229.6,320,209,320,188,320C167,320,146,320,125,320C104.3,320,83,320,63,320C41.7,320,21,320,10,320L0,320Z"></path></svg>
    </section>

    <!-- Biodata-->
      <section id="biodata">
        <div class="container">
          <div class="row text-center mb-3">
            <div class="col">
              <h2>Biodata</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-3 mb-3">
              <div class="card">
              <div class="card-body">
              <div class="card-body">

              <!-- Cetak hasil PHP di dalam HTML -->
              <p class="card-text"><b>About Me!</b></p>
              <p>Nama : <?= $nama ?></p>
              <p>Ttl : <?= $ttl ?></p>
              <p>Alamat : <?= $alamat ?></p>
              <p>Email : <?= $email ?></p>
              <p>No Hp : <?= $no_hp ?></p>

              </div>
              </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card">
              <div class="card-body">
              <div class="card-body">
              
              <!-- Cetak hasil PHP di dalam HTML -->
              <p class="card-text"><b>Education!</b></p>
              <p>TK <?= $tk ?></p>
              <p>SDN <?= $sd ?></p>
              <p>MTS <?= $smp ?></p>
              <p>SMAN <?= $sma ?></p>
              <p>UNIVERSITAS <?= $univ ?></p>

              </div>
              </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="card">
              <div class="card-body">
              <div class="card-body">
              
              <!-- Cetak hasil PHP di dalam HTML -->
              <p class="card-text"><b>Social Media!</b></p>
              <p>Instagram : <?= $instagram ?></p>
              <p>Twitter : <?= $twitter ?></p>
              <p>Facebook : <?= $facebook ?></p>
              <p>Line : <?= $line ?></p>
              <p>Discord : <?= $discord ?></p>

              </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,256L17.1,234.7C34.3,213,69,171,103,170.7C137.1,171,171,213,206,234.7C240,256,274,256,309,224C342.9,192,377,128,411,85.3C445.7,43,480,21,514,53.3C548.6,85,583,171,617,176C651.4,181,686,107,720,80C754.3,53,789,75,823,117.3C857.1,160,891,224,926,229.3C960,235,994,181,1029,138.7C1062.9,96,1097,64,1131,85.3C1165.7,107,1200,181,1234,181.3C1268.6,181,1303,107,1337,85.3C1371.4,64,1406,96,1423,112L1440,128L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z"></path></svg>
      </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7">
            <form>
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" aria-describedby="name">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" aria-describedby="email">
              </div>
              <div class="mb-3">
                <label for="saran" class="form-label">Saran</label>
                <textarea class="form-control" id="saran" rows="2"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,192L40,160C80,128,160,64,240,74.7C320,85,400,171,480,181.3C560,192,640,128,720,138.7C800,149,880,235,960,229.3C1040,224,1120,128,1200,96C1280,64,1360,96,1400,112L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-white text-center pb-2000">
      <p>Created with <i class="bi bi-emoji-heart-eyes"></i> by <a href="https://www.instagram.com/dnxzvz/?next=%2F" class="text-white fw-bold">Alifia Dini M.p</a></p>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous">
    </script>
  </body>
</html>
