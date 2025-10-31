<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maneki - Tentang Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <style>
        :root {
            --maneki-hijau: #e6ffe6; /* Warna hijau muda untuk background */
            --maneki-hijau-gelap: #008000; /* Warna untuk tombol/garis */
            --maneki-hijau-terang: #f0fff0; /* Warna yang sedikit lebih terang dari hijau muda */
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
        .section-padding {
            padding: 80px 0;
        }
        .icon-circle {
            width: 70px;
            height: 70px;
            background-color: var(--maneki-hijau);
            color: var(--maneki-hijau-gelap);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }
        .team-photo {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            margin: 0 auto 10px;
            border: 5px solid var(--maneki-hijau-terang); /* Lingkaran hijau tipis */
        }
        /* Style untuk Timeline (Perjalanan Maneki) */
        .timeline {
            list-style: none;
            padding: 0;
            position: relative;
        }
        .timeline:before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 2px;
            background-color: #ddd; /* Garis abu-abu tipis */
            left: 50%;
            margin-left: -1px;
        }
        .timeline-item {
            margin-bottom: 50px;
            position: relative;
        }
        .timeline-item:nth-child(2n+1) {
            left: 0;
        }
        .timeline-item:nth-child(2n) {
            left: 0; /* Semua ke kiri agar terlihat seperti gambar */
        }
        .timeline-dot {
            width: 15px;
            height: 15px;
            background-color: var(--maneki-hijau-gelap);
            border-radius: 50%;
            position: absolute;
            top: 5px;
            left: -8px;
            z-index: 1;
        }
        .timeline-content {
            padding-left: 30px; /* Jarak dari dot */
            border-left: 2px solid #ddd;
        }
        .timeline-content p {
            font-size: 0.9rem;
            color: #6c757d;
        }

        /* Penyesuaian agar timeline berada di tengah container kecil */
        @media (max-width: 767.98px) {
            .timeline:before {
                left: 10px;
            }
            .timeline-dot {
                left: 2px;
            }
            .timeline-content {
                padding-left: 30px;
            }
            .timeline-item:nth-child(2n) .timeline-content,
            .timeline-item:nth-child(2n+1) .timeline-content {
                text-align: left;
            }
        }
        @media (min-width: 768px) {
            .timeline:before {
                left: 10px;
            }
            .timeline-dot {
                left: 2px;
            }
            .timeline-content {
                padding-left: 30px;
                border-left: none; /* Hilangkan border di desktop */
            }
        }
    </style>
