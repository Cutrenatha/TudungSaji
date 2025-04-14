<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Favorit - Tudung Saji</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-white text-black">

  <!-- Header -->
  <header class="bg-[#F3C180] px-6 py-4 flex justify-between items-center">
    <div class="flex items-center gap-2">
      <img src="https://i.imgur.com/8KMzXyo.png" alt="Logo" class="h-8"> <!-- Placeholder logo -->
      <span class="font-bold text-lg">TUDUNG SAJI</span>
    </div>
    <div class="flex items-center gap-2">
      <span class="font-medium">Raysha Tazkiya Rahim</span>
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
      </svg>
    </div>
  </header>

  <!-- Breadcrumb -->
  <div class="px-6 py-4 text-sm text-gray-600">
    <a href="#" class="hover:underline">&lt; Beranda</a> &nbsp; &lt; <span class="text-black font-semibold">Favorit</span>
  </div>

  <!-- Judul Halaman -->
  <h1 class="text-center text-2xl font-bold mb-6">Favorit</h1>

  <!-- Grid Resep Favorit -->
  <div class="px-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    <!-- Card Resep -->
    <div class="bg-[#FFF7EC] rounded-xl shadow p-3">
      <img src="https://i.imgur.com/I8qzM6M.jpg" alt="Spaghetti" class="rounded-lg w-full h-40 object-cover">
      <div class="mt-3 font-semibold">Resep Spaghetti Bolognese Simple <span class="text-red-500">❤️</span></div>
      <p class="text-sm text-gray-600">Oleh Nurul Izzati</p>
    </div>

    <!-- Duplikat card lainnya -->
    <div class="bg-[#FFF7EC] rounded-xl shadow p-3">
      <img src="https://i.imgur.com/vmLmrZI.jpg" alt="Sate" class="rounded-lg w-full h-40 object-cover">
      <div class="mt-3 font-semibold">Resep Sate Malang Daging Sapi Empuk dan Kaya Bumbu <span class="text-red-500">❤️</span></div>
      <p class="text-sm text-gray-600">Oleh Dian Islami</p>
    </div>

    <div class="bg-[#FFF7EC] rounded-xl shadow p-3">
      <img src="https://i.imgur.com/CfGcN4f.jpg" alt="Es Doger" class="rounded-lg w-full h-40 object-cover">
      <div class="mt-3 font-semibold">Resep Es Doger Super Nyegerin <span class="text-red-500">❤️</span></div>
      <p class="text-sm text-gray-600">Oleh Akrimah Usri</p>
    </div>

    <div class="bg-[#FFF7EC] rounded-xl shadow p-3">
      <img src="https://i.imgur.com/yDZ4GMe.jpg" alt="Bakso" class="rounded-lg w-full h-40 object-cover">
      <div class="mt-3 font-semibold">Resep Bakso Daging Kenyal <span class="text-red-500">❤️</span></div>
      <p class="text-sm text-gray-600">Oleh Davina Aura</p>
    </div>

    <!-- Tambahan card lainnya jika ingin -->
  </div>

  <!-- Footer -->
  <footer class="bg-[#FFF7EC] mt-12 px-6 py-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-sm">
      <div>
        <h2 class="font-bold mb-2">Menu</h2>
        <ul class="space-y-1 text-gray-700">
          <li><a href="#" class="hover:underline">Beranda</a></li>
          <li><a href="#" class="hover:underline">Tips Masak</a></li>
          <li><a href="#" class="hover:underline">Tentang Kita</a></li>
          <li><a href="#" class="hover:underline">Favorit</a></li>
          <li><a href="#" class="hover:underline">Resep</a></li>
        </ul>
      </div>
      <div>
        <h2 class="font-bold mb-2">Kontak</h2>
        <ul class="text-gray-700 space-y-1">
          <li><a href="#" class="hover:underline">Tentang Kami</a></li>
          <li><a href="#" class="hover:underline">Chat Langsung</a></li>
        </ul>
      </div>
      <div>
        <h2 class="font-bold mb-2">Hubungi Kami</h2>
        <div class="flex gap-3 text-xl">
          <a href="#"><img src="https://img.icons8.com/color/48/instagram-new--v1.png" class="w-6 h-6" /></a>
          <a href="#"><img src="https://img.icons8.com/color/48/whatsapp--v1.png" class="w-6 h-6" /></a>
          <a href="#"><img src="https://img.icons8.com/color/48/youtube-play.png" class="w-6 h-6" /></a>
        </div>
      </div>
    </div>
    <div class="mt-6 text-center text-sm text-gray-500">
      &copy;2025 <span class="text-orange-500 font-semibold">Tudung Saji</span> All Rights Reserved
    </div>
  </footer>

</body>
</html>
