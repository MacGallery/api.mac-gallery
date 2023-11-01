<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'iPhone',
                'image' => 'https://cdn-gnoad.nitrocdn.com/egglOwYpFuiSvmZalKCOdGTcDsVQRjiu/assets/static/optimized/rev-c5b20e7/wp-content/uploads/2022/09/Apple-Iphone-Devices-150x150.png'
            ],
            [
                'name' => 'iPad',
                'image' => 'https://cdn-gnoad.nitrocdn.com/egglOwYpFuiSvmZalKCOdGTcDsVQRjiu/assets/static/optimized/rev-c5b20e7/wp-content/uploads/2022/09/Apple-Ipad-devices-150x150.png'
            ],
            [
                'name' => 'Macbook',
                'image' => 'https://cdn-gnoad.nitrocdn.com/egglOwYpFuiSvmZalKCOdGTcDsVQRjiu/assets/static/optimized/rev-c5b20e7/wp-content/uploads/2022/09/Apple-Macbook-Devices-150x150.png'
            ],
            [
                'name' => 'iMac',
                'image' => 'https://cdn-gnoad.nitrocdn.com/egglOwYpFuiSvmZalKCOdGTcDsVQRjiu/assets/static/optimized/rev-c5b20e7/wp-content/uploads/2022/09/Apple-Imac-devices-150x150.png'
            ],
        ];

        foreach ($datas as $data) {
            $cat  = new ProductCategory();
            $cat->name = $data['name'];
            $cat->save();

            $cat->addMediaFromUrl($data['image'])->toMediaCollection('image');
        }
    }
}
