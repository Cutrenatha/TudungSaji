<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile Info</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  </head>
  <body class="bg-gray-50 min-h-screen flex items-stretch">
    <!-- Sidebar -->
    <aside class="w-1/4 bg-white shadow-lg p-6 pt-10 flex flex-col items-center rounded-r-3xl">
      <img src="profil.jpg" class="w-24 h-24 rounded-full object-cover mb-4" />
      <h2 class="text-lg font-bold">Raysha Tazkiya Rahim</h2>
      <p class="text-sm text-gray-500 mb-6">Ibu Rumah Tangga</p>
      <nav class="w-full space-y-4">
        <button class="w-full text-left px-4 py-2 rounded-full bg-orange-100 text-orange-600 font-medium">
          <i class="fas fa-user mr-2"></i>Informasi Pribadi
        </button>
        <button class="w-full text-left px-4 py-2 rounded-full hover:bg-gray-100">
          <i class="fas fa-sign-out-alt mr-2"></i>Keluar
        </button>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-10">
      <div class="bg-white rounded-3xl shadow-md p-10">
        <h2 class="text-2xl font-bold mb-6">Data Diri</h2>
        <div class="flex space-x-6 mb-6">
          <label class="flex items-center space-x-2">
            <input type="radio" name="gender" checked class="accent-orange-500" />
            <span>Laki-laki</span>
          </label>
          <label class="flex items-center space-x-2">
            <input type="radio" name="gender" class="accent-orange-500" />
            <span>Wanita</span>
          </label>
        </div>

        <div class="grid grid-cols-2 gap-6">
          <div>
            <label class="block text-sm text-gray-600 mb-1">Nama Pertama</label>
            <input type="text" class="w-full border rounded-xl px-4 py-2 bg-orange-100" value="Raysha Tazkiya" />
          </div>
          <div>
            <label class="block text-sm text-gray-600 mb-1">Nama Terakhir</label>
            <input type="text" class="w-full border rounded-xl px-4 py-2 bg-orange-100" value="Rahim" />
          </div>
          <div class="col-span-2">
            <label class="block text-sm text-gray-600 mb-1">Email</label>
            <div class="relative">
              <input type="email" class="w-full border rounded-xl px-4 py-2 bg-orange-100" value="RayshaTazkiya@gmail.com" />
              <span class="absolute right-4 top-1/2 transform -translate-y-1/2 text-green-500 text-sm font-semibold">Verified</span>
            </div>
          </div>
          <div class="col-span-2">
            <label class="block text-sm text-gray-600 mb-1">Alamat</label>
            <input type="text" class="w-full border rounded-xl px-4 py-2 bg-orange-100" value="Jl.Ir Mohd Taher Lr.Lhok Pintah." />
          </div>
          <div>
            <label class="block text-sm text-gray-600 mb-1">Nomor Telepon</label>
            <input type="text" class="w-full border rounded-xl px-4 py-2 bg-orange-100" value="(405) 08126678659" />
          </div>
          <div>
            <label class="block text-sm text-gray-600 mb-1">Tanggal Lahir</label>
            <div class="relative">
              <input type="text" class="w-full border rounded-xl px-4 py-2 bg-orange-100" value="1 Feb, 2005" />
              <i class="fas fa-calendar absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            </div>
          </div>
          <div>
            <label class="block text-sm text-gray-600 mb-1">Lokasi</label>
            <input type="text" class="w-full border rounded-xl px-4 py-2 bg-orange-100" value="Tapak Tuan" />
          </div>
          <div>
            <label class="block text-sm text-gray-600 mb-1">Kode Pos</label>
            <input type="text" class="w-full border rounded-xl px-4 py-2 bg-orange-100" value="30301" />
          </div>
        </div>

        <div class="flex justify-end mt-10 space-x-4">
            <button class="border border-orange-500 text-orange-500 px-6 py-2 rounded-full hover:bg-orange-50">
              Buang Perubahan
            </button>
            <button class="bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-600">
              Simpan Perubahan         
          </button>
        </div>
      </div>
    </main>
  </body>
</html>
