<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DigitalArtSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        $artworks = [
            [
                'title' => 'Senja Berwarna',
                'artist' => 'Nadia Prameswari',
                'resolution' => '4000 x 5000 px',
                'price' => 350000,
                'image' => 'senja-berwarna.jpg',
                'software_used' => 'Procreate',
            ],
            [
                'title' => 'Ruang Imajinasi',
                'artist' => 'Raka Mahendra',
                'resolution' => '3840 x 2160 px',
                'price' => 275000,
                'image' => 'ruang-imaginasi.jpg',
                'software_used' => 'Adobe Photoshop',
            ],
            [
                'title' => 'Bulan di Laut',
                'artist' => 'Alya Putri',
                'resolution' => '3000 x 4000 px',
                'price' => 420000,
                'image' => 'bulan-dilaut.jpg',
                'software_used' => 'Krita',
            ],
            [
                'title' => 'Pesona Bunga',
                'artist' => 'Putri Anindya',
                'resolution' => '3500 x 4500 px',
                'price' => 325000,
                'image' => 'pesona-bunga.jpg',
                'software_used' => 'Procreate',
            ],
            [
                'title' => 'Pink Dimension',
                'artist' => 'Dimas Pratama',
                'resolution' => '4000 x 4000 px',
                'price' => 450000,
                'image' => 'pink-dimension.jpg',
                'software_used' => 'Adobe Photoshop',
            ],
            [
                'title' => 'Hutan Cahaya',
                'artist' => 'Nabila Safitri',
                'resolution' => '3840 x 2160 px',
                'price' => 380000,
                'image' => 'hutan-cahaya.jpg',
                'software_used' => 'Krita',
            ],
            [
                'title' => 'Sakura Dreams',
                'artist' => 'Aulia Rahma',
                'resolution' => '3000 x 4000 px',
                'price' => 300000,
                'image' => 'sakura-dreams.jpg',
                'software_used' => 'Procreate',
            ],
            [
                'title' => 'Neon City',
                'artist' => 'Rizky Ramadhan',
                'resolution' => '3840 x 2160 px',
                'price' => 500000,
                'image' => 'neon-city.jpg',
                'software_used' => 'Adobe Photoshop',
            ],
            [
                'title' => 'Butterfly Effect',
                'artist' => 'Citra Maharani',
                'resolution' => '3500 x 3500 px',
                'price' => 275000,
                'image' => 'butterfly-effect.jpg',
                'software_used' => 'Clip Studio Paint',
            ],
            [
                'title' => 'Cosmic Dreams',
                'artist' => 'Fajar Nugraha',
                'resolution' => '4000 x 5000 px',
                'price' => 475000,
                'image' => 'cosmic-dreams.jpg',
                'software_used' => 'Adobe Photoshop',
            ],
        ];

        foreach ($artworks as $artwork) {
            DB::table('digital_art')->insert([
                ...$artwork,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
