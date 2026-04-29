## Tahapan Instalisasi Project
1. Clone project dari repository
2. Akses project dari terminal (command prompt)
3, Jalankan perintah 'composer instal' untuk mendownload dependensi
4. Copy file '.env.example' dan rename menjadi '.env'
5. Jalankan perintah 'php artisan key:generate'

## Menyiapkan database
1. Buat file 'database.sqlite' di dalam folder 'database/'
2. Jalankan perintah 'php artisan key:generate'

## Menjalankan server
1. Pastikan seluruh dependensi telah terinstal
2. Pastikan key sudah digenerate
3. Pastikan database sudah disiapkan
4. Jalankan perintah 'php artisan serve'
## Latihan
1. Buat controller baru dengan nama SupplierController
2. Daftarkan path /supplier pada route web.php
3. Buat list supplier dengan pada view supplier.index
4. Buat halaman detail supplier, tampilkan informasi detail pada view supplier.detail
