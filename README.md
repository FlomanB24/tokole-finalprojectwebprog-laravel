Readme Github

Nama Project: Tokole
Anggota Kelompok:
- Bernadete Marchellin Agatha Tanarto - 2440032783
- Gabriel Rolly Davinsi - 2440071582
- Leonardo Caprio - 2440015322
- Samson Ndruru - 2440067622
- Theresa Grace Thenia - 2440020751

Cara Installasi Project 
1. Buka Link Github : https://github.com/FlomanB24/FinalProject-WebProg.git
2. Download file tersebut dalam bentuk ZIP 
3. Ekstrak Zip tersebut 
4. Jalan CMD pada file ekstrak tersebut lalu ketikkan "code ." untuk mengarah ke VSCode 
5. Lalu bukalah terminal dengan "ctrl+shift+~"
6. Ketikkan "composer update" untuk mendapatkan vendor pada laravel tersebut
7. Nyalakan XAMPP dan buatlah database baru bernama "tokole"
8. Buatlah sebuah file baru di Vscode dan berikan nama ".env", lalu copy paste semua isi pada ".env.example" ke ".env" 
9. Lalu pada file ".env" gantilah DB_DATABASE pada line 14 dengan nama "Tokole:
10. Lalu pada Terminal VSCode, ketikkan "php artisan migrate:fresh --seed" lalu jalankan.
11. Lalu pada terminal yang sama ketikkan "php artisan serve" dan klik link yang diberikan.
12. Website tokole siap digunakan.
13. Untuk masuk ke dalam dashboard admin, gunakan Username: Admintokole | Password: Admintokole
14. Oleh karena user sebagai admin hanya diperuntukan oleh user yang dipilih tokole maka tidak ada menu registrasi yang disertakan dalam tampilan UI nya untuk mencegah semua orang (bukan pilihan Tokole) dapat melakukan registrasi dan menjadi admin sehingga bisa mengakses dashboard admin. Tetapi utuk pihak Tokole yangmau melakukan registrasi dapat dilakukan secara manual dengan memasang route (/register) saat php artisan serve dijalankan dan web Tokole terbuka.


Note: Tokole bukanlah toko ole-oleh (toko online) yang di dalamnya dapat dilakukan transaksi jual-beli online. Tokole sendiri adalah website yang dibangun untuk membantu mempromosikan dan memperkenalkan UMKM yang ada di DKI Jakarta agar siapa saja yang hendak mencari ole-oleh Jakarta dapat mencari terlebih dahulu referensi Toko UMKM, Produk dan tempat Toko UMKM dari Tokole.
