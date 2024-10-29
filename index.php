<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
</head>

<body>
    <header>
        <h1 class="text-center p-3">Membuat website dinamis</h1>
        <!-- navbar -->
        <?php include "includes/navbar.php" ?>
        <!-- ./navbar -->
    </header>

    <!-- konten -->
    <div class="container mt-3">
        <div class="d-flex justify-content-between">
            <!-- Konten utama -->
            <?php include "konten.php" ?>
            <!-- Search box di sebelah kanan -->
            <div>
                <input type="search" class="form-control" placeholder="Cari..." style="width: 200px;">
            </div>
        </div>
    </div>
    <!-- konten -->

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Kontak Kami</h5>
                    <p>Email: info@example.com</p>
                    <p>Telepon: (123) 456-7890</p>
                </div>
                <div class="col-md-4">
                    <h5>Ikuti Kami</h5>
                    <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                </div>
                <div class="col-md-4">
                    <h5>Lokasi</h5>
                    <p>Jl. Contoh No.123, Kota Contoh</p>
                    <p>Indonesia</p>
                </div>
            </div>
            <div class="text-center mt-3">
                <small>&copy; 2024 Website Dinamis. All rights reserved.</small>
            </div>
        </div>
    </footer>

    <script src="assets/jquery-3.7.1.js"></script>
    <script src="assets/datatables/dataTables.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
    new DataTable('#example');
    </script>

</body>

</html>
