@extends('layouts.app')

@section('content')
<section id="home" class="d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center justify-content-center text-center">
            <!-- Kiri: Teks -->
            <div class="col-md-5 text-md-start text-center">
                <h1 class="fw-bold text-dark mb-1">
                    <span class="hello-text">Hello,</span> <span class="name-text">I'm Aryasuta</span>
                </h1>
                <h1 class="fw-bold fullstack-text">Fullstack Developer</h1>
                <p class="description">
                    Passionate about building scalable web applications and turning ideas into reality through clean and efficient code.
                </p>
                <div class="social-icons mt-4">
                    <a href="https://www.linkedin.com/in/aryasuta-baswara-7061a0295/" target="_blank">
                        <img src="{{ asset('assets/icons/linkedin-brands.svg') }}" alt="LinkedIn" class="icon">
                    </a>
                    <a href="https://github.com/AryasutaBaswara" target="_blank">
                        <img src="{{ asset('assets/icons/github-brands.svg') }}" alt="GitHub" class="icon">
                    </a>
                    <a href="https://www.instagram.com/baswaraarya/" target="_blank">
                        <img src="{{ asset('assets/icons/instagram-brands.svg') }}" alt="Instagram" class="icon">
                    </a>
                    <a href="https://x.com/NasiPecel77" target="_blank">
                        <img src="{{ asset('assets/icons/x-twitter-brands.svg') }}" alt="X" class="icon">
                    </a>
                    <a href="https://www.tiktok.com/@baswaraarya" target="_blank">
                        <img src="{{ asset('assets/icons/tiktok-brands.svg') }}" alt="Tiktok" class="icon">
                    </a>
                </div>
            </div>
            

            <!-- Kanan: Gambar -->
            <div class="col-md-5 text-center">
                <img src="{{ asset('assets/images/profile2.jpg') }}" alt="Profile Picture" class="profile-img">
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container text-center">
        <h2 class="fw-bold text-dark">About Me</h2>
        <p class="about-text mt-3">
            Saya Aryasuta, seorang Fullstack Developer yang memiliki passion dalam dunia fullstack developer entah itu membuat web atau aplikasi. 
            Saya saat ini mahasiswa semester 4 yang menempuh pendidikan S1 di Binus Malang. Saya sangat senang menjadi mahasiswa informatika di Binus karena skills yang saya miliki sejauh ini mayoritas saya dapatkan di sana.
        </p>
        <p class="about-text">
            Di masa-masa menjelang magang ini, saya menghabiskan waktu untuk belajar melalui course-course online yang saya beli di beberapa platfrom seperti Udemy, BuildwithAngga, Codecamp, dll. Selain itu saya juga harus segera membuat portofolio yang cantik. Saya berharap bahwa kedepannya skills saya jauh lebih baik dari sekarang ini dan mendapatkan kesempatan magang di perusahaan TOP
        </p>
        <p class="about-text">
            Di waktu luang, saya senang bermain game, membaca buku/novel, menonton film/series, bermain billiard, badminton atau terkadang sekedar menongkrong di luar bersama teman-teman sembari mengerjakan tugas. 
            Saya sangat senang menghabiskan waktu luang dengan hal-hal yang sangat sukai karena sangat membantu saya mengembalikan energi yang hilang.
        </p>
    </div>
</section>

<section id="portfolio">
    <h2 class="fw-bold text-center mb-3">My Portfolio</h2>
    <div class="container">
        <div class="row">
            <!-- Card Project -->
            <div class="col-md-4 g-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/coffee-shop-landing.jpg') }}" class="card-img-top" alt="Project Screenshot">
                    <div class="card-body">
                        <h5 class="card-title">Zoom Coffee Landing Page</h5>
                        <p style="color: #00000080">Sebuah landing page untuk kedai kopi modern dengan desain elegan dan layout responsif. Menampilkan hero section, menu kopi, dan testimonial pelanggan.</p>
                        <p class="card-text">
                            <span class="badge bg-primary">HTML</span>
                            <span class="badge bg-secondary">CSS</span>
                            <span class="badge bg-warning text-dark">JavaScript</span>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Card Project -->
            <div class="col-md-4 g-4 ">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/Chair-shop.jpg') }}" class="card-img-top object-fit-cover" alt="Project Screenshot">
                    <div class="card-body">
                        <h5 class="card-title">Chair Shop Landing Page</h5>
                        <p style="color: #00000080">Website landing untuk toko kursi minimalis. Fokus pada visual produk, tampilan bersih, dan layout fleksibel untuk berbagai ukuran layar.</p>
                        <p class="card-text">
                            <span class="badge bg-primary">HTML</span>
                            <span class="badge bg-secondary">CSS</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 g-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/barber-landing.jpg') }}" class="card-img-top" alt="Project Screenshot">
                    <div class="card-body">
                        <h5 class="card-title">Barbershop Landing Page</h5>
                        <p style="color: #00000080">Halaman depan digital untuk barbershop, menampilkan layanan, portofolio potongan rambut, dan tombol reservasi langsung.</p>
                        <p class="card-text">
                            <span class="badge bg-primary">HTML</span>
                            <span class="badge bg-secondary">CSS</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 g-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/hoodies-shop.jpg') }}" class="card-img-top" alt="Project Screenshot">
                    <div class="card-body">
                        <h5 class="card-title">Hoodies Shop Landing Page</h5>
                        <p style="color: #00000080">Showcase landing page untuk toko hoodie kekinian, dengan galeri produk dan highlight fitur bahan serta promo menarik.</p>
                        <p class="card-text">
                            <span class="badge bg-primary">HTML</span>
                            <span class="badge bg-secondary">CSS</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 g-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/valorant-slider.jpg') }}" class="card-img-top" alt="Project Screenshot">
                    <div class="card-body">
                        <h5 class="card-title">Valorant Image Slider</h5>
                        <p style="color: #00000080">Slider interaktif bertema game Valorant. Dibuat untuk menampilkan gambar hero dan map dalam tampilan modern dengan animasi halus.</p>
                        <p class="card-text">
                            <span class="badge bg-primary">HTML</span>
                            <span class="badge bg-secondary">CSS</span>
                            <span class="badge bg-warning text-dark">JavaScript</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 g-4">
                <div class="card shadow-sm">
                    <img src="{{ asset('assets/images/porto-react.jpg') }}" class="card-img-top" alt="Project Screenshot">
                    <div class="card-body">
                        <h5 class="card-title">Random Quote Generator</h5>
                        <p style="color: #00000080">Aplikasi sederhana berbasis React yang menampilkan kutipan motivasi secara acak. Menggunakan API dan didesain dengan layout ringan dan estetik.</p>
                        <p class="card-text">
                            <span class="badge bg-success">React JS</span>
                            <span class="badge bg-danger">Bootstrap</span>
                            <span class="badge bg-info text-dark">API</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <section id="skills">
        <h2 class="fw-bold text-center">Skills</h2>
        <p class="text-center">Saya memiliki keterampilan dalam pengembangan web fullstack.</p>
    
        <div class="container mt-4">
            <div class="row">
                @foreach ($skills as $skill)
                    <div class="col-md-6 position-relative mb-4">
                        <div class="d-flex align-items-center">
                            <!-- Nama Skill -->
                            <span class="fw-bold text-start">{{ $skill->name }}</span>
    
                            <!-- Tombol Edit & Delete (Kecil & Sejajar) -->
                            <div class="ms-auto d-flex gap-1">
                                <a href="{{ route('skills.edit', $skill->id) }}" class="border-0 bg-transparent p-0">
                                    <img src="{{ asset('assets/icons/edit.svg') }}" alt="Edit" width="16" class="edit-btn">
                                </a>
    
                                <form action="{{ route('skills.destroy', $skill->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 bg-transparent p-0" onclick="return confirm('Hapus skill ini?')">
                                        <img src="{{ asset('assets/icons/delete.svg') }}" alt="Hapus" width="16" class="delete-btn">
                                    </button>
                                </form>
                            </div>
                        </div>
    
                        <div class="position-relative">
                            <!-- Persentase di atas bar -->
                            <span class="position-absolute fw-bold"
                                style="top: -20px; left: calc({{ $skill->percentage }}% - 12px); font-size: 14px;">
                                {{ $skill->percentage }}%
                            </span>
    
                            <!-- Progress Bar -->
                            <div class="progress" style="height: 10px;">
                                <div class="progress-bar bg-dark" role="progressbar"
                                    style="width: {{ $skill->percentage }}%;" 
                                    aria-valuenow="{{ $skill->percentage }}" 
                                    aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Tombol Create (Lebih Kecil & di Kiri Bawah) -->
            <div class="text-start mt-6 create-btn">
                <a href="{{ route('skills.create') }}" class="border-0 bg-transparent p-0">
                    <img src="{{ asset('assets/icons/create.svg') }}" alt="Tambah" width="20">
                </a>
            </div>
        </div>
    </section>      
    
    <section id="contact" class="text-center">
        <h2 class="fw-bold">Contact Me</h2>
        <p class="text-muted">Hubungi saya melalui form di bawah ini.</p>
    
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form id="contactForm">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="nama" placeholder="Nama" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" id="pesan" rows="4" placeholder="Pesan" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.getElementById('contactForm').addEventListener('submit', function (e) {
            e.preventDefault();
        
            const nama = document.getElementById('nama').value;
            const email = document.getElementById('email').value;
            const pesan = document.getElementById('pesan').value;
        
            const nomorTujuan = '6282122610336'; // Ganti dengan nomor WA kamu (pakai kode negara, tanpa +)
            const message = `Halo, saya *${nama}* ,Email: ${email} ,${pesan}`;
        
            const waLink = `https://wa.me/${nomorTujuan}?text=${encodeURIComponent(message)}`;
            window.open(waLink, '_blank');
        });
        </script>
        

    <footer class="text-center text-white py-3" style="background-color: #222;">
        <p style="transform: translateY(5px)">&copy; 2025 Aryasuta. All Rights Reserved.</p>
    </footer> 
@endsection
