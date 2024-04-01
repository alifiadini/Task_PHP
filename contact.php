<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/contact.css">
  <title>Contact</title>
</head>
<body>
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Formulir Kontak</h5>
    <form id="contactForm">
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="saran">Saran:</label>
        <textarea id="saran" name="saran" class="form-control" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const contactForm = document.getElementById('contactForm');

  contactForm.addEventListener('submit', function(event) {
    event.preventDefault();

    Swal.fire({
      icon: 'success',
      title: 'Saran Terkirim!',
      text: 'Terima kasih atas saran Anda.',
      confirmButtonText: 'OK'
    });

    contactForm.reset();
  });
});
</script>

</body>
</html>