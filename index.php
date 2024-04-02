<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table Nilai Ujian Mahasiswa</title>
  <link rel="stylesheet" href="./css/style.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-5">
        <div class="bg-warning text-center mb-4">
          <h3>From Nilai Ujian</h3>
        </div>
        <div class="form-card">
          <form action="index.php" method="POST">
            <div class="form-group">
              <label for="nim">Nim</label>
              <input id="nim" name="nim" type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-address-card"></i>
                  </div>
                </div>
                <input id="nama" name="nama" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label for="kuliah">Kuliah</label>
              <select id="kuliah" name="kuliah" class="custom-select">
                <option value="">--- Pilih Universitas ---</option>
                <option value="Universitas Banten Jaya">Universitas Banten Jaya</option>
                <option value="Universitas Serang Raya">Universitas Serang Raya</option>
                <option value="Universitas Bina Bangsa">Universitas Bina Bangsa</option>
                <option value="Universitas Indonesia">Universitas Indonesia</option>
              </select>
            </div>
            <div class="form-group">
              <label for="matakuliah">Mata Kuliah</label>
              <select id="matakuliah" name="matakuliah" class="custom-select">
                <option value="">--- Pilih Mata Kuliah ---</option>
                <option value="PHP">PHP</option>
                <option value="JAVA SCRIPT">JAVA SCRIPT</option>
                <option value="LARAVEL">LARAVEL</option>
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
              </select>
            </div>
            <div class="form-group">
              <label for="nilai">Nilai</label>
              <input id="nilai" name="nilai" type="text" class="form-control">
            </div>
            <div class="form-group">
              <button name="proses" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
  require_once 'mahasiswa.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // tangkap data dari form
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kuliah = $_POST['kuliah'];
    $matakuliah = $_POST['matakuliah'];
    $nilai = $_POST['nilai'];
    
    // buat objek
    $ns1 = new Mahasiswa($nim, $nama, $kuliah, $matakuliah, $nilai);
  ?>

    <div class="container">
      <table class="table">
        <thead class="table-success">
          <tr>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Kuliah</th>
            <th scope="col">Mata Kuliah</th>
            <th scope="col">Nilai</th>
            <th scope="col">Grade</th>
            <th scope="col">Predikat</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><?= $ns1->nim ?></th>
            <td><?= $ns1->nama ?></td>
            <td><?= $ns1->kuliah ?></td>
            <td><?= $ns1->matakuliah ?></td>
            <td><?= $ns1->nilai ?></td>
            <td><?= $ns1->grade ?></td>
            <td><?= $ns1->predikat ?></td>
            <td><?= $ns1->status ?></td>
          </tr>
        </tbody>
      </table>

    </div>
    <div class="container">
      <a href="index.php" class="btn btn-primary">Kembali</a>
    </div>
    </div>
    
  <?php
  }
  ?>
</body>

</html>