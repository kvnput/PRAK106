<!DOCTYPE html>
<html>
<head>
    <title>Profil Praktikan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <style>
        .profile-image {
            width: 250px; /* Ubah ukuran sesuai kebutuhan */
        }
        .navbar {
            font-family: 'Playfair Display', serif;
        }
    </style>
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url('/') ?>">Home</a>
            <a class="navbar-brand" href="<?= base_url('profil') ?>">My Profile</a>
        </div>
    </nav>
    <div class="p-4 p-md-5 mb-4  text-dark">
        <h1 class="display-4 fst-italic">My Profile</h1>
        <img src="/image/Putri.jpeg" class="rounded float-end profile-image" alt="...">
        <p class="lead my-3">Nama Lengkap: <?php echo $namaLengkap; ?></p>
        <p class="lead my-3">NIM: <?php echo $nim; ?></p>
        <p class="lead my-3">Asal Prodi: <?php echo $prodi; ?></p>
        <p class="lead my-3">Hobi: <?php echo $hobi; ?></p>
        <p class="lead my-3">Skill: <?php echo $skill; ?></p>
        <p class="lead my-3">Informasi: <?php echo $informasiLainnya; ?></p>
    </div>
</body>
</html>