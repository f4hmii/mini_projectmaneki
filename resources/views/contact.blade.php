<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maneki - Hubungi Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <style>
        :root {
            --maneki-hijau: #e6ffe6; /* Warna hijau muda */
            --maneki-hijau-gelap: #008000; /* Warna untuk tombol/heading */
        }
        .text-maneki-dark {
            color: var(--maneki-hijau-gelap);
        }
        .btn-maneki {
            background-color: var(--maneki-hijau-gelap);
            color: white;
            border: none;
        }
        .section-padding {
            padding: 60px 0;
        }
        .contact-icon {
            color: var(--maneki-hijau-gelap);
            width: 25px;
            text-align: center;
        }
        .contact-info a, .contact-info span {
            color: #212529; /* Warna teks gelap Bootstrap */
        }
        .form-control:focus {
            border-color: var(--maneki-hijau-gelap);
            box-shadow: 0 0 0 0.25rem rgba(0, 128, 0, 0.25); /* Simulasi focus ring hijau */
        }
        /* Style untuk Lokasi Kami (Opsional, untuk menyesuaikan ukuran gambar) */
        .location-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    @include('layout.navbar')

    <header class="text-center pt-5 pb-5">
        <div class="container">
            <h1 class="display-6 fw-bold text-dark">Hubungi Kami</h1>
        </div>
    </header>

    <section class="section-padding pt-0">
        <div class="container">
            <div class="row">
                
                <div class="col-md-6 mb-5 mb-md-0">
                    <h4 class="fw-bold mb-3">Kirim Pesan</h4>
                    <p class="text-muted mb-4"><small>Kami akan membalas secepatnya.</small></p>
                    
                    <form>
                        <div class="mb-3">
                            <label for="fullName" class="form-label fw-bold">Nama Lengkap</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" id="fullName" placeholder="Masukkan nama lengkap Anda">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Alamat Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" id="email" placeholder="Masukkan alamat email Anda">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label fw-bold">Pesan Anda</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Tulis pesan Anda di sini..."></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-maneki w-100 py-2 fw-bold">Kirim Pesan</button>
                    </form>
                </div>

                <div class="col-md-6 ps-md-5">
                    
                    <div class="mb-5">
                        <h4 class="fw-bold mb-3">Detail Kontak</h4>
                        <p class="text-muted mb-3"><small>Informasi langsung untuk terhubung dengan kami.</small></p>
                        <div class="contact-info mb-2 d-flex align-items-center">
                            <i class="fas fa-envelope contact-icon"></i>
                            <a href="mailto:halo@maneki.com" class="ms-2 text-decoration-none">halo@maneki.com</a>
                        </div>
                        <div class="contact-info mb-2 d-flex align-items-center">
                            <i class="fas fa-phone contact-icon"></i>
                            <span class="ms-2">+62 812-3456-7890</span>
                        </div>
                        <div class="contact-info mb-4 d-flex align-items-center">
                            <i class="fas fa-clock contact-icon"></i>
                            <span class="ms-2">Jam Operasional: Senin - Jumat, 09:00 - 17:00 WIB</span>
                        </div>
                    </div>
                    
                    <div class="mb-5">
                        <h4 class="fw-bold mb-3">Terhubung dengan Kami</h4>
                        <p class="text-muted mb-3"><small>Ikuti kami di media sosial.</small></p>
                        <div class="mb-2 d-flex align-items-center">
                            <i class="fab fa-instagram contact-icon"></i>
                            <a href="#" class="ms-2 text-decoration-none text-dark">Instagram Maneki</a>
                        </div>
                        <div class="mb-2 d-flex align-items-center">
                            <i class="fab fa-linkedin-in contact-icon"></i>
                            <a href="#" class="ms-2 text-decoration-none text-dark">LinkedIn Maneki</a>
                        </div>
                        <div class="mb-4 d-flex align-items-center">
                            <i class="fab fa-youtube contact-icon"></i>
                            <a href="#" class="ms-2 text-decoration-none text-dark">YouTube Maneki</a>
                        </div>
                    </div>

                    <div>
                        <h4 class="fw-bold mb-3">Lokasi Kami</h4>
                        <p class="text-muted mb-3"><small>Maneki berada di Bandung, Indonesia.</small></p>
                        <img src="https://via.placeholder.com/400x180?text=Peta+Bandung" alt="Lokasi di Bandung" class="location-image shadow-sm">
                        <div class="d-flex align-items-start">
                            <i class="fas fa-map-marker-alt contact-icon mt-1"></i>
                            <span class="ms-2"><small>Jl. Teknologi Cerdas No. 45, Bandung, Indonesia</small></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <footer class="py-4 border-top">
        <div class="container d-flex justify-content-between align-items-center">
            <p class="mb-0 text-muted"><small>Navigasi | Sumber Daya | Komunitas</small></p>
            <div class="text-muted">
                <i class="fab fa-instagram me-2"></i>
                <i class="fab fa-linkedin-in me-2"></i>
                <i class="fab fa-youtube me-2"></i>
            </div>
        </div>
    </footer>

    <a href="#" class="btn btn-maneki rounded-circle p-3 shadow-lg position-fixed" style="bottom: 20px; right: 20px; z-index: 100;">
        <i class="fas fa-comment-dots fa-lg"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>