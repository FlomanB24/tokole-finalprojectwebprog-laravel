<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Toko 1
        Store::create([
            'category_id' => 1,
            'nama_store' => 'Rumah Talas Bogor',
            'no_telp' => '+622518345269',
            'nama_seller' => 'Rudi Rudiyanto',
            'alamat' => 'Jl. Pajajaran No.102, RT.03/RW.12, Bantarjati, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16153',
            'deskripsi_store' => 'Menyediakan berbagai pilihan makanan, minuman dan cemilan untuk buah tangan. Terkenal dengan kue bolu.',
            'jam_buka' => '07.00 - 22.00 WIB',
            'image' => 'images/RumahTalas.jpg',
        ]);

        //Toko 2
        Store::create([
            'category_id' => 2,
            'nama_store' => 'Rumah Kebaya Milla House',
            'no_telp' => '+6282296587412',
            'nama_seller' => 'Victoria Michellin',
            'alamat' => 'Jl. Panglima Polim V No.12 A, RT.1/RW.7, Melawai, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12160',
            'deskripsi_store' => 'Menyediakan berbagai jenis kebaya berkualitas',
            'jam_buka' => '09.00 - 16.00 WIB',
            'image' => 'images/TokoKebaya.png',
        ]);

        //Toko 3
        Store::create([
            'category_id' => 3,
            'nama_store' => 'Colette & Lola',
            'no_telp' => '+6282123333224',
            'nama_seller' => 'Wang Louise',
            'alamat' => 'Jl. Jalan ke kisah No.1, RT.8/RW.12, Grogol Utara, Kec. Kby. Lama, Kota Jakarta Selatan 23341',
            'deskripsi_store' => 'Menyediakan buah tangan dengan rasa yang khas dan harga yang terjangkau',
            'jam_buka' => '09.00 - 19.00 WIB',
            'image' => 'images/ColetteLola.jpg',
        ]);

        //Toko 4
        Store::create([
            'category_id' => 3,
            'nama_store' => 'Clairmont Patisserie',
            'no_telp' => '+6282163235199',
            'nama_seller' => 'Samson Ndruru',
            'alamat' => 'Jl. Sudarta No.5, RT.2/RW.5, Gambir, Kec. Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Pusat 11841',
            'deskripsi_store' => 'Menyediakan berbagai hampers untuk oleh oleh khas dari jakarta kualitas premium',
            'jam_buka' => '08.00 - 22.00 WIB',
            'image' => 'images/ClairmontPatisserie.jpg',
        ]);

        //Toko 5
        Store::create([
            'category_id' => 1,
            'nama_store' => 'Batik Tradisiku Bogor',
            'no_telp' => '+6285719807641',
            'nama_seller' => 'Syamhudi Siswaya',
            'alamat' => 'Jl. Jalak No.2, Tanah Sareal, Kec. Tanah Sereal, Kota Bogor, Jawa Barat 16161',
            'deskripsi_store' => 'Galeri batik yang menawarkan batik khas kota hujan Bogor.',
            'jam_buka' => '12.00 - 22.00 WIB',
            'image' => 'images/BatikTradisikuBogor.jpg',
        ]);

        //Toko 6
        Store::create([
            'category_id' => 3,
            'nama_store' => 'Roti Unyil Venus',
            'no_telp' => '+6281267590817',
            'nama_seller' => 'Hendra Saputra',
            'alamat' => 'Jl. Siliwangi No.27E, RT.02/RW.02, Sukasari, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16142',
            'deskripsi_store' => 'Menjual berbagai roti mini aneka rasa khas Bogor',
            'jam_buka' => '07.00 - 24.00 WIB',
            'image' => 'images/unyil1.jpg',
        ]);

        //Toko 7
        Store::create([
            'category_id' => 1,
            'nama_store' => 'Kartika Sari',
            'no_telp' => '+6282296578931',
            'nama_seller' => 'Ratna Sari',
            'alamat' => 'Jl. H. Akbar No.4, Pasir Kaliki Bandung',
            'deskripsi_store' => 'Menyediakan berbagai ole-ole khas Bandung',
            'jam_buka' => '10.00 - 22.00 WIB',
            'image' => 'images/kartikasari.jpg',
        ]);

        //Toko 8
        Store::create([
            'category_id' => 3,
            'nama_store' => 'Amanda Brownies',
            'no_telp' => '+6282348728397',
            'nama_seller' => 'Amanda Noto',
            'alamat' => 'Jl. Dr. Setiabudhi No.164',
            'deskripsi_store' => 'Menyediakan berbagai pilihan ole-ole seperti Brownies',
            'jam_buka' => '10.00 - 22.00 WIB',
            'image' => 'images/Amanda.jpg',
        ]);
    }
}
