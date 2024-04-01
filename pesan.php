<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/pesan.css">
  <title>Pesan</title>
</head>
<body>
  <div class="order-menu">
    <h2>Menu Pesanan</h2>
    <form action="#" method="post">
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" rows="4" required></textarea>
      </div>
      <div class="form-group">
        <label for="jumlah_pesanan">Jumlah Pesanan:</label>
        <input type="number" id="jumlah_pesanan" name="jumlah_pesanan" min="1" required>
      </div>
      <div class="form-group">
        <label for="jenis_mobil">Jenis Mobil:</label>
        <select id="jenis_mobil" name="jenis_mobil" required>
          <option value="lotus">Lotus</option>
          <option value="chevrolet">Chevrolet</option>
        </select>
      </div>
      <button type="submit" name="pesan">Pesan</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    
    <?php if(isset($_POST['pesan'])) { ?>
      
      Swal.fire({
        icon: 'success',
        title: 'Pesanan Terkirim!',
        text: 'Pesanan Anda telah terkirim dan akan diproses.',
        confirmButtonText: 'OK'
      });
    <?php } ?>
  });
  </script>
</body>
</html>