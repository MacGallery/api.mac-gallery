<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ProductHasSparePartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'product_id' => 1,
                'product_spare_part_id' => 1,
                'service_price' => 117000,
            ],
            [
                'product_id' => 1,
                'product_spare_part_id' => 2,
                'service_price' => 100000,
            ],
            [
                'product_id' => 1,
                'product_spare_part_id' => 3,
                'service_price' => 210000,
            ],
            [
                'product_id' => 1,
                'product_spare_part_id' => 4,
                'service_price' => 315000,
            ],
            [
                'product_id' => 1,
                'product_spare_part_id' => 5,
                'service_price' => 145000,
            ],
            [
                'product_id' => 1,
                'product_spare_part_id' => 12,
                'service_price' => 220000,
            ],
            [
                'product_id' => 1,
                'product_spare_part_id' => 6,
                'service_price' => 145000,
            ],
            [
                'product_id' => 1,
                'product_spare_part_id' => 7,
                'additional_info' => '6 months warranty',
                'service_price' => 125000,
            ],
            [
                'product_id' => 1,
                'product_spare_part_id' => 7,
                'additional_info' => '12 months warranty',
                'service_price' => 300000,
            ],
            [
                'product_id' => 1,
                'product_spare_part_id' => 9,
                'service_price' => 145000,
            ],
            [
                'product_id' => 1,
                'product_spare_part_id' => 10,
                'additional_info' => '32GB',
                'service_price' => 275000,
            ],
            [
                'product_id' => 1,
                'product_spare_part_id' => 10,
                'additional_info' => '64GB',
                'service_price' => 375000,
            ],
            [
                'product_id' => 1,
                'product_spare_part_id' => 10,
                'additional_info' => '128GB',
                'service_price' => 675000,
            ],
            [
                'product_id' => 1,
                'product_spare_part_id' => 11,
                'additional_info' => '128GB',
                'service_price' => 650000,
            ],
        ];

        $products = Product::where('product_category_id', 1)->get();
        $variants = $products->map(function ($product) {
            return $product->variants;
        })->flatten();
        $products->each(function ($product) use ($datas) {
            foreach ($datas as $data) {
                DB::table('product_has_product_spare_parts')
                    ->insert([
                        'product_id' => $product->id,
                        'product_spare_part_id' => $data['product_spare_part_id'],
                        'additional_info' => Arr::get($data, 'additional_info', null),
                        'service_price' => $data['service_price']
                    ]);
            }
        });
    }
}
