<?php

namespace Database\Seeders;

use App\Models\barangs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        barangs::insert(
            [
                [
                    'namaBarang' => 'bakwan',
                    'fotoBarang' => 'bakwan.jpg',
                    'harga' => '1000',
                    'stok' => '200',
                    'ukuran' => '1biji',
                    'reviewBarang' => 'rasanya lezat dan bergizi ',
                ],
                [
                    'namaBarang' => 'mendoan',
                    'fotoBarang' => 'mendoan.jpg',
                    'harga' => '3000',
                    'stok' => '200',
                    'ukuran' => '1biji',
                    'reviewBarang' => 'rasanya lezat banget lho',
                ],
                [
                    'namaBarang' => 'ubi goreng',
                    'fotoBarang' => 'ubi.jpg',
                    'harga' => '750',
                    'stok' => '200',
                    'ukuran' => '1biji',
                    'reviewBarang' => 'rmembuat jadi terngiang ngiang ',
                ],
                [
                    'namaBarang' => 'jemblem',
                    'fotoBarang' => 'jemblem.jpg',
                    'harga' => '1500',
                    'stok' => '100',
                    'ukuran' => '1biji',
                    'reviewBarang' => 'rasanya lezat dan buat kamu terpana ',
                ],
                [
                    'namaBarang' => 'kucur',
                    'fotoBarang' => 'kucur.jpg',
                    'harga' => '1500',
                    'stok' => '100',
                    'ukuran' => '1biji',
                    'reviewBarang' => 'rasanya lezat dan buat kamu terpana ',
                ],
                [
                    'namaBarang' => 'tahu isi',
                    'fotoBarang' => 'tahu isi.jpg',
                    'harga' => '1000',
                    'stok' => '100',
                    'ukuran' => '1biji',
                    'reviewBarang' => 'rasanya lezat dan buat kamu terpana ',
                ],
            ]
        );
    }
}
