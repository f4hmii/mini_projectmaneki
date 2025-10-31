<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maneki - Artikel Edukasi Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <style>
        :root {
            --maneki-hijau: #e6ffe6; /* Warna hijau muda untuk background */
            --maneki-hijau-gelap: #008000; /* Warna untuk tombol/heading */
            --maneki-hijau-terang: #f0fff0; 
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

        /* Style untuk tombol filter/topik */
        .btn-filter-active {
            background-color: var(--maneki-hijau-gelap) !important;
            color: white !important;
            border-color: var(--maneki-hijau-gelap) !important;
        }
        .btn-filter {
            background-color: white;
            color: #6c757d;
            border: 1px solid #dee2e6;
            margin-right: 8px;
            margin-bottom: 8px;
            font-size: 0.9rem;
            padding: 6px 15px;
            border-radius: 50rem; /* pill shape */
        }
        .btn-filter:hover {
            border-color: var(--maneki-hijau-gelap);
            color: var(--maneki-hijau-gelap);
        }
        
        /* Style untuk Card Artikel */
        .article-card img {
            height: 200px; /* Tinggi gambar yang seragam */
            object-fit: cover;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }
        .article-category {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--maneki-hijau-gelap);
            color: white;
            padding: 2px 8px;
            font-size: 0.75rem;
            border-radius: 4px;
            font-weight: 500;
        }
        .article-meta {
            font-size: 0.85rem;
            color: #6c757d;
        }
    </style>
</head>
<body>

  @include('layout.navbar')

    <header class="section-padding pb-5 text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-6 fw-bold text-dark mb-3">Artikel Edukasi Keuangan</h1>
                    <p class="lead text-muted mb-4">Jelajahi berbagai artikel kami untuk meningkatkan literasi keuangan Anda. Pelajari cara menabung, mengelola anggaran, berinvestasi, dan mengatasi utang dengan panduan ahli dari Maneki.</p>
                </div>
            </div>
            
            <div class="d-flex flex-wrap justify-content-center mt-3">
                <button class="btn btn-filter btn-filter-active">Semua Topik</button>
                <button class="btn btn-filter">Menabung</button>
                <button class="btn btn-filter">Anggaran</button>
                <button class="btn btn-filter">Investasi</button>
                <button class="btn btn-filter">Pengelolaan Utang</button>
            </div>
        </div>
    </header>

    <section class="section-padding pt-0 pb-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-5">Artikel Terbaru</h2>
            <div class="row g-4">
                
                <div class="col-md-4">
                    <div class="card article-card h-100 shadow-sm border-0 rounded-4">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/400x200?text=Menabung" class="card-img-top" alt="Strategi Menabung Efektif">
                            <span class="article-category">Menabung</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Strategi Menabung Efektif untuk Masa Depan Cerah</h5>
                            <p class="card-text text-muted small flex-grow-1">Pelajari teknik menabung yang dapat membantu Anda mencapai tujuan keuangan dengan cepat.</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="article-meta">5 Menit Baca</span>
                                <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill px-3">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card article-card h-100 shadow-sm border-0 rounded-4">
                         <div class="position-relative">
                            <img src="https://via.placeholder.com/400x200?text=Anggaran" class="card-img-top" alt="Panduan Anggaran">
                            <span class="article-category">Anggaran</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Panduan Lengkap Membuat Anggaran</h5>
                            <p class="card-text text-muted small flex-grow-1">Langkah demi langkah membangun rencana keuangan dengan anggaran yang solid. Artikel untuk Anda, mulai langkah dari dasar.</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="article-meta">7 Menit Baca</span>
                                <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill px-3">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card article-card h-100 shadow-sm border-0 rounded-4">
                         <div class="position-relative">
                            <img src="https://via.placeholder.com/400x200?text=Investasi" class="card-img-top" alt="Memulai Investasi">
                            <span class="article-category">Investasi</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Memulai Investasi: Pilihan untuk Pemula dan Strateginya</h5>
                            <p class="card-text text-muted small flex-grow-1">Pahami dasar-dasar investasi dan bagaimana Anda bisa mulai mengembangkannya, dari reksa dana hingga saham.</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="article-meta">10 Menit Baca</span>
                                <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill px-3">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card article-card h-100 shadow-sm border-0 rounded-4">
                        <div class="position-relative">
                            <img src="https://via.placeholder.com/400x200?text=Utang" class="card-img-top" alt="Strategi Melunasi Utang">
                            <span class="article-category">Pengelolaan Utang</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Strategi Efektif untuk Melunasi Utang Anda</h5>
                            <p class="card-text text-muted small flex-grow-1">Panduan lengkap mengenai cara untuk mengelolanya dan melunasi utang Anda. Pelajari strategi Debt Snowball.</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="article-meta">6 Menit Baca</span>
                                <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill px-3">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card article-card h-100 shadow-sm border-0 rounded-4">
                         <div class="position-relative">
                            <img src="https://via.placeholder.com/400x200?text=Sehat" class="card-img-top" alt="Keuangan Sehat">
                            <span class="article-category">Keuangan Pribadi</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">10 Kebiasaan Keuangan Sehat untuk Hidup yang Lebih Bahagia</h5>
                            <p class="card-text text-muted small flex-grow-1">Temukan kebiasaan harian yang baik adalah kunci untuk hidup yang lebih tenang dalam jangka panjang. Artikel ini akan memandu Anda.</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="article-meta">8 Menit Baca</span>
                                <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill px-3">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card article-card h-100 shadow-sm border-0 rounded-4">
                         <div class="position-relative">
                            <img src="https://via.placeholder.com/400x200?text=Literasi" class="card-img-top" alt="Literasi Keuangan">
                            <span class="article-category">Literasi Keuangan</span>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold">Pentingnya Literasi Keuangan di Era Digital</h5>
                            <p class="card-text text-muted small flex-grow-1">Di dunia yang serba cepat ini, pentingnya memahami literasi keuangan menjadi dasar yang tak terpisahkan.</p>
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="article-meta">9 Menit Baca</span>
                                <a href="#" class="btn btn-outline-secondary btn-sm rounded-pill px-3">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="text-center mt-5">
                <a href="#" class="btn btn-outline-secondary rounded-pill px-5 py-2">Muat Lebih Banyak Artikel</a>
            </div>

        </div>
    </section>

    <footer class="py-4 border-top">
        <div class="container text-center">
            <p class="mb-0 text-muted"><small>Navigasi | Sumber Daya | Komunitas</small></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>