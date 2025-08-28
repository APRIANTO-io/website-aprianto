<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
     body {
  background-color: rgba(255, 255, 255, 1); /* Light pink */
}
button {
  color: #ff0000ff; /* Mengubah warna teks paragraf menjadi merah */
}
</style>
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Form Tambah Data Siswa</h2>
    <form action="proses_tambah_siswa.php" method="post">
        <div class="mb-3">
            <label for="id_siswa" class="form-label">ID Siswa</label>
            <input type="number" class="form-control" id="id_siswa" name="id_siswa" required>
        </div>
        <div class="mb-3">
            <label for="id_kelas" class="form-label">ID Kelas</label>
            <input type="number" class="form-control" id="id_kelas" name="id_kelas" required>
        </div>
        <div class="mb-3">
            <label for="id_jurusan" class="form-label">ID Jurusan</label>
            <input type="number" class="form-control" id="id_jurusan" name="id_jurusan" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" maxlength="50" required>
        </div>
        <button type="submit" class="btn btn-danger">Tambah Siswa</button>
    </form>
</div>
<!-- Bootstrap JS Bundle CDN (optional, for interactivity) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<center><a href="./" class="btn btn-danger btn-lg">back</a></center>
</body>
</html>