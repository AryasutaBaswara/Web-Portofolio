<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            font-family: 'Poppins', sans-serif;
        }
        .sidebar {
            width: 250px;
            height: 100vh;
            background: #1c1c1c;
            color: white;
            position: fixed;
            padding: 20px;
            text-align: center;
        }

        .sidebar h4{
            font-size: 1rem;
            margin-bottom: 30px;
        }

        .sidebar a {
            display: flex;
            justify-content: flex-start;
            transform: translateY(4.8rem);
            color: white;
            text-decoration: none;
            padding: 12px;
            margin: 8px 0; /* Jarak antar menu */
            border-radius: 5px; /* Biar lebih smooth */
            transition: 0.3s ease-in-out;
        }
        .sidebar a:hover {
            background: #f1c40f;
            color: black;
        }

        .menu-icon {
            width: 18px; /* Sesuaikan ukuran */
            height: 18px;
            margin-right: 10px; /* Biar ada jarak dengan teks */
            margin-top: 2px;
            filter: invert(1); /* Ubah warna jadi putih */
        }

        .content {
            margin-left: 250px;
            padding: 0;
            width: 100%;    
        }
        section {
            padding: 100px 20px;
            min-height: 85vh;
        }
        /* home section */
        #home {
    min-height: 100vh;
    display: flex;
    align-items: center;
    color: black;
    background: #f8f9fa;
}

.profile-img {
    width: 300px;
    height: 380px;
    object-fit: cover;
    border-radius: 10px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3); /* Shadow dari awal */
    transition: transform 0.3s ease-in-out;
}

.profile-img:hover {
    transform: scale(1.05);
}
.hello-text {
    color: #333; /* Abu-abu gelap */
    font-weight: 300;
}

.name-text {
    color: #000; /* Hitam */
    font-weight: 700;
}

.fullstack-text {
    font-size: 1.8rem;
    font-weight: 700;
    position: relative;
    display: inline-block;
    overflow: hidden;
}

.fullstack-text::after {
    content: "";
    display: block;
    width: 80px;
    height: 2px;
    background: #000; /* Garis bawah warna hitam */
    margin-top: 5px;
    transition: transform 1s ease-in-out;
}

.fullstack-text:hover::after {
    transform: translateX(13rem); /* Geser ke kanan */
}

.description {
    font-size: 1rem;
    color: #666; /* Abu-abu agar tidak terlalu kontras */
    font-weight: 400;
    max-width: 400px;
}
.icon {
    width: 35px;
    height: 35px;
    margin-right: 10px;
    transition: transform 0.2s ease-in-out;
}

.icon:hover {
    transform: scale(1.1);
}

/* about section */
#about {
    padding-top: 10rem;
    padding-bottom: 10rem;
}

.about-text {
    max-width: 700px; /* Biar paragrafnya nggak terlalu melebar */
    margin: 0 auto;
    font-size: 1rem;
    color: #666;
    line-height: 1.6;
}
/* Porto section */

#portfolio {
    padding: 10rem 5rem;
    background: #f8f9fa;
}
.card {
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s ease-in-out;
    height: 100%; /* Supaya card seragam */
    display: flex;
    flex-direction: column;
    margin-bottom: 1rem; console.log('Sidebar links clicked');
}
.card:hover {
    transform: scale(1.05);
}
.card-img-top {
    height: 250px;
    width: 100%;
    object-fit: cover;
}

/* section skills */
#skills{
    padding: 10rem 5rem;
}

.progress-bar {
    transition: width 1.5s ease-in-out;
}

.create-btn {
    width: 30px; 
    height: 30px; 
    background-color: black; 
    border-radius: 50%; /* Biar lingkaran */
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.3s ease-in-out;
}

.create-btn img {
    width: 15px; 
    height: 12px; 
    transform: translateY(-1px);
    filter: invert(1); /* Ubah icon jadi putih */
}

.create-btn:hover {
    background-color: #333; /* Warna sedikit lebih terang saat hover */
    transform: scale(1.3); /* Sedikit membesar */
}

.edit-btn, .delete-btn{
    transition: 0.3s ease-in-out;
}

.edit-btn:hover, .delete-btn:hover{
    transform: scale(1.1);
}

#contact {
    margin-bottom: 0;
    padding: 8rem 0 5rem 0;
    background: #f8f9fa;
}

footer {
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #222;
    color: white;
    text-align: center;
    padding: 15px 0;
}


    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <img src="{{ asset('assets/images/profile2.jpg') }}" alt="Profile" style="            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white;"
        >
        <h4 class="mt-4">Aryasuta Baswara</h4>
        <hr style="margin-top: -1rem">
        <a href="#home">
            <img src="{{ asset('assets/icons/home.svg') }}" class="menu-icon" alt="Home"> Home
        </a>
        <a href="#about">
            <img src="{{ asset('assets/icons/about.svg') }}" class="menu-icon" alt="About"> About
        </a>
        <a href="#portfolio">
            <img src="{{ asset('assets/icons/portofolio.svg') }}" class="menu-icon" alt="Portfolio"> Portfolio
        </a>
        <a href="#skills">
            <img src="{{ asset('assets/icons/skills.svg') }}" class="menu-icon" alt="Skills"> Skills
        </a>
        <a href="#contact">
            <img src="{{ asset('assets/icons/contact.svg') }}" class="menu-icon" alt="Contact" style="transform: translateY(2px);"> Contact
        </a>        
    </div>

    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>

    <script>
        document.querySelectorAll('.sidebar a').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                document.getElementById(targetId).scrollIntoView({ behavior: 'smooth' });
            });
        });
    </script>
</body>
</html>