</head>
<body>

  @include('layout.navbar')

    <header class="section-padding pb-4 bg-maneki text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-6 fw-bold text-dark mb-4">Tentang Kami</h1>
                    <p class="lead text-muted">Maneki adalah solusi perencanaan finansial digital yang berdedikasi untuk memberdayakan individu di seluruh Indonesia dengan pengetahuan dan alat yang mereka butuhkan untuk mencapai kebebasan finansial.</p>
                </div>
            </div>
        </div>
    </header>

    <section class="section-padding pt-5 pb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6 mb-4">
                    <div class="px-5">
                        <div class="icon-circle mx-auto"><i class="fas fa-eye"></i></div>
                        <h4 class="fw-bold mb-3">Visi Kami</h4>
                        <p class="text-muted"><small>Menjadi platform terkemuka yang menginspirasi dan memfasilitasi setiap langkah perencanaan keuangan, mengubah persepsi "finansial" menjadi sesuatu yang Mudah, Cepat, dan Menyenangkan untuk semua orang.</small></p>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="px-5">
                        <div class="icon-circle mx-auto"><i class="fas fa-bullseye"></i></div>
                        <h4 class="fw-bold mb-3">Misi Kami</h4>
                        <p class="text-muted"><small>Menyediakan alat dan edukasi finansial terpadu yang mudah diakses, akurat, dan relevan. Kami berupaya menjembatani kesenjangan pengetahuan, agar setiap individu dapat mengambil keputusan finansial yang tepat.</small></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding pt-5 bg-light text-center">
        <div class="container">
            <h2 class="fw-bold mb-5">Tim Kami</h2>
            <div class="row justify-content-center">
                
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <img src="https://via.placeholder.com/120x120?text=P1" alt="Dara Pramesti" class="team-photo shadow-sm">
                    <h5 class="fw-bold mb-0" style="font-size: 1rem;">Dara Pramesti</h5>
                    <p class="text-muted"><small>CEO</small></p>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <img src="https://via.placeholder.com/120x120?text=P2" alt="Zinna Santoso" class="team-photo shadow-sm">
                    <h5 class="fw-bold mb-0" style="font-size: 1rem;">Zinna Santoso</h5>
                    <p class="text-muted"><small>CTO</small></p>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <img src="https://via.placeholder.com/120x120?text=P3" alt="Citra Dewi" class="team-photo shadow-sm">
                    <h5 class="fw-bold mb-0" style="font-size: 1rem;">Citra Dewi</h5>
                    <p class="text-muted"><small>Head of Content</small></p>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <img src="https://via.placeholder.com/120x120?text=P4" alt="Arya Wijaya" class="team-photo shadow-sm">
                    <h5 class="fw-bold mb-0" style="font-size: 1rem;">Arya Wijaya</h5>
                    <p class="text-muted"><small>Lead Developer</small></p>
                </div>

                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <img src="https://via.placeholder.com/120x120?text=P5" alt="Lina Sari" class="team-photo shadow-sm">
                    <h5 class="fw-bold mb-0" style="font-size: 1rem;">Lina Sari</h5>
                    <p class="text-muted"><small>CFO</small></p>
                </div>
                
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <img src="https://via.placeholder.com/120x120?text=P6" alt="Budi Maryanto" class="team-photo shadow-sm">
                    <h5 class="fw-bold mb-0" style="font-size: 1rem;">Budi Maryanto</h5>
                    <p class="text-muted"><small>UX Designer</small></p>
                </div>

            </div>
            <a href="#" class="btn btn-outline-secondary rounded-pill px-4 mt-3"><small>Lihat Semua Tim</small></a>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <h2 class="fw-bold text-center mb-5">Perjalanan Maneki</h2>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <ul class="timeline">
                        <li class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h6 class="fw-bold text-maneki-dark mb-1">2019</h6>
                                <h5 class="fw-bold mb-2">Maneki Didirikan</h5>
                                <p>Dibangun sebagai inisiatif edukasi untuk pengembangan literasi keuangan di Indonesia.</p>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h6 class="fw-bold text-maneki-dark mb-1">2021</h6>
                                <h5 class="fw-bold mb-2">Peluncuran Platform V.1</h5>
                                <p>Diluncurkan dengan fitur utama kalkulator dana darurat, kalkulator utang, dan lebih dari 10.000 pengguna terdaftar.</p>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h6 class="fw-bold text-maneki-dark mb-1">2023</h6>
                                <h5 class="fw-bold mb-2">Kerjasama Edukasi</h5>
                                <p>Memulai program edukasi dengan Bank XYZ dan Universitas ABC untuk menjangkau target audiens lebih luas.</p>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h6 class="fw-bold text-maneki-dark mb-1">2024</h6>
                                <h5 class="fw-bold mb-2">Aplikasi Mobile Dirilis</h5>
                                <p>Merilis versi aplikasi mobile yang lebih *smooth*, meningkatkan *user rate* Maneki.</p>
                            </div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-dot"></div>
                            <div class="timeline-content">
                                <h6 class="fw-bold text-maneki-dark mb-1">2025</h6>
                                <h5 class="fw-bold mb-2">Komunitas Berkembang</h5>
                                <p>Mencapai satu juta pengguna aktif, menjadi komunitas edukasi finansial terpopuler di Indonesia.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-maneki text-center">
        <div class="container">
            <h3 class="fw-bold mb-3">Mulai Petualangan Finansialmu Hari Ini!</h3>
            <p class="mb-4">Maneki hadir untuk menemanimu meraih tujuan finansial. Jelajahi edukasi, alat bantu, dan komunitas kami. Langkah pertama menuju masa depan yang lebih cerah.</p>
            <a href="#" class="btn btn-maneki rounded-pill px-5 py-2 fw-bold me-3">Jelajahi Fitur</a>
            <a href="#" class="btn btn-outline-light rounded-pill px-5 py-2 fw-bold text-maneki-dark border-maneki-dark">Coba Kalkulator</a>
        </div>
    </section>

    <footer class="py-4 border-top">
        <div class="container text-center">
            <p class="mb-0 text-muted"><small>Maneki | Halaman | Kontak | Ketentuan | Kebijakan Privasi</small></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>