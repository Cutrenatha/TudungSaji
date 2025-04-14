<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Resep</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f4ebd6] font-sans">

<!-- Header -->
<div class="bg-[#f4c988] px-[50px] py-5 flex items-center justify-between border-b border-orange-300 relative">
  <div class="flex items-center gap-3">
    <img src="{{ asset('Logo.png') }}" class="w-[80px] h-auto object-contain">
  </div>
  <div class="absolute left-1/2 transform -translate-x-1/2 text-[22px] font-bold">
    Tambah <span class="text-[#b5332e]">Resep</span>
  </div>
  <div class="flex items-center gap-2">
    <div class="bg-[#ffcc99] rounded-full w-7 h-7 flex items-center justify-center font-bold text-white">👤</div>
    <div>Raysha Tazkiya Rahim</div>
    <button class="bg-transparent border-none cursor-pointer">▼</button>
  </div>
</div>

<!-- Breadcrumb -->
<div class="text-sm mt-4 mb-2 px-8">
  &lt; <a href="#" class="text-gray-800 no-underline">Beranda</a> &lt; <strong>Tambah Resep</strong>
</div>

<!-- Konten -->
<div class="flex gap-5 px-8 pb-8">
  <!-- Kolom Kiri -->
  <div class="w-1/3 bg-white rounded-xl p-5">
    <div class="text-center p-5 border-2 border-dashed border-gray-300 rounded-lg text-gray-500 text-sm mb-5">
      <label for="fotoResep" class="cursor-pointer block font-bold">
        📷<br>Foto Resep<br><small class="font-normal">Tambahkan Foto Akhir Masakan</small>
      </label>
      <input type="file" id="fotoResep" class="hidden">
    </div>

    <label for="porsi" class="block mb-1 font-bold">Porsi</label>
    <input type="text" id="porsi" placeholder="2 Orang" class="w-full p-2 mb-4 border border-gray-300 rounded-md">

    <label class="block mb-1 font-bold">Bahan-bahan:</label>
    <div id="bahan-list">
      <div class="flex items-center gap-2 mb-2">
        <span class="cursor-move">☰</span>
        <input type="text" value="300 gr Daging Sapi Lokal" class="flex-1 p-2 border border-gray-300 rounded-md">
      </div>
      <div class="flex items-center gap-2 mb-2">
        <span class="cursor-move">☰</span>
        <input type="text" value="6 Siung Bawang Merah" class="flex-1 p-2 border border-gray-300 rounded-md">
      </div>
    </div>
    <button class="text-blue-700 text-sm mt-2" onclick="tambahBahan()">+ Bahan</button>
  </div>

  <!-- Kolom Kanan -->
  <div class="w-2/3 bg-white rounded-xl p-5">
    <label for="judul" class="block mb-1 font-bold">Judul</label>
    <input type="text" id="judul" placeholder="Resep Rendang Daging Sapi Empuk" class="w-full p-2 mb-4 border border-gray-300 rounded-md">

    <label for="deskripsi" class="block mb-1 font-bold">Deskripsi</label>
    <textarea id="deskripsi" rows="4" placeholder="Deskripsi :" class="w-full p-2 mb-4 border border-gray-300 rounded-md"></textarea>

    <label for="lamaMemasak" class="block mb-1 font-bold">Lama Memasak</label>
    <input type="text" id="lamaMemasak" value="1 jam 20 menit" class="w-full p-2 mb-4 border border-gray-300 rounded-md">

    <label class="block mb-1 font-bold">Langkah:</label>
    <div id="langkah-list">
      <div class="flex items-center gap-2 mb-3">
        <span class="cursor-move">☰</span>
        <label class="w-[60px] h-[60px] border-2 border-dashed border-gray-300 rounded flex items-center justify-center text-2xl text-gray-400 cursor-pointer">
          📷
          <input type="file" class="hidden">
        </label>
        <input type="text" value="Iris bawang putih dan bawang merah secara kasar, dan sisihkan" class="flex-1 p-2 border border-gray-300 rounded-md">
      </div>
    </div>
    <button class="text-blue-700 text-sm mt-2" onclick="tambahLangkah()">+ Langkah</button>
  </div>
</div>

<!-- Tombol Aksi -->
<div class="flex justify-end gap-3 px-8 pb-8">
  <button class="px-4 py-2 bg-[#fce2e0] text-[#b5332e] rounded-md font-bold">Hapus</button>
  <button class="px-4 py-2 bg-gray-200 rounded-md font-bold">Simpan</button>
  <button class="px-4 py-2 bg-[#b5332e] text-white rounded-md font-bold">Terbitkan</button>
</div>

<script>
  function tambahBahan() {
    const div = document.createElement('div');
    div.className = 'flex items-center gap-2 mb-2';
    div.innerHTML = `
      <span class="cursor-move">☰</span>
      <input type="text" placeholder="Tulis bahan..." class="flex-1 p-2 border border-gray-300 rounded-md">
    `;
    document.getElementById('bahan-list').appendChild(div);
  }

  function tambahLangkah() {
    const div = document.createElement('div');
    div.className = 'flex items-center gap-2 mb-3';
    div.innerHTML = `
      <span class="cursor-move">☰</span>
      <label class="w-[60px] h-[60px] border-2 border-dashed border-gray-300 rounded flex items-center justify-center text-2xl text-gray-400 cursor-pointer">
        📷
        <input type="file" class="hidden">
      </label>
      <input type="text" placeholder="Tulis langkah..." class="flex-1 p-2 border border-gray-300 rounded-md">
    `;
    document.getElementById('langkah-list').appendChild(div);
  }
</script>

</body>
</html>
