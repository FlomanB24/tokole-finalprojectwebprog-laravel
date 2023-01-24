<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Product 1 Toko 1
        Product::create([
            'store_id' => '1',
            'nama_product' => 'Lapis Talas Cream Cheese',
            'harga' => '33000',
            'deskripsi_produk' => 'Terbuat dari umbi talas yang diperpadukan dengan Cream Cheese yang lembut.',
            'rating' => '5.0',
            'image' => 'images/LapisTalascheese.jpg'
        ]);

        //Product 2 Toko 1
        Product::create([
            'store_id' => '1',
            'nama_product' => 'Talas Roll Premium Cheese',
            'harga' => '49000',
            'deskripsi_produk' => 'Terbuat dari umbi talas premium yang diperpadukan dengan Cheese yang lembut.',
            'rating' => '4.7',
            'image' => 'images/LapisTalasRollCheese.jpg'
        ]);

        //Product 3 Toko 1
        Product::create([
            'store_id' => '1',
            'nama_product' => 'Brownies Talas Original',
            'harga' => '33000',
            'deskripsi_produk' => 'Terbuat dari umbi talas premium yang dipanggang.',
            'rating' => '4.9',
            'image' => 'images/BrowniesTalas.jpg'
        ]);

        //Product 4 Toko 1
        Product::create([
            'store_id' => '1',
            'nama_product' => 'Special Lapis Talas Cheese',
            'harga' => '43000',
            'deskripsi_produk' => 'Terbuat dari talas yang ',
            'rating' => '4.8',
            'image' => 'images/SpecialLapisTalasCheese.jpg'
        ]);

        //Product 1 Toko 2
        Product::create([
            'store_id' => '2',
            'nama_product' => 'Kebaya Encim Bordir',
            'harga' => '500000',
            'deskripsi_produk' => 'Kebaya Encim Bordir Tangan Panjang Motif 5 Bunga Pink, Bahan : Voal Paris, 
            Ukuran :  S/ M/L/XL/XXL, Lingkar Dada 100 cm, Warna : Hitam,     Model : Kebaya Encim Bordir dan Tangan Panjang, 1 Motif hanya 1 Pcs. Exclusive, Tdk Pasaran',
            'rating' => '4.8',
            'image' => 'images/Kebaya1.jpg'
        ]);

        //Produk 2 Toko 2
        Product::create([
            'store_id' => '2',
            'nama_product' => 'Blouse Kebaya Bordir',
            'harga' => '450000',
            'deskripsi_produk' => 'Blouse Kebaya Bordir Warna Maroon Berpayet Size M',
            'rating' => '4.7',
            'image' => 'images/Kebaya2.jpg'
        ]);

        //Produk 3 Toko 2
        Product::create([
            'store_id' => '2',
            'nama_product' => 'Kebaya Krancang Encim Organdi Peach',
            'harga' => '550000',
            'deskripsi_produk' => 'Kebaya Krancang Organdi dan Berpayet berwarna Include Dalaman',
            'rating' => '4.7',
            'image' => 'images/Kebaya3.jpg'
        ]);

        //Produk 4 Toko 2
        Product::create([
            'store_id' => '2',
            'nama_product' => 'Kebaya Encim Bordir Krancang',
            'harga' => '650000',
            'deskripsi_produk' => 'Kebaya Encim Bordir Krancang Bunga Biru, Bahan : Voal Paris, Ukuran : S/M/L/XL, Lingkar Dada 98cm, Panjang Depan Baju 78cm',
            'rating' => '4.9',
            'image' => 'images/Kebaya4.jpg'
        ]);

        //Product 1 Toko 3
        Product::create([
            'store_id' => '3',
            'nama_product' => 'Mango & Passion Fruit Macarons',
            'harga' => '80000',
            'deskripsi_produk' => 'Rasa Mangga dan Markisa alami yang segar - macaron ini adalah camilan penguat suasana hati yang sempurna',
            'rating' => '4.7',
            'image' => 'images/PassionFruitMacarons.jpg'
        ]);

        //Product 2 Toko 3
        Product::create([
            'store_id' => '3',
            'nama_product' => 'Story Time Hampers',
            'harga' => '250000',
            'deskripsi_produk' => 'Menunjukkan momen liburan yang menyenangkan dengan koleksi bingkisan Natal eksklusif Colette Lola.',
            'rating' => '4.9',
            'image' => 'images/TimeHampers.jpg'
        ]);

        //Product 3 Toko 3
        Product::create([
            'store_id' => '3',
            'nama_product' => 'Wonderland Hampers',
            'harga' => '300000',
            'deskripsi_produk' => 'Keranjang Wonderland kami menyimpan semua hal penting untuk memulai musim Natal Anda dengan cara yang paling berkesan. Keranjang ini berisi empat kue buatan tangan nostalgia dan lezat yang dibuat dari nol oleh peri kue kami',
            'rating' => '4.5',
            'image' => 'images/WonderlandHampers.jpg'
        ]);

        //Product 1 Toko 4
        Product::create([
            'store_id' => '4',
            'nama_product' => 'Gift Of Blossom',
            'harga' => '100000',
            'deskripsi_produk' => 'Terdapat  isian Putri Salju | Red Velvet Cookies | Double Choco Almond',
            'rating' => '4.9',
            'image' => 'images/GiftOfBlossom.jpg'
        ]);

        //Product 2 Toko 4
        Product::create([
            'store_id' => '4',
            'nama_product' => 'Gift Of Happiness',
            'harga' => '500000',
            'deskripsi_produk' => 'Terdapat isian Classic Cheese | Devil’s Choco | Cornflakes | Peanut Crunchy | Almond Crunchy | Red Velvet Cookies',
            'rating' => '4.9',
            'image' => 'images/GiftOfHappiness.jpg'
        ]);

        //Product 3 Toko 4
        Product::create([
            'store_id' => '4',
            'nama_product' => 'Gift Tier',
            'harga' => '150000',
            'deskripsi_produk' => 'Terdapat rasa Double Choco Almond | Red Velvet Cookies | Kastengel',
            'rating' => '4.8',
            'image' => 'images/GiftTier.jpg'
        ]);


        //Product 1 Toko 5
        Product::create([
            'store_id' => '5',
            'nama_product' => 'Kain Batik Bogor Kampung',
            'harga' => '100000',
            'deskripsi_produk' => 'Batik Khas Bogor dengan motif kampung Urug',
            'rating' => '4.5',
            'image' => 'images/BatikBogorKampung.png'
        ]);

        //Product 2 Toko 5
        Product::create([
            'store_id' => '5',
            'nama_product' => 'Kain Batik Bogor Hujan Gerimis',
            'harga' => '100000',
            'deskripsi_produk' => 'Batik Khas Bogor dengan motif Hujan Gerimis',
            'rating' => '4.8',
            'image' => 'images/BatikHujan.png'
        ]);

        //Product 3 Toko 5
        Product::create([
            'store_id' => '5',
            'nama_product' => 'Kain Batik Bogor Rereng Kujang Teratai',
            'harga' => '100000',
            'deskripsi_produk' => 'Batik Khas Bogor dengan motif Rereng Kujang Teratai',
            'rating' => '4.6',
            'image' => 'images/BogorRerengKujangTeratai.jpg'
        ]);

        //Product 1 Toko 6
        Product::create([
            'store_id' => '6',
            'nama_product' => 'Roti Unyil Jagung',
            'harga' => '10000',
            'deskripsi_produk' => 'Roti mini berisi campuran biji jagung dan susu',
            'rating' => '5.0',
            'image' => 'images/Unyil-Jagung.jpg'
        ]);

        //Product 2 Toko 6
        Product::create([
            'store_id' => '6',
            'nama_product' => 'Roti Unyil Kismis',
            'harga' => '12000',
            'deskripsi_produk' => 'Roti mini bertaburkan kismis yang manis dan asam',
            'rating' => '4.9',
            'image' => 'images/Unyil-Kismis.png'
        ]);

        //Product 3 Toko 6
        Product::create([
            'store_id' => '6',
            'nama_product' => 'Roti Unyil Pisang Keju',
            'harga' => '15000',
            'deskripsi_produk' => 'Roti mini dengan topping pisang dan keju yang melimpah.',
            'rating' => '4.9',
            'image' => 'images/Unyil-Pisang-Keju.png'
        ]);

        //Product 1 Toko 7
        Product::create([
            'store_id' => '7',
            'nama_product' => 'Batagor Asin',
            'harga' => '40000',
            'deskripsi_produk' => 'Batagor asin dengan bentuk panjang dengan rasa gurih serta ketahanan product selama 3 bulan dalam suhu ruangan',
            'rating' => '4.5',
            'image' => 'images/batagor-asin.png'
        ]);

        //Product 2 Toko 7
        Product::create([
            'store_id' => '7',
            'nama_product' => 'Dodol Picnic',
            'harga' => '35000',
            'deskripsi_produk' => 'Cemilan berbahan dasar sari tepung ketan dan gula berbentuk persegi yang dipanggang dengan rasa manis',
            'rating' => '4',
            'image' => 'images/dodol-picnic.png'
        ]);

        //Product 3 Toko 7
        Product::create([
            'store_id' => '7',
            'nama_product' => 'Pisang Coklat Bollen Khas Kartika Sari',
            'harga' => '85000',
            'deskripsi_produk' => 'Olahan Puff Pastry berbentuk kotak dengan berukuran (29x15x5) cm isian pisang dan coklat yang menghadirkan rasa gurih dan manis yang berisi 10 pcs per box',
            'rating' => '5',
            'image' => 'images/pisang-coklat.png'
        ]);

        //Product 4 Toko 7
        Product::create([
            'store_id' => '7',
            'nama_product' => 'Sagoon Mini',
            'harga' => '28000',
            'deskripsi_produk' => 'Kue berbahan dasar tepung ketan dan kelapa parut berbentuk bulat yang dipanggang dengan rasa manis didalamnya',
            'rating' => '3.5',
            'image' => 'images/sagoon-mini.png'
        ]);

        //Product 1 Toko 8
        Product::create([
            'store_id' => '8',
            'nama_product' => 'Brownies Bakar',
            'harga' => '100000',
            'deskripsi_produk' => 'Dipadukan dengan rasa keju bakar dan kacang almond yang gurih serta manisnya butiran cokelat chip dan ada rasa asam yang segar berasal dari kismis',
            'rating' => '5',
            'image' => 'images/Brownies-Bakar.jpg'
        ]);

        //Product 2 Toko 8
        Product::create([
            'store_id' => '8',
            'nama_product' => 'Chocomarbel',
            'harga' => '80000',
            'deskripsi_produk' => 'Rasa brownies ini cenderung lebih manis. Akan tetapi bagi yang sangat menggemari cokelat, brownies ini menyuguhkan rasa cokelat yang menyatu antara rasa manis, gurih dan pahit dengan motif marble berwarna cokelat dan putih.',
            'rating' => '4.5',
            'image' => 'images/Chocomarbel.jpg'
        ]);

        //Product 3 Toko 8
        Product::create([
            'store_id' => '8',
            'nama_product' => 'Brownies Original',
            'harga' => '120000',
            'deskripsi_produk' => 'Rasa dominan coklat, moka dan rasa manis, gurih dan adanya sedikit rasa pahit',
            'rating' => '4',
            'image' => 'images/Original.jpg'
        ]);
    }
}
