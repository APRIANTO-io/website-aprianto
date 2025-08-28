<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feli Modern Page</title>
  <link href="/assets/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background: linear-gradient(135deg, #f8fafc 0%, #ffe0ec 100%);
      min-height: 100vh;
      font-family: 'Segoe UI', Arial, sans-serif;
    }
    .card {
      box-shadow: 0 4px 24px rgba(0,0,0,0.08);
      border-radius: 18px;
      margin-top: 60px;
    }
    .modern-title {
      color: #e75480;
      font-weight: 700;
      letter-spacing: 2px;
    }
    .modern-subtitle {
      color: #222;
      font-size: 1.2rem;
    }
    .btn-custom {
      background: linear-gradient(90deg, #e75480 0%, #ffb6b9 100%);
      color: #fff;
      border: none;
      border-radius: 30px;
      padding: 0.75rem 2rem;
      font-size: 1.1rem;
      transition: box-shadow 0.2s;
    }
    .btn-custom:hover {
      box-shadow: 0 2px 12px #e7548055;
      color: #fff;
    }
    .animated-text {
      display: inline-block;
      background: #e75480;
      color: #fff;
      padding: 0.5rem 1.5rem;
      border-radius: 20px;
      font-size: 1.1rem;
      animation: slideText 2s infinite alternate;
    }
    @keyframes slideText {
      0% { transform: translateX(0); }
      100% { transform: translateX(40px); }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card p-4 text-center">
          <h1 class="modern-title mb-2">CECE FEYIIIIIIII</h1>
          <div class="animated-text mb-3">feli is my cece forever</div>
          <h2 class="modern-subtitle mb-4">FELI</h2>
          <a href="?page=ota" class="btn btn-custom mb-2">SHOW</a><br>
          <a href="./" class="btn btn-custom">HOME</a>
        </div>
      </div>
    </div>
  </div>
  <script src="/assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
  <!-- ...existing code... -->
  <!-- ...existing code... -->
</body>
</html>