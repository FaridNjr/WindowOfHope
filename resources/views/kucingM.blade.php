<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - Kucing</title>

  
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
        <img src="assets/img/masonry-portfolio/kucingM.jpg" alt="Kucing" class="img-fluid">
        
        <!-- Informasi -->
        <div class="portfolio-info">
          <p>Nama Hewan: Kucing</p>
          <p>Jenis Hewan: Kucing tutul </p>
          <p>Umur: 15 bulan</p>
          <p>Jenis Kelamin: Jantan</p>
          <p>Vaksin: Sudah</p>
          
          <!-- Tautan -->
          <a href="assets/img/masonry-portfolio/kucingM.jpg" title="Kucing" class="btn btn-primary">Lihat Gambar</a>
          
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>