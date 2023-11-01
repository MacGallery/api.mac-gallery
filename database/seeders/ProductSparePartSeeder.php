<?php

namespace Database\Seeders;

use App\Models\ProductSparePart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSparePartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'Front Camera',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/products/66591da327fb278b19c9ae34071f8463.png'
            ],
            [
                'name' => 'Back Camera',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/products/66591da327fb278b19c9ae34071f8463.png'
            ],
            [
                'name' => 'LCD (Kualitas Ori)',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/products/66591da327fb278b19c9ae34071f8463.png'
            ],
            [
                'name' => 'LCD (Original Apple)',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/products/183d9119ba5a039d1b342f6f2889ed16.png'
            ],
            [
                'name' => 'Vibrate',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/products/6c6ac51d17105a13c37956baf2340701.png'
            ],
            [
                'name' => 'Connector Charger',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/products/30abaf1385c9fc8cdf14bf5300deca94.png'
            ],
            [
                'name' => 'Battery',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/products/d68d52c87090f281de2ccf75194a5492.png'
            ],
            [
                'name' => 'IC',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/products/0545c14457a2025a70b355811e3f3230.png'
            ],
            [
                'name' => 'Home Button',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/products/82121b11dc7e93a0c6650583d47420dc.png'
            ],
            [
                'name' => 'Upgrade Storage',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/products/faf5df703e795752ee36cd0ff1af0bc4.png'
            ],
            [
                'name' => 'Logic Board & Data Recovery',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/products/708a4ee24c0d45c733b4303092c535df.png'
            ],
            [
                'name' => 'Housing',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/products/513c9a972124c2a011a2d627ccca5c66.png'
            ],

            [
                'name' => 'LCD',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/products/7fe8c84c48db42ba16a6675d576b2864.png'
            ],
            [
                'name' => 'Battery',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/products/8b0649fa62de0e7b7d99fb5b71a2f675.png'
            ],
            [
                'name' => 'Touch Screen',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/products/ca19f1a02f5eed42d0bf14948170b9c9.png'
            ],
            [
                'name' => 'Speaker',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/products/2390feb2af9beabd4fb78b1f380e4338.png'
            ],

            [
                'name' => 'LCD',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/products/068dab30dbc450ebea5cd0a28629859e.png'
            ],
            [
                'name' => 'Keyboard',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/products/cb4a5fd90318db2528f28d6c02c9f8e7.png'
            ],
            [
                'name' => 'Battery',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/products/fa49c3ae6afc2137f1713080313c5b73.png'
            ],
            [
                'name' => 'Trackpad',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/products/452a28711d629b897d00764d3264115a.png'
            ],
            [
                'name' => 'Speaker',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/products/3f96f9af816863c9e81612d4e799c554.png'
            ],
            [
                'name' => 'Touch Bar',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/products/d288e675592a8e24bb91413ed74706f6.png'
            ],
            [
                'name' => 'DC I/O Board',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/products/da61ec5474bcb75eb5395a6898eb30ed.png'
            ],
            [
                'name' => 'Flexible',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/products/481d1e0a6c24036df063e51a62f9300f.png'
            ],
            [
                'name' => 'Wificard',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/products/a8fd4b4160c79e83db23359bc7a4549d.png'
            ],
            [
                'name' => 'SSD',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/products/a485e049daba6f99e792f19d8c5cf508.png'
            ],


            [
                'name' => 'IC Power',
                'product_category_id' => 4,
                'image' => 'https://icolor.co.id/assets/media/products/0545c14457a2025a70b355811e3f3230.png'
            ],
        ];

        foreach ($datas as $data) {
            $sparePart = new ProductSparePart();
            $sparePart->name = $data['name'];
            $sparePart->product_category_id = $data['product_category_id'];
            $sparePart->save();

            if ($data['image'] !== null) {
                $sparePart->addMediaFromUrl($data['image'])->toMediaCollection('image');
            }
        }
    }
}