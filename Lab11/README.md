# Nama : Safira Novianti
# NIM : 311910324
# Kelas : TI.19.A.2
# Praktikum 11 - PHP Framework

Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan pengembangan Codeigniter 4. Berikut beberapa ekstensi yang perlu diaktifkan:

php-json ekstension untuk bekerja dengan JSON; php-mysqlnd native driver untuk MySQL; php-xml ekstension untuk bekerja dengan XML; php-intl ekstensi untuk membuat aplikasi multibahasa; libcurl (opsional), jika ingin pakai Curl. Untuk mengaktifkan ekstentsi tersebut melalui XAMPP Control Panel, pada bagian Apache klik Config -> PHP.ini

![Xampp (2)](https://user-images.githubusercontent.com/56381081/122051560-ef9f7180-ce0e-11eb-9041-4bda698650fc.png)

![ekstensi php](https://user-images.githubusercontent.com/56381081/122051533-e8786380-ce0e-11eb-8154-52ceb2f560cb.png)

Kemudian buat folder baru dengan nama lab11_php_ci pada doc root webserver (htdocs)

![folder (2)](https://user-images.githubusercontent.com/56381081/122056478-d220d680-ce13-11eb-9e8f-5d8e2513d0f8.png)

# Installasi CODEIGNITER
Ada dua cara installasi Codeigniter, yaitu cara manual dan menggunakan composer. Pada praktik kali ini menggunakan cara manual:

Unduh Codeigniter dari website https://codeigniter.com/download Extrak file zip Codeigniter ke direktori htdocs/lab11_php_ci. Ubah nama direktory framework-4.x.xx menjadi ci4. Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/

![local host](https://user-images.githubusercontent.com/56381081/122051540-ea422700-ce0e-11eb-97bc-d8bd52833e2f.png)

# Menjalankan CLI (Command Line Interface)
Arahkan lokasi direktori sesuai dengan direktori kerja project yang sudah dibuat (xampp/htdocs/lab11_php_ci/ci4/)

![tampilan command](https://user-images.githubusercontent.com/56381081/122051544-eca48100-ce0e-11eb-890b-324e92e43a04.png)

Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah php spark

![perintah CLI](https://user-images.githubusercontent.com/56381081/122051541-eadabd80-ce0e-11eb-84c8-fdfaea8ade7d.png)

Mengaktifkan Mode Debugging pada Codeigniter

![whoops](https://user-images.githubusercontent.com/56381081/122051551-edd5ae00-ce0e-11eb-8bc8-94a98b439ac8.png)

## Contoh kesalahan

![4 (2)](https://user-images.githubusercontent.com/56381081/122946547-a79ac480-d3a3-11eb-8352-e2a5273d3245.png)

## Membuat Routing

![6](https://user-images.githubusercontent.com/56381081/122946552-a9648800-d3a3-11eb-8912-0cc72ac22db9.jpg)

Ketika di akses masih eror

![1](https://user-images.githubusercontent.com/56381081/122946559-a9fd1e80-d3a3-11eb-99f7-88a9576a16fa.jpg)

## Membuat Controller

![5](https://user-images.githubusercontent.com/56381081/122946550-a8cbf180-d3a3-11eb-9e6f-2e573549e380.jpg)

![2](https://user-images.githubusercontent.com/56381081/122946564-ab2e4b80-d3a3-11eb-9fbe-b278adb48e06.jpg)

![3](https://user-images.githubusercontent.com/56381081/122946537-a5d10100-d3a3-11eb-8037-847ffd236688.jpg)

## Membuat View

![7](https://user-images.githubusercontent.com/56381081/122948117-dd8c7880-d3a4-11eb-9251-ae7fc02701da.jpg)

# TUGAS 12 : CRUD

## 1. Membuat tampilan artikel
![2021-06-22 (11)](https://user-images.githubusercontent.com/81462436/122957733-6c50c380-d3ac-11eb-93a8-724f1b15397a.png)

## 2. Membuat tampilan detail artikel
![2021-06-22 (5)](https://user-images.githubusercontent.com/81462436/122956306-162f5080-d3ab-11eb-8331-dcf5a37d119c.png)

## 3. Menampilkan Tampilan menu admin
![2021-06-22 (7)](https://user-images.githubusercontent.com/81462436/122956311-17607d80-d3ab-11eb-99be-6627e00ad3e4.png)

## 4. Menambahkan Artikel pada menu admin
![2021-06-22 (13)](https://user-images.githubusercontent.com/81462436/122960742-ecc3f400-d3ad-11eb-98b5-ec07d3674f9e.png)
![2021-06-22 (12)](https://user-images.githubusercontent.com/81462436/122960498-aa021c00-d3ad-11eb-94e9-3cbe13d77c1b.png)

## 5. Mengubah Data pada artikel 2
![2021-06-22 (14)](https://user-images.githubusercontent.com/81462436/122961481-a327d900-d3ae-11eb-92d1-57fa5c332463.png)

# TUGAS 13 : MODUL LOGIN

## 1. Membuat Tabel User
![2021-06-28](https://user-images.githubusercontent.com/81462436/123661465-c0e9b800-d85e-11eb-8597-d0e43f2ea6a7.png)
## 2. Membuat DatabaseSeeder 
![2021-06-27](https://user-images.githubusercontent.com/81462436/123661443-bd563100-d85e-11eb-8fb3-4356539fbf66.png)
## 3. Tampilan Awal Menu LogIn
![2021-06-28 (1)](https://user-images.githubusercontent.com/81462436/123661447-be875e00-d85e-11eb-9d64-2fb68f0ce7f6.png)
## 4. Mencoba mengakses Masuk ke dalam menu admin dengan memasukan email dan password
![2021-06-28 (2)](https://user-images.githubusercontent.com/81462436/123661455-bf1ff480-d85e-11eb-8dd1-ae014c61304a.png)
## 5. Masuk ke tampilan setelah LogIn
![2021-06-28 (3)](https://user-images.githubusercontent.com/81462436/123661457-bfb88b00-d85e-11eb-9656-45e3560d05b3.png)
## 6. Tampilan ketika proses Logout
![2021-06-28 (4)](https://user-images.githubusercontent.com/81462436/123661460-c0512180-d85e-11eb-9a7a-c6e30277b802.png)
## 7. Dan akan kembali ke menu LogIn
![2021-06-28 (1)](https://user-images.githubusercontent.com/81462436/123661447-be875e00-d85e-11eb-9d64-2fb68f0ce7f6.png)

# Tugas 14 : Pagination dan Pencarian

## 1. Tampilan Pagination
![2021-07-05 (1)](https://user-images.githubusercontent.com/81462436/124498309-53053980-dde6-11eb-963e-0d6e915922b9.png)
## 2. Tampilan Pencarian
![2021-07-05 (9)](https://user-images.githubusercontent.com/81462436/124500210-8eedce00-dde9-11eb-861e-734f68f154c9.png)
## 3. Tampilan Ketika sudah di upload gambar
![2021-07-05 (5)](https://user-images.githubusercontent.com/81462436/124498331-5ac4de00-dde6-11eb-8e65-8f82cb548596.png)
