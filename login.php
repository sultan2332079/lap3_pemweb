<?php
$nama = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';

if (empty($nama) || empty($email)) {
  header("Location: error.php");
  exit();
}

include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hasil Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-success-subtle">
  <div class="container mt-5">
    <div class="card p-4 shadow">
      <h2 class="text-center mb-4 text-success">Login Berhasil</h2>
      <ul class="list-group">
        <li class="list-group-item"><strong>Nama:</strong> <?= htmlspecialchars($nama) ?></li>
        <li class="list-group-item"><strong>Email:</strong> <?= htmlspecialchars($email) ?></li>
        <li class="list-group-item"><strong>Hari:</strong> <?= $hari ?></li>
        <li class="list-group-item"><strong>Tanggal:</strong> <?= $tanggal ?></li>
        <li class="list-group-item"><strong>Jam:</strong> <?= $jam ?></li>
      </ul>
    </div>
  </div>
</body>
</html>
