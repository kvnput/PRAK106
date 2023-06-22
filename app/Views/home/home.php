<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head>
    <title>Halaman Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <style>
        .navbar {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>
<body>
<div class="text-dark p-3">
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('/') ?>">Home</a>
            <a class="navbar-brand" href="<?= base_url('profil') ?>">My Profile</a>
        </div>
    </nav>
    <div class="p-4 p-md-5 mb-4  text-dark">
        <h1 class="display-4 fst-italic">Welcome to my blog</h1>
        <p class="lead my-3">Ini adalah blog pertama saya untuk tugas Modul 6 Pemerograman Web II </p>
        <p class="lead my-3">Perkenalkan nama saya <?php echo $nama; ?> dengan NIM <?php echo $nim; ?></p>
        <p class="lead my-3">Untuk melihat profile saya lebih lengkap bisa klik My Profile diatas </p>
    </div>
</div>
</body>
</html>