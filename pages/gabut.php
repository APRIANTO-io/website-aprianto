<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website  - edit by aprianto</title>
    <link href="/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
      background: linear-gradient(135deg, #232526 0%, #414345 100%);
      min-height: 100vh;
      font-family: 'Segoe UI', Arial, sans-serif;
    }
    .card {
      box-shadow: 0 8px 24px rgba(0,0,0,0.2);
      border-radius: 18px;
      background: #fff;
      animation: fadeIn 1s;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .btn-home {
      margin-top: 20px;
    }
    .profile-img {
      width: 100px;
      height: 100px;
      object-fit: cover;
      border-radius: 50%;
      margin-bottom: 15px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    } 
    </style>
</head>
<body>
   <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card p-4 text-center" style="max-width: 400px; width: 100%;">
      <h1 class="mb-2 text-danger">selengkapnya Website</h1>
      <h2 class="mb-3 text-primary">njay</h2>
      <h3 class="mb-3 text-info">link to next page</h3>
      <a href="?page=galery" class="btn btn-danger btn-lg btn-home">galery</a>
      <p class="mb-2 text-dark">Website ini dibuat karena gabut, dan website ini di buat dengan bahasa pemrograman <b>PHP</b>. Desain modern dengan Bootstrap dan animasi agar lebih menarik.</p>  
      <a href="./" class="btn btn-danger btn-lg btn-home">HOME</a>
    </div>
  </div>
  <script src="/assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>