<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tudung Saji</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-beige font-sans bg-[#ECE7D4]" style="font-family: 'Inter', sans-serif;">
  <!-- Navbar -->
  <nav class="bg-orange-200 p-4 flex justify-between items-center">
  <div class="flex items-center space-x-4">
    <img src="logo.png" alt="Tudung Saji" class="h-[7vh] w-[6vw] ">
  </div>
  
  <div class="flex space-x-6">
  <a href="/dashboard" class="text-black font-semibold hover:text-orange-600 hover:underline underline-offset-4 transition-all duration-200">Beranda</a>
  <a href="/resepmasakan" class="text-black font-medium hover:text-orange-600 hover:underline underline-offset-4 transition-all duration-200">Resep Masakan</a>
  <a href="/tipsmasak" class="text-black font-medium hover:text-orange-600 hover:underline underline-offset-4 transition-all duration-200">Tips Masak</a>
  <a href="/favorit" class="text-black font-medium hover:text-orange-600 hover:underline underline-offset-4 transition-all duration-200">Favorit</a>
</div>

  <!-- profile -->
<div class="flex items-center space-x-2">
  <a href="/profil" class="font-medium hover:underline hover:text-orange-600 transition">Raysha Tazkiya Rahim</a>
  <div class="w-8 h-8 bg-orange-400 rounded-full flex items-center justify-center text-white font-bold">R</div>
</div>

</nav>


<!-- Hero Section -->
<section class="relative bg-cover bg-center h-72" style="background-image: url('cover.png');">
  <div class="relative z-10 h-full flex flex-col justify-center items-center text-center px-6 bg-gradient-to-r from-white/70 via-white/50 to-transparent">
    <!-- Search bar -->
    <div class="w-full max-w-2xl mx-auto">
      <div class="flex items-center bg-white rounded-full shadow px-4 py-2">
        <!-- Button Kategori -->
        <button class="flex items-center bg-orange-500 text-white px-4 py-2 rounded-full">
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 104.5 4.5a7.5 7.5 0 0012.15 12.15z" />
          </svg>
          <span class="text-sm font-medium">Kategori</span>
          <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>

        <!-- Garis Pemisah -->
        <div class="w-px h-6 bg-gray-300 mx-3"></div>

        <!-- Input -->
        <div class="flex items-center flex-grow">
          <input type="text" placeholder="Temukan di Resep kami"
            class="flex-grow text-sm text-gray-700 placeholder-gray-400 focus:outline-none" />
          <svg class="w-5 h-5 text-orange-500 ml-2" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
              d="M4 3h1v7a2 2 0 004 0V3h1v7a2 2 0 004 0V3h1v9a4 4 0 01-4 4v5m-4-5a4 4 0 01-4-4V3z" />
          </svg>
        </div>
      </div>
    </div>

    <!-- Tombol di bawah search bar -->
    <div class="flex space-x-4 mt-6">
  <a href="/tambahresep" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded text-sm text-center">
    Tambah Resep
  </a>
  <a href="#" class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded text-sm text-center">
    Penilaian & Komentar
  </a>
</div>


  </div>
</section>

<!-- Kategori -->
<section class="p-6">
  <h3 class="text-xl font-semibold mb-4">Apa yang kamu cari?</h3>
  <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
    
    <!-- Kategori: Bumbu -->
    <a href="https://kumparan.com/berita-terkini/40-macam-bumbu-dapur-dan-fungsinya-23psys3Ak0Y" class="block transform transition-all duration-300 hover:shadow-lg active:scale-95">
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <img src="3.png" alt="Bumbu" class="w-full h-52 object-cover">
        <div class="p-3 bg-orange-400 text-white text-center font-semibold hover:bg-orange-600 transition duration-300">
          Jenis-jenis Bumbu
        </div>
      </div>
    </a>

    <!-- Kategori: Alat Masak -->
    <a href="#" class="block transform transition-all duration-300 hover:shadow-lg active:scale-95">
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <img src="image.png" alt="Alat Masak" class="w-full h-52 object-cover">
        <div class="p-3 bg-orange-400 text-white text-center font-semibold hover:bg-orange-600 transition duration-300">
          Alat Masak
        </div>
      </div>
    </a>

    <!-- Kategori: Gizi -->
    <a href="#" class="block transform transition-all duration-300 hover:shadow-lg active:scale-95">
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <img src="gizi.png" alt="Kandungan Gizi" class="w-full h-52 object-cover">
        <div class="p-3 bg-orange-400 text-white text-center font-semibold hover:bg-orange-600 transition duration-300">
          Jenis Kandungan Gizi
        </div>
      </div>
    </a>

    <!-- Kategori: Daging -->
    <a href="#" class="block transform transition-all duration-300 hover:shadow-lg active:scale-95">
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <img src="daging.png" alt="Daging" class="w-full h-52 object-cover">
        <div class="p-3 bg-orange-400 text-white text-center font-semibold hover:bg-orange-600 transition duration-300">
          Jenis Daging
        </div>
      </div>
    </a>

  </div>
</section>



<!-- Resep Terkini -->
<section class="p-6">
  <h3 class="text-xl font-semibold mb-2">Resep Tersimpan</h3>
  <p class="mb-4">Ayo Masak!</p>
  <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
    
    <!-- Card Resep -->
    <a href="/resepspaghetti" class="transform hover:scale-105 transition duration-300">
      <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
        <img src="res1.png" alt="Spaghetti" class="w-full h-52 object-cover">
        <div class="p-4 space-y-1">
          <h4 class="font-bold text-base">Resep Spaghetti Bolognese Simple</h4>
          <p class="text-sm text-gray-500">Oleh Nurul Izzati</p>
        </div>
      </div>
    </a>

    <a href="#" class="transform hover:scale-105 transition duration-300">
      <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
        <img src="res2.png" alt="Sate" class="w-full h-52 object-cover">
        <div class="p-4 space-y-1">
          <h4 class="font-bold text-base">Resep Sate Malang Daging Sapi</h4>
          <p class="text-sm text-gray-500">Oleh Dian Islami</p>
        </div>
      </div>
    </a>

    <a href="#" class="transform hover:scale-105 transition duration-300">
      <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
        <img src="res3.png" alt="Es Doger" class="w-full h-52 object-cover">
        <div class="p-4 space-y-1">
          <h4 class="font-bold text-base">Resep Es Doger Super Nyegerin</h4>
          <p class="text-sm text-gray-500">Oleh Akrimah Usri</p>
        </div>
      </div>
    </a>

    <a href="#" class="transform hover:scale-105 transition duration-300">
      <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
        <img src="res4.png" alt="Bakso" class="w-full h-52 object-cover">
        <div class="p-4 space-y-1">
          <h4 class="font-bold text-base">Resep Bakso Daging Kenyal</h4>
          <p class="text-sm text-gray-500">Oleh Davina Aura</p>
        </div>
      </div>
    </a>

  </div>
</section>



  <!-- Footer -->
  <footer class="bg-[#f2e9db] border-t border-gray-300 pt-10 pb-6 relative overflow-hidden">
  <!-- Background Kiri dan Kanan -->
  <img src="rempahfoter1.png" alt="Spices Left" class="absolute left-0 bottom-0 h-full object-cover opacity-80 hidden md:block" />
  <img src="rempatfot2.png" alt="Spices Right" class="absolute right-0 bottom-0 h-full object-cover opacity-80 hidden md:block" />

  <div class="relative z-10 container mx-auto px-4 flex flex-col items-center text-center text-black space-y-6">

    <!-- Semua kolom dibungkus agar sejajar & tengah -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">

      <!-- Menu -->
      <div>
        <h3 class="font-bold mb-2">Menu</h3>
        <ul class="space-y-1">
          <li><a href="#" class="hover:underline">Beranda</a></li>
          <li><a href="/tips" class="hover:underline">Tips Masak</a></li>
          <li><a href="#" class="hover:underline">Tentang Kita</a></li>
          <li><a href="#" class="hover:underline">Favorit</a></li>
          <li><a href="#" class="hover:underline">Resep</a></li>
        </ul>
      </div>

      <!-- Kontak -->
      <div>
        <h3 class="font-bold mb-2">Kontak</h3>
        <ul class="space-y-1">
          <li><a href="#" class="hover:underline">Tentang Kami</a></li>
          <li><a href="#" class="hover:underline">Chat Langsung</a></li>
        </ul>
      </div>

      <!-- Hubungi Kami -->
      <div>
        <h3 class="font-bold mb-2">Hubungi Kami</h3>
        <div class="flex justify-center space-x-4 mt-2">
          <!-- Instagram -->
          <a href="#" class="hover:scale-110 transition">
            <svg fill="url(#igGradient)" viewBox="0 0 24 24" class="w-8 h-8">
              <defs>
                <linearGradient id="igGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                  <stop offset="0%" stop-color="#feda75" />
                  <stop offset="50%" stop-color="#d62976" />
                  <stop offset="100%" stop-color="#4f5bd5" />
                </linearGradient>
              </defs>
              <path d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2a3 3 0 013 3v10a3 3 0 01-3 3H7a3 3 0 01-3-3V7a3 3 0 013-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-1.25a1.25 1.25 0 11-2.5 0 1.25 1.25 0 012.5 0z"/>
            </svg>
          </a>

          <!-- YouTube -->
          <a href="#" class="hover:scale-110 transition">
            <svg fill="#FF0000" viewBox="0 0 24 24" class="w-8 h-8">
              <path d="M23.498 6.186a2.898 2.898 0 00-2.04-2.04C19.768 3.5 12 3.5 12 3.5s-7.768 0-9.458.646a2.898 2.898 0 00-2.04 2.04A30.187 30.187 0 000 12a30.187 30.187 0 00.502 5.814 2.898 2.898 0 002.04 2.04C4.232 20.5 12 20.5 12 20.5s7.768 0 9.458-.646a2.898 2.898 0 002.04-2.04A30.187 30.187 0 0024 12a30.187 30.187 0 00-.502-5.814zM9.75 15.02V8.98L15.5 12l-5.75 3.02z"/>
            </svg>
          </a>

          <!-- WhatsApp -->
          <a href="#" class="hover:scale-110 transition">
            <svg fill="#25D366" viewBox="0 0 24 24" class="w-8 h-8">
              <path d="M.057 24l1.687-6.163a11.867 11.867 0 01-1.62-6.003C.122 5.312 5.388 0 12.061 0c3.179 0 6.167 1.237 8.413 3.488a11.78 11.78 0 013.48 8.404c-.003 6.673-5.376 12.093-12.05 12.093a12.42 12.42 0 01-5.594-1.357L.057 24zM6.403 20.388c1.676.995 3.276 1.591 5.658 1.592 5.448 0 9.89-4.442 9.894-9.89.002-2.636-1.026-5.112-2.891-6.974C16.2 2.255 13.793 1.229 11.067 1.229 5.614 1.229 1.175 5.671 1.172 11.121c0 2.024.538 3.624 1.527 5.3l-.999 3.662 3.703-.995zm11.387-5.465c-.176-.088-1.037-.512-1.198-.57-.161-.059-.278-.088-.395.088-.117.176-.454.57-.557.688-.102.117-.205.132-.38.044-.176-.088-.743-.274-1.416-.873a5.36 5.36 0 01-.995-1.17c-.102-.176-.011-.271.077-.359.079-.078.176-.205.264-.308.088-.103.117-.176.176-.293.058-.117.029-.22-.015-.308-.044-.088-.395-.95-.54-1.3-.141-.34-.285-.293-.395-.293h-.338c-.117 0-.308.044-.47.22-.161.176-.617.603-.617 1.465s.633 1.7.72 1.818c.088.117 1.24 1.89 3.003 2.646.42.181.748.288 1.003.37.42.133.802.114 1.104.069.337-.05 1.037-.423 1.183-.832.146-.41.146-.762.103-.832-.044-.07-.161-.117-.338-.205z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>

    <!-- Copyright -->
    <div class="text-sm text-black font-medium pt-4">
      @2025 Tudung <span class="text-orange-500 font-semibold">Saji</span> All Rights Reserved
    </div>
  </div>
</footer>

</html>
