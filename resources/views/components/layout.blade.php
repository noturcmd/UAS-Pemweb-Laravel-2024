<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Ticket Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style1.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">GoTravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <h1>Hei Kamu, Mau Kemana?</h1>
        <p>Cari tiket terbaik untuk perjalananmu sekarang!</p>
        <div class="search-container">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Cari tiket kereta, pesawat, atau hotel...">
        </div>
    </div>

    <!-- Services Section -->
    <section id="services">
        <h2 class="section-title">Layanan Kami</h2>
        <div class="container">
            <div class="row g-4">
                <!-- Train -->
                <div class="col-md-3">
                    <div class="card service-card train text-center">
                        <div class="card-body">
                            <i class="fas fa-train fa-3x mb-3"></i>
                            <h5 class="card-title">Kereta</h5>
                            <p class="card-text">Pesan tiket kereta untuk perjalanan Anda</p>
                            <a href="Kereta.php" class="btn btn-light">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Plane -->
                <div class="col-md-3">
                    <div class="card service-card plane text-center">
                        <div class="card-body">
                            <i class="fas fa-plane fa-3x mb-3"></i>
                            <h5 class="card-title">Pesawat</h5>
                            <p class="card-text">Cari tiket pesawat dengan harga terbaik</p>
                            <a href="Pesawat.php" class="btn btn-light">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Hotel -->
                <div class="col-md-3">
                    <div class="card service-card hotel text-center">
                        <div class="card-body">
                            <i class="fas fa-hotel fa-3x mb-3"></i>
                            <h5 class="card-title">Hotel</h5>
                            <p class="card-text">Temukan hotel nyaman untuk perjalanan Anda</p>
                            <a href="Hotel.php" class="btn btn-light">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <!-- Car Rental -->
                <div class="col-md-3">
                    <div class="card service-card car text-center">
                        <div class="card-body">
                            <i class="fas fa-car fa-3x mb-3"></i>
                            <h5 class="card-title mb-4">Mobil Travel</h5>
                            <p class="card-text mt-4">Sewa mobil Travel untuk liburan Anda</p>
                            <a href="Travel.php" class="btn btn-light">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section id="about" style="background-color: #f8f9fa;">
        <h2 class="section-title">Tentang Kami</h2>
        <div class="container">
            <p class="text-center">Kami adalah penyedia layanan perjalanan terpercaya untuk berbagai kebutuhan perjalanan Anda.</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2 class="section-title">Kontak Kami</h2>
        <div class="container text-center">
            <p>Email: support@gotravel.com</p>
            <p>Telepon: +62 812 3456 7890</p>
        </div>
    </section>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 GoTravel. All Rights Reserved.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
