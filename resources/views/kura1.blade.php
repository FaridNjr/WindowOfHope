<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - Kura-kura</title>

  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom CSS -->
  <style>
    .portfolio-item {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      margin-top: 50px;
    }

    .portfolio-item img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 15px;
    }

    .portfolio-info {
      margin-top: 15px;
    }

    .portfolio-info p {
      margin: 5px 0;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 portfolio-item">
        <!-- Gambar -->
        <img src="assets/img/masonry-portfolio/kura1.jpg" alt="hamster" class="img-fluid">
        
        <!-- Informasi -->
        <div class="portfolio-info">
          <p>Nama Hewan:Kura-kura</p>
          <p>Jenis Hewan: Kura-Kura Manouria</p>
          <p>Umur: 5 bulan</p>
          <p>Jenis Kelamin: Betina</p>
          <p>Vaksin: Sudah</p>
          
          <!-- Tautan -->
          <a href="assets/img/masonry-portfolio/kura1.jpg" title="hamster" class="btn btn-primary">Lihat Gambar</a>
          <a href="https://wa.me/62882007642077" class="btn btn-success">Chat Pemilik</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
