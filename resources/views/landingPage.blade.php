<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maneki - Melek Finansial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --maneki-hijau: #cacacaff; /* Warna hijau muda untuk background */
            --maneki-hijau-gelap: #000080ff; /* Contoh warna untuk tombol */
             --maneki-orange: #ffc800ff; /* Warna hijau muda untuk background */
        }
        .text-maneki-orange {
            color: var(--maneki-orange);
        }
        .bg-maneki {
            background-color: var(--maneki-hijau);
        }
        .text-maneki-dark {
            color: var(--maneki-hijau-gelap);
        }
        .btn-maneki {
            background-color: var(--maneki-hijau-gelap);
            color: white;
            border: none;
        }
        .btn-outline-maneki {
            border: 1px solid var(--maneki-hijau-gelap);
            color: var(--maneki-hijau-gelap);
        }
        .hero-section {
            padding: 150px ;
            height: 40rem;
        }
        .section-padding {
            padding: 60px 0;
        }
        .card-icon {
            font-size: 3rem;
            color: var(--maneki-hijau-gelap);
        }
        /* Penyesuaian lain agar mirip */
        .article-card img {
            height: 150px; /* Tinggi gambar artikel yang seragam */
            object-fit: cover;
        }
        .header {
    background-image: url('https://media.istockphoto.com/id/2168720864/id/foto/pengusaha-menganalisis-grafik-tren-pertumbuhan-pasar-pada-tahun-2025-dan-merencanakan.webp?a=1&b=1&s=612x612&w=0&k=20&c=CTDgWcY_m1bgOxXTiIVM5Mw4MdAI_FGVYvQx8h1Alp0=');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    color: white;
}

.header::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.4); /* efek gelap biar teks lebih jelas */
}

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    @include('layout.navbar')
    <header class="header hero-section bg-maneki text-white ">
        <div class="container position-relative">
            <div class="row align-items-center ">
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-maneki-orange">Bangun Masa Depanmu Dengan Melek Finansial</h1>
                    <p class="lead mt-3">Jadikan impianmu nyata dengan perencanaan keuangan yang kuat. Maneki menyediakan alat, edukasi, dan komunitas yang siap mendukung perjalanan finansialmu, dari nol hingga ahli.</p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="https://images.unsplash.com/photo-1526628953301-3e589a6a8b74?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGZpbmFuY2lhbHxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&q=60&w=600" alt="Ilustrasi Melek Finansial" class="img-fluid rounded-3">
                </div>
            </div>
        </div>
    </header>

    <section class="section-padding text-center">
        <div class="container">
            <h2 class="mb-4">Mengenal Maneki</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="text-muted">Maneki adalah platform edukasi finansial yang siap membantu setiap individu mencapai potensi keuangan yang kuat. Kami percaya bahwa perencanaan keuangan yang baik adalah kunci menuju kebebasan dan ketenangan, dan kami hadir untuk menyediakan alat dan sumber daya yang Anda butuhkan untuk mencapai tujuan tersebut.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding pt-0">
        <div class="container">
            <h2 class="text-center mb-5">Akses Cepat</h2>
            <div class="row text-center">
                <div class="col-lg-4 mb-4">
                    <div class="card p-4 h-100 border-0 shadow-sm">
                        <i class="fas fa-book-open card-icon mb-3"></i>
                        <h5 class="fw-bold">Edukasi Dasar</h5>
                        <p class="card-text text-muted">Pelajari konsep finansial dasar dengan modul yang mudah dipahami dalam genggaman.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card p-4 h-100 border-0 shadow-sm">
                        <i class="fas fa-calculator card-icon mb-3"></i>
                        <h5 class="fw-bold">Kalkulator Keuangan</h5>
                        <p class="card-text text-muted">Hitung anggaran, dana darurat, dan investasi dengan cepat dan akurat.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card p-4 h-100 border-0 shadow-sm">
                        <i class="fas fa-video card-icon mb-3"></i>
                        <h5 class="fw-bold">Video Tutorial</h5>
                        <p class="card-text text-muted">Tonton video tutorial interaktif tentang berbagai topik finansial.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding pt-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5 ">Misi Kami</h2>
            <div class="row text-center">
                <div class="col-lg-4 mb-4">
                    <i class="fas fa-graduation-cap card-icon mb-3"></i>
                    <h5 class="fw-bold">Edukasi</h5>
                    <p class="text-muted"><small>Memberikan literasi keuangan yang inklusif dan mudah diakses bagi semua kalangan.</small></p>
                </div>
                <div class="col-lg-4 mb-4">
                    <i class="fas fa-handshake card-icon mb-3"></i>
                    <h5 class="fw-bold">Transparansi</h5>
                    <p class="text-muted"><small>Menyajikan informasi dengan jelas, jujur, dan tidak memihak.</small></p>
                </div>
                <div class="col-lg-4 mb-4">
                    <i class="fas fa-lightbulb card-icon mb-3"></i>
                    <h5 class="fw-bold">Inovasi</h5>
                    <p class="text-muted"><small>Menciptakan fitur dan alat bantu finansial (financial tools) yang relevan dan mutakhir.</small></p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <h2 class="text-center mb-5">Artikel Terbaru</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card article-card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/400x150?text=Tips+Anggaran" class="card-img-top" alt="Tips Mengelola Anggaran">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">5 Tips Mengelola Anggaran dengan Prinsip Sederhana</h5>
                            <a href="#" class="btn btn-outline-secondary btn-sm mt-2">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card article-card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/400x150?text=Dana+Darurat" class="card-img-top" alt="Dana Darurat">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Panduan Komplit Memulai Dana Darurat untuk Pemula</h5>
                            <a href="#" class="btn btn-outline-secondary btn-sm mt-2">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card article-card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/400x150?text=Strategi+Menabung" class="card-img-top" alt="Strategi Menabung">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Strategi Menabung Cerdas: Cara Terbaik Mengumpulkan Uang</h5>
                            <a href="#" class="btn btn-outline-secondary btn-sm mt-2">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card article-card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/400x150?text=Manajemen+Utang" class="card-img-top" alt="Manajemen Utang">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Manajemen Utang: Amankan Masa Depan Tanpa Beban</h5>
                            <a href="#" class="btn btn-outline-secondary btn-sm mt-2">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card article-card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/400x150?text=Mengelola+Uang" class="card-img-top" alt="Mengelola Uang Konsumtif">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Mengelola Uang Konsumtif: Tips Jitu Atasi Kebiasaan Boros</h5>
                            <a href="#" class="btn btn-outline-secondary btn-sm mt-2">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card article-card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/400x150?text=Investasi+Pemula" class="card-img-top" alt="Investasi Pemula">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Investasi Bagi Pemula: Kenali Risiko dan Peluangnya</h5>
                            <a href="#" class="btn btn-outline-secondary btn-sm mt-2">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-maneki text-center">
        <div class="container">
            <a href="#" class="btn btn-maneki rounded-pill px-5 py-2 fw-bold me-3">Mulai Belajar</a>
            <a href="#" class="btn btn-outline-maneki rounded-pill px-5 py-2 fw-bold">Coba Kalkulator</a>
        </div>
    </section>

    <footer class="py-4 border-top">
        <div class="container text-center">
            <p class="mb-0 text-muted"><small>&copy; 2025 Maneki. Hak Cipta Dilindungi.</small></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>