<?php
// index.php (letakkan ke project root)
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoVolunteer - Relawan Lingkungan Hidup</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- external css -->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body class="min-h-screen flex flex-col">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ad6273b6-4abb-47cf-bafc-7f61f6ef74f5.png" alt="Logo EcoVolunteer berupa daun hijau dengan tulisan EV di tengah" class="h-8 w-8">
                        <span class="ml-2 text-xl font-semibold text-gray-800">EcoVolunteer</span>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="#" class="text-gray-800 hover:text-green-700 px-3 py-2 rounded-md text-sm font-medium">Beranda</a>
                        <a href="#aktivitas" class="text-gray-800 hover:text-green-700 px-3 py-2 rounded-md text-sm font-medium">Aktivitas</a>
                        <a href="#edukasi" class="text-gray-800 hover:text-green-700 px-3 py-2 rounded-md text-sm font-medium">Edukasi</a>
                        <a href="#tentang" class="text-gray-800 hover:text-green-700 px-3 py-2 rounded-md text-sm font-medium">Tentang Kami</a>
                    </div>
                </div>
                <div class="hidden md:block">
                    <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-300" onclick="showAuthModal('login')">
                        Masuk/Daftar
                    </button>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <button id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-800 hover:text-green-700 focus:outline-none">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-200">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#" class="text-gray-800 hover:text-green-700 block px-3 py-2 rounded-md text-base font-medium">Beranda</a>
                <a href="#aktivitas" class="text-gray-800 hover:text-green-700 block px-3 py-2 rounded-md text-base font-medium">Aktivitas</a>
                <a href="#edukasi" class="text-gray-800 hover:text-green-700 block px-3 py-2 rounded-md text-base font-medium">Edukasi</a>
                <a href="#tentang" class="text-gray-800 hover:text-green-700 block px-3 py-2 rounded-md text-base font-medium">Tentang Kami</a>
                <button class="w-full bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm font-medium mt-2 transition duration-300" onclick="showAuthModal('login')">
                    Masuk/Daftar
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-green-50 to-cyan-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="lg:w-1/2 mb-8 lg:mb-0">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">Lestarikan Bumi Bersama Relawan Lingkungan</h1>
                    <p class="text-lg text-gray-600 mb+6">Bergabung dengan 15.000+ relawan aktif dalam aksi nyata penanaman pohon, bersih pantai, dan edukasi lingkungan.</p>
                    <div class="mt-8 flex flex-col sm:flex-row gap-4">
                        <button class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">Cari Aktivitas</button>
                        <button class="border border-green-600 text-green-600 hover:bg-green-50 px-6 py-3 rounded-lg font-medium transition duration-300">Pelajari Edukasi</button>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/4877249a-1a0e-49ff-91e8-2230e86d5d6d.png" alt="Suasana kegiatan relawan EcoVolunteer sedang bekerja sama membersihkan area pantai dari sampah plastik" class="rounded-lg shadow-xl w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="stats-card bg-green-50 p-6 rounded-lg shadow-sm text-center">
                    <h3 class="text-4xl font-bold text-green-600 mb-2">15.678+</h3>
                    <p class="text-gray-600">Relawan Terdaftar</p>
                </div>
                <div class="stats-card bg-green-50 p-6 rounded-lg shadow-sm text-center">
                    <h3 class="text-4xl font-bold text-green-600 mb-2">2.456+</h3>
                    <p class="text-gray-600">Aktivitas Lingkungan</p>
                </div>
                <div class="stats-card bg-green-50 p-6 rounded-lg shadow-sm text-center">
                    <h3 class="text-4xl font-bold text-green-600 mb-2">1.924+</h3>
                    <p class="text-gray-600">Pohon Tertanam</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Aktivitas Section -->
    <section id="aktivitas" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Aktivitas Terbaru</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Temukan berbagai kegiatan lingkungan yang bisa Anda ikuti untuk berkontribusi.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Aktivitas Card 1 -->
                <div class="volunteer-card bg-white rounded-lg shadow-md overflow-hidden transition duration-300">
                    <div class="relative">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/546465dd-0d93-4a2e-8f48-a89705902e4c.png" alt="Aksi penanaman pohon mangrove oleh relawan EcoVolunteer di pesisir pantai untuk mencegah abrasi" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-green-600 text-white px-2 py-1 text-xs font-medium rounded">
                            Segera
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Gerakan Jakarta Hijau: Tanam 1000 Pohon</h3>
                        <p class="text-gray-600 text-sm mb-4">Minggu, 5 Juni 2023 | 5 Lokasi di Jakarta</p>
                        <p class="text-gray-700 mb-4">Mari ikut serta dalam aksi penanaman pohon produktif di 5 titik vital Jakarta untuk meningkatkan kualitas udara dan resapan air.</p>
                        <button class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-md text-sm font-medium transition duration-300" onclick="showRegistrationForm('Gerakan Jakarta Hijau')">
                            Daftar Sekarang
                        </button>
                    </div>
                </div>
                
                <!-- Aktivitas Card 2 -->
                <div class="volunteer-card bg-white rounded-lg shadow-md overflow-hidden transition duration-300">
                    <div class="relative">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9f009773-e26d-4c1b-a40e-4fac56d80e7d.png" alt="Kegiatan bersih-bersih pantai dengan relawan sedang memungut sampah plastik" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-green-600 text-white px-2 py-1 text-xs font-medium rounded">
                            Berjalan
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Bersih-bersih Pantai Ancol</h3>
                        <p class="text-gray-600 text-sm mb-4">Sabtu-Minggu, 20-21 Mei 2023 | Jakarta Utara</p>
                        <p class="text-gray-700 mb-4">Aksi bersih pantai untuk mengurangi sampah plastik yang mencemari ekosistem laut.</p>
                        <button class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-md text-sm font-medium transition duration-300" onclick="showActivityDetails('Bersih-bersih Pantai Ancol')">
                            Pelajari Lebih Lanjut
                        </button>
                    </div>
                </div>
                
                <!-- Aktivitas Card 3 -->
                <div class="volunteer-card bg-white rounded-lg shadow-md overflow-hidden transition duration-300">
                    <div class="relative">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/c87df4ae-5d11-437c-a1ea-16e59ae1494a.png" alt="Workshop daur ulang dengan peserta sedang membuat kerajinan dari bahan bekas" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-green-600 text-white px-2 py-1 text-xs font-medium rounded">
                            Berjalan
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-900 mb-2">Workshop Daur Ulang Sampah Plastik</h3>
                        <p class="text-gray-600 text-sm mb-4">Setiap Sabtu | Online</p>
                        <p class="text-gray-700 mb-4">Pelajari cara mendaur ulang sampah plastik menjadi barang berguna dalam workshop mingguan kami.</p>
                        <button class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-md text-sm font-medium transition duration-300" onclick="showActivityDetails('Workshop Daur Ulang Sampah Plastik')">
                            Pelajari Lebih Lanjut
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-10">
                <button class="border border-green-600 text-green-600 hover:bg-green-50 px-6 py-3 rounded-lg font-medium transition duration-300">
                    Lihat Semua Aktivitas
                </button>
            </div>
        </div>
    </section>

    <!-- Edukasi Section -->
    <section id="edukasi" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Materi Edukasi Lingkungan</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Tingkatkan pengetahuan Anda tentang isu-isu lingkungan dan solusinya.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Edukasi Card 1 -->
                <div class="bg-green-50 rounded-lg overflow-hidden shadow-sm transition duration-300 hover:shadow-md">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/c0a5de65-5e62-4202-8ea0-acdeeac1da0d.png" alt="Infografis dampak perubahan iklim dan solusi sederhana yang bisa dilakukan individu" class="w-full h-40 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg text-gray-900 mb-2">Panduan Praktis Hadapi Perubahan Iklim</h3>
                        <p class="text-gray-600 text-sm mb-4">Panduan Lengkap</p>
                        <button class="text-green-600 hover:text-green-700 text-sm font-medium flex items-center">
                            Baca Artikel
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Edukasi Card 2 -->
                <div class="bg-green-50 rounded-lg overflow-hidden shadow-sm transition duration-300 hover:shadow-md">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ac0a944d-9f70-46ac-b1bb-0a77ec0925ff.png" alt="Diagram proses daur ulang sampah plastik menjadi produk baru" class="w-full h-40 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg text-gray-900 mb-2">Panduan Daur Ulang di Rumah</h3>
                        <p class="text-gray-600 text-sm mb-4">Panduan</p>
                        <button class="text-green-600 hover:text-green-700 text-sm font-medium flex items-center">
                            Baca Panduan
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Edukasi Card 3 -->
                <div class="bg-green-50 rounded-lg overflow-hidden shadow-sm transition duration-300 hover:shadow-md">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/f32872d6-d933-4597-87d9-0d0ebd23a428.png" alt="Panel surya di pedesaan dengan pemandangan hijau di latar belakang" class="w-full h-40 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg text-gray-900 mb-2">Energi Terbarukan untuk Pemula</h3>
                        <p class="text-gray-600 text-sm mb-4">Video</p>
                        <button class="text-green-600 hover:text-green-700 text-sm font-medium flex items-center">
                            Tonton Video
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Edukasi Card 4 -->
                <div class="bg-green-50 rounded-lg overflow-hidden shadow-sm transition duration-300 hover:shadow-md">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ab908899-6909-449e-8059-bccefb7e1167.png" alt="Petani sedang merawat tanaman organik di kebun" class="w-full h-40 object-cover">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg text-gray-900 mb-2">Dasar-dasar Pertanian Organik</h3>
                        <p class="text-gray-600 text-sm mb-4">E-book</p>
                        <button class="text-green-600 hover:text-green-700 text-sm font-medium flex items-center">
                            Unduh E-book
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-10">
                <button class="border border-green-600 text-green-600 hover:bg-green-50 px-6 py-3 rounded-lg font-medium transition duration-300">
                    Jelajahi Semua Materi
                </button>
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section id="tentang" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:flex lg:items-center lg:gap-12">
                <div class="lg:w-1/2 mb-8 lg:mb-0">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Tentang EcoVolunteer</h2>
                    <p class="text-lg text-gray-600 mb-6">EcoVolunteer adalah platform yang menghubungkan individu yang peduli lingkungan dengan berbagai kegiatan dan program pelestarian lingkungan.</p>
                    <p class="text-gray-700 mb-6">Kami percaya bahwa setiap tindakan kecil untuk lingkungan dapat menciptakan perubahan besar jika dilakukan bersama-sama. Bergabunglah dengan komunitas kami yang terdiri dari ribuan relawan dari berbagai latar belakang.</p>
                    <button class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
                        Pelajari Tentang Kami
                    </button>
                </div>
                <div class="lg:w-1/2">
                    <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/d6b97cf5-0571-4807-892b-681f70ebda63.png" alt="Foto tim inti EcoVolunteer beserta relawan aktif dalam kegiatan tahunan penanaman pohon" class="rounded-lg shadow-xl w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Apa Kata Relawan Kami</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Berikut pengalaman relawan yang telah bergabung dengan EcoVolunteer</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Testimoni 1 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/26ef5373-2a45-496c-81d9-e7c89f218e5b.png" alt="Foto Andi Prasetyo, relawan aktif sejak 2021" class="w-12 h-12 rounded-full object-cover">
                        <div class="ml-4">
                            <h4 class="font-medium text-gray-900">Andi Pratama</h4>
                            <p class="text-sm text-gray-600">Relawan sejak 2021</p>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">"Bergabung dengan EcoVolunteer memberi saya kesempatan untuk berkontribusi langsung pada pelestarian lingkungan. Kegiatan yang diadakan sangat bermakna dan terorganisir dengan baik."</p>
                </div>
                
                <!-- Testimoni 2 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/85a4ea0a-43ba-4d05-8dd4-da63b3c22776.png" alt="Foto profil peserta bernama Siti dengan latar belakang hijau" class="w-12 h-12 rounded-full object-cover">
                        <div class="ml-4">
                            <h4 class="font-medium text-gray-900">Siti Rahayu</h4>
                            <p class="text-sm text-gray-600">Relawan sejak 2020</p>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">"Edukasi yang diberikan sangat membantu saya memahami isu lingkungan dengan lebih mendalam. Sekarang saya bisa menerapkan gaya hidup ramah lingkungan sehari-hari."</p>
                </div>
                
                <!-- Testimoni 3 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/fe26aadf-07da-4ade-9920-a1baaeb78cad.png" alt="Foto profil peserta bernama Budi dengan latar belakang hijau" class="w-12 h-12 rounded-full object-cover">
                        <div class="ml-4">
                            <h4 class="font-medium text-gray-900">Budi Santoso</h4>
                            <p class="text-sm text-gray-600">Relawan sejak 2022</p>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">"Melalui EcoVolunteer, saya menemukan komunitas yang memiliki visi sama untuk melindungi bumi. Aktivitasnya beragam dan selalu menyenangkan untuk diikuti."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 bg-green-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="lg:w-1/2 mb-8 lg:mb-0">
                    <h2 class="text-3xl font-bold mb-4">Dapatkan Update Terbaru</h2>
                    <p class="text-lg">Berlangganan newsletter kami untuk mendapatkan informasi terbaru tentang aktivitas, edukasi, dan event lingkungan.</p>
                </div>
                <div class="lg:w-1/2">
                    <form id="newsletter-form" class="flex flex-col sm:flex-row gap-4">
                        <input type="email" id="newsletter-email" placeholder="Alamat email Anda" class="flex-grow px-4 py-3 rounded-lg focus:outline-none text-gray-900" required>
                        <button type="submit" class="bg-white text-green-600 hover:bg-gray-100 px-6 py-3 rounded-lg font-medium transition duration-300">
                            Berlangganan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">EcoVolunteer</h3>
                    <p class="text-gray-400">Platform relawan lingkungan hidup untuk menciptakan bumi yang lebih hijau dan berkelanjutan.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Navigasi</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Beranda</a></li>
                        <li><a href="#aktivitas" class="text-gray-400 hover:text-white transition">Aktivitas</a></li>
                        <li><a href="#edukasi" class="text-gray-400 hover:text-white transition">Edukasi</a></li>
                        <li><a href="#tentang" class="text-gray-400 hover:text-white transition">Tentang Kami</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Dukungan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Kebijakan Privasi</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Syarat & Ketentuan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Hubungi Kami</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Media Sosial</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition">[...]</a>
                        <a href="#" class="text-gray-400 hover:text-white transition">[...]</a>
                        <a href="#" class="text-gray-400 hover:text-white transition">[...]</a>
                        <a href="#" class="text-gray-400 hover:text-white transition">[...]</a>
                    </div>
                </div>
            </div>
            <div class="mt-12 pt-8 border-t border-gray-800 text-center">
                <p class="text-gray-400">© copyright. 23552011014_raihanMF_23CNSA.</p>
            </div>
        </div>
    </footer>

    <!-- Auth Modal - Login/Signup -->
    <div id="auth-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg p-6 max-w-md w-full">
            <div class="flex justify-between items-center mb-6">
                <div class="flex space-x-4">
                    <button id="login-tab" class="font-medium text-lg border-b-2 border-green-600 text-green-600">Masuk</button>
                    <button id="signup-tab" class="font-medium text-lg border-b-2 border-transparent text-gray-500">Daftar</button>
                </div>
                <button onclick="closeAuthModal()" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

    <!-- Login Form -->
    <form id="login-form" class="space-y-4">
      <div>
        <label>Email</label>
        <input type="email" id="login-email" class="w-full border p-2 rounded" />
      </div>
      <div>
        <label>Password</label>
        <input type="password" id="login-password" class="w-full border p-2 rounded" />
      </div>
      <button type="submit" class="w-full bg-green-600 text-white py-2 rounded">Masuk</button>
    </form>

 <!-- Signup Form -->
    <form id="signup-form" class="space-y-4 hidden">
      <div>
        <label>Email</label>
        <input type="email" id="signup-email" class="w-full border p-2 rounded" />
      </div>
      <div>
        <label>Password</label>
        <input type="password" id="signup-password" class="w-full border p-2 rounded" />
      </div>
      <button type="submit" class="w-full bg-green-600 text-white py-2 rounded">Daftar</button>
    </form>
  </div>


    <!-- Registration Form Modal -->
    <div id="registration-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg p-6 max-w-md w-full">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold" id="modal-title">Form Pendaftaran</h3>
                <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <form id="registration-form" class="space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                    <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                </div>
                <div>
                    <label for="emailReg" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="emailReg" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                    <input type="tel" id="phone" name="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500">
                </div>
                <div>
                    <label for="address" class="block text-sm font-medium text-gray-700">Alamat</label>
                    <textarea id="address" name="address" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500"></textarea>
                </div>
                <input type="hidden" id="eventName" name="eventName" value="">
                <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-md font-medium transition duration-300">
                    Daftar Sekarang
                </button>
            </form>
        </div>
    </div>

    <!-- Activity Details Modal -->
    <div id="activity-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg p-6 max-w-2xl w-full">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-xl font-semibold" id="activity-title">Detail Kegiatan</h3>
                <button onclick="closeActivityModal()" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="space-y-4">
                <img id="activity-image" src="" alt="Kegiatan" class="w-full h-48 object-cover rounded-lg" src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/9a86fb5a-43de-4a1e-9f7a-2b2602829833.png">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="font-medium text-gray-700">Tanggal:</p>
                        <p id="activity-date" class="text-gray-600"></p>
                    </div>
                    <div>
                        <p class="font-medium text-gray-700">Lokasi:</p>
                        <p id="activity-location" class="text-gray-600"></p>
                    </div>
                </div>
                <div>
                    <p class="font-medium text-gray-700">Deskripsi Kegiatan:</p>
                    <p id="activity-description" class="text-gray-600"></p>
                </div>
                <button class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-md font-medium transition duration-300 mt-4" onclick="showRegistrationForm(document.getElementById('activity-title').textContent.replace('Detail Kegiatan - ',''))">
                    Daftar Sekarang
                </button>
            </div>
        </div>
    </div>

    <!-- external js -->
    <script src="assets/js/script.js"></script>
</body>
</html>
