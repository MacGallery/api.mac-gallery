<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'iPhone 6',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/378f7c5a43b153bef91756050db92090.png',
            ],
            [
                'name' => 'iPhone 6S',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/b3c7f750c7767830e90d95b75045ae5d.png',
            ],
            [
                'name' => 'iPhone 6 Plus',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/b3c7f750c7767830e90d95b75045ae5d.png',
            ],
            [
                'name' => 'iPhone 6S Plus',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/2e605ea68adee1473f44cff1806ac7eb.png',
            ],
            [
                'name' => 'iPhone 7',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/f1be4efdcd35726cc85944d3479ee8ac.png',
            ],
            [
                'name' => 'iPhone 7 Plus',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/f1be4efdcd35726cc85944d3479ee8ac.png',
            ],
            [
                'name' => 'iPhone 8',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/51ce1bb59c5577f881c42918f9a96c7f.png',
            ],
            [
                'name' => 'iPhone 8 Plus',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/001f6c54247d562c06943277aff8eef4.png',
            ],
            [
                'name' => 'iPhone X',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/b65047107892813bbee204cedcf62be1.png',
            ],
            [
                'name' => 'iPhone XR',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/1d8882ad4bedd0dce293ee9f3689c0b0.png',
            ],
            [
                'name' => 'iPhone XS',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/7a1254c15900b274d09be8fee1422c0a.png',
            ],
            [
                'name' => 'iPhone XS Max',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/7a1254c15900b274d09be8fee1422c0a.png',
            ],
            [
                'name' => 'iPhone 11',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/fc32c21ffef22d0fa826990677fc1aaf.png',
            ],
            [
                'name' => 'iPhone 11 Pro',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/39d07da3e987bbc69cddff2bcbacc2bc.png',
            ],
            [
                'name' => 'iPhone 11 Pro Max',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/9e2c905aef70f807cae86110833d7606.png',
            ],
            [
                'name' => 'iPhone SE 2020',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/d26d472d5178255a8bd8a012b5641922.png',
            ],
            [
                'name' => 'iPhone 12',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/a06096f224b80f7728a71b3d2ef8c973.png',
            ],
            [
                'name' => 'iPhone 12 Mini',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/a06096f224b80f7728a71b3d2ef8c973.png',
            ],
            [
                'name' => 'iPhone 12 Pro',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/a06096f224b80f7728a71b3d2ef8c973.png',
            ],
            [
                'name' => 'iPhone 12 Pro Max',
                'product_category_id' => 1,
                'image' => 'https://icolor.co.id/assets/media/sparepart/3ba3193a76ec213407cd353f39342f5b.png',
            ],

            [
                'name' => 'iPad 2',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/a96005ec501418b4a32dfcc4ce92f956.jpg',
            ],
            [
                'name' => 'iPad 2 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/7ede53e14c7920683c6399ab6654adb5.jpg',
            ],
            [
                'name' => 'iPad 2 (Wi-Fi + 3G GSM)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/2b69a7ca2909b781ca5d97472529bd61.jpg',
            ],
            [
                'name' => 'iPad 2 (Wi-Fi + 3G CDMA)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/7c8acc2679cc3ae0eab68452360c1c04.jpg',
            ],
            [
                'name' => 'iPad 3',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/7c8acc2679cc3ae0eab68452360c1c04.jpg',
            ],
            [
                'name' => 'iPad 3 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/76cc6000da34b3303174b3cd2ad0b285.jpg',
            ],
            [
                'name' => 'iPad 3 (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/2d8867f0a1f021bf99f2ca84a9242c57.jpg',
            ],
            [
                'name' => 'iPad 3 (Wi-Fi + Cellular Verzion)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/2d8867f0a1f021bf99f2ca84a9242c57.jpg',
            ],
            [
                'name' => 'iPad 4',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/eeec47f0373fd862ae96d9dc2de5b6d4.jpg',
            ],
            [
                'name' => 'iPad 4 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/eeec47f0373fd862ae96d9dc2de5b6d4.jpg',
            ],
            [
                'name' => 'iPad 4 (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/485d6b96e6231afdc5af9b3c0b04b5ab.jpg',
            ],
            [
                'name' => 'iPad 4 (Wi-Fi + Cellular MM)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/485d6b96e6231afdc5af9b3c0b04b5ab.jpg',
            ],
            [
                'name' => 'iPad 5 (2017) (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/c67743acfe08a275aed66439e834f5db.jpg',
            ],
            [
                'name' => 'iPad 5 (2017) (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/c67743acfe08a275aed66439e834f5db.jpg',
            ],
            [
                'name' => 'iPad 6 2018 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/bc0aafa2cc58ca5845dd9910dbbce38a.jpg',
            ],
            [
                'name' => 'iPad 6 2018 (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/bc0aafa2cc58ca5845dd9910dbbce38a.jpg',
            ],
            [
                'name' => 'iPad 7 10.2 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/e194dcacd8881c4982c6150c4b65912f.jpg',
            ],
            [
                'name' => 'iPad 7 10.2 (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/e194dcacd8881c4982c6150c4b65912f.jpg',
            ],
            [
                'name' => 'iPad 8',
                'product_category_id' => 2,
                'image' => null,
            ],
            [
                'name' => 'iPad Mini 1',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/ae5a5e195d7b76fc1dc605d32e12fb0f.jpg',
            ],
            [
                'name' => 'iPad Mini 1 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/ae5a5e195d7b76fc1dc605d32e12fb0f.jpg',
            ],
            [
                'name' => 'iPad Mini 1 (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/ae5a5e195d7b76fc1dc605d32e12fb0f.jpg',
            ],
            [
                'name' => 'iPad Mini 1 (Wi-Fi + Cellular MM)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/ae5a5e195d7b76fc1dc605d32e12fb0f.jpg',
            ],
            [
                'name' => 'iPad Mini 2',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/1f07cf4e64f0e092a5082f6dab80b6f0.jpg',
            ],
            [
                'name' => 'iPad Mini 2 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/1f07cf4e64f0e092a5082f6dab80b6f0.jpg',
            ],
            [
                'name' => 'iPad Mini 2 (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/1f07cf4e64f0e092a5082f6dab80b6f0.jpg',
            ],
            [
                'name' => 'iPad Mini 3',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/3d5d5a38aaa0deb0127e517280832cca.jpg',
            ],
            [
                'name' => 'iPad Mini 3 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/3d5d5a38aaa0deb0127e517280832cca.jpg',
            ],
            [
                'name' => 'iPad Mini 3 (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/3d5d5a38aaa0deb0127e517280832cca.jpg',
            ],
            [
                'name' => 'iPad Air',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/bddae7182a9a0ab37f782c6634caba29.jpg',
            ],
            [
                'name' => 'iPad Air (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/bddae7182a9a0ab37f782c6634caba29.jpg',
            ],
            [
                'name' => 'iPad Air (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/bddae7182a9a0ab37f782c6634caba29.jpg',
            ],
            [
                'name' => 'iPad Air 2',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/afbcd65d8fcdff18a097160c12eb8f88.jpg',
            ],
            [
                'name' => 'iPad Air 2 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/afbcd65d8fcdff18a097160c12eb8f88.jpg',
            ],
            [
                'name' => 'iPad Air 2 (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/afbcd65d8fcdff18a097160c12eb8f88.jpg',
            ],
            [
                'name' => 'iPad Air 3 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/2cf1d0a08ae10c6a5ab80abc243d8f43.jpg',
            ],
            [
                'name' => 'iPad Air 3 (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/2cf1d0a08ae10c6a5ab80abc243d8f43.jpg',
            ],
            [
                'name' => 'iPad Mini 4',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/02d7e14fce2a5830d82da29e80605eec.jpg',
            ],
            [
                'name' => 'iPad Mini 4 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/02d7e14fce2a5830d82da29e80605eec.jpg',
            ],
            [
                'name' => 'iPad Mini 4 (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/02d7e14fce2a5830d82da29e80605eec.jpg',
            ],
            [
                'name' => 'iPad Pro 12.9',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/8987716842575ee6d4e1fe03b12b5e56.jpg',
            ],
            [
                'name' => 'iPad Pro 12.9 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/8987716842575ee6d4e1fe03b12b5e56.jpg',
            ],
            [
                'name' => 'iPad Pro 12.9 (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/8987716842575ee6d4e1fe03b12b5e56.jpg',
            ],
            [
                'name' => 'iPad Pro 9.7',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/1631fb48d83821c54a76bf086e0818b7.jpg',
            ],
            [
                'name' => 'iPad Pro 9.7 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/1631fb48d83821c54a76bf086e0818b7.jpg',
            ],
            [
                'name' => 'iPad Pro 9.7 (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/1631fb48d83821c54a76bf086e0818b7.jpg',
            ],
            [
                'name' => 'iPad Pro 10.5',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/a74be1631141f4a4f647e55eb3712004.jpg',
            ],
            [
                'name' => 'iPad Pro 10.5 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/a74be1631141f4a4f647e55eb3712004.jpg',
            ],
            [
                'name' => 'iPad Pro 10.5 (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/a74be1631141f4a4f647e55eb3712004.jpg',
            ],
            [
                'name' => 'iPad Mini 5',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/4fd87278e1c60ea904e1be3e75506f81.png',
            ],
            [
                'name' => 'iPad Mini 5 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/4fd87278e1c60ea904e1be3e75506f81.png',
            ],
            [
                'name' => 'iPad Mini 5 (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/4fd87278e1c60ea904e1be3e75506f81.png',
            ],
            [
                'name' => 'iPad Pro 11" 2018',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/38a8bfb0849268c51c3dda26884beba2.jpg',
            ],
            [
                'name' => 'iPad Pro 11" 2018 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/38a8bfb0849268c51c3dda26884beba2.jpg',
            ],
            [
                'name' => 'iPad Pro 11" 2018 (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/38a8bfb0849268c51c3dda26884beba2.jpg',
            ],
            [
                'name' => 'iPad Pro 12.9" 2018',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/38a8bfb0849268c51c3dda26884beba2.jpg',
            ],
            [
                'name' => 'iPad Pro 12.9" 2018 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/38a8bfb0849268c51c3dda26884beba2.jpg',
            ],
            [
                'name' => 'iPad Pro 12.9" 2018 (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/38a8bfb0849268c51c3dda26884beba2.jpg',
            ],
            [
                'name' => 'iPad Pro 12.9" 2020 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/d80a3ed7a8d9e1c6d73796a077da90cf.jpg',
            ],
            [
                'name' => 'iPad Pro 12.9" 2020 (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/d80a3ed7a8d9e1c6d73796a077da90cf.jpg',
            ],
            [
                'name' => 'iPad Pro 11" 2020 (Wi-Fi)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/ed5554b17ce866a989499b7e5b2f1801.jpg',
            ],
            [
                'name' => 'iPad Pro 11" 2020 (Wi-Fi + Cellular)',
                'product_category_id' => 2,
                'image' => 'https://icolor.co.id/assets/media/sparepart/ed5554b17ce866a989499b7e5b2f1801.jpg',
            ],

            [
                'name' => 'Macbook Pro 13 A1706/A1989',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/8a42b28888c422ec30f43b792c7854a6.jpg',
            ],
            [
                'name' => 'New Macbook Air 13 1932',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/c1765320679392e9b5644dd58ba910a8.jpg',
            ],
            [
                'name' => 'All New Macbook 12 A1534 (2015-2018)',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/da68c389e1318b51e617a5e9fd3882a3.png',
            ],
            [
                'name' => 'Macbook Pro 13 A1708 Without Touchbar (2016-2017)',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/0fabd8ef743ba57f3f4d20e0fc3f7b67.png',
            ],
            [
                'name' => 'Macbook Pro 15 A1707/ A1990 With Touchbar (2016-20',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/8232d1bcc497f6adae6747442f6ca0e3.png',
            ],
            [
                'name' => 'Macbook Air 13 A1466',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/a7656c1685bce720a4902a0d4cad73fa.png'
            ],
            [
                'name' => 'Macbook Pro Retina 13 A1425',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/9e80a84d789682d9acf287ed89329286.png',
            ],
            [
                'name' => 'Macbook Pro 13 A1278',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/7a67c939d08c1d5f6a12884ed50361d7.png'
            ],
            [
                'name' => 'Macbook Pro 13 A1502 (2013-2015)',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/1d1493933d1f4d62cba08968ded5964e.png',
            ],
            [
                'name' => 'Macbook Pro 15" A1286 (2008)',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/fd5f2a09f858e8a0192b2884911c17ac.jpeg',
            ],
            [
                'name' => 'Macbook Air A1304 (mid 2009)',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/daadde1f837403ab3e4b6814faf4b2b9.jpeg',
            ],
            [
                'name' => 'Macbook Air 11" (2010)',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/194219f1aa50400ac441af38731c4652.jpeg',
            ],
            [
                'name' => 'Macbook air 11" A1465 ( 2014)',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/dff4a037315a3df6742f3d1c34756cff.jpeg',
            ],
            [
                'name' => 'Macbook air 13" A2179 (2020)',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/73bf633c885425edf90b213d11853efa.jpeg',
            ],
            [
                'name' => 'Macbook Pro 17" A1297 (2009)',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/241caa63c5b7be89cd5abfb38d414d9e.jpeg',
            ],
            [
                'name' => 'Macbook Pro Retina 15" A1398 (2012-2018)',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/adcebd047b02f399a8538f6da3812ccd.jpeg',

            ],
            [
                'name' => 'Macbook Pro 13" A2159 (2019-2020)',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/4c0a4253f26680d0006d1ccdcaa7474b.jpeg',
            ],
            [
                'name' => 'Macbook Pro 15" A1990 (2018-2019)',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/fc3bf90dfc5c59f22120e1830f732b4a.jpeg'
            ],
            [
                'name' => 'Macbook Pro 13" A1989 (2018-2020)',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/454f921c3e584a0e6adc3b3df0b25af8.jpeg'
            ],
            [
                'name' => 'Macbook Pro 16" A2141',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/3a0c7f489a20ddf70cd19d1f3794a9ce.jpeg'
            ],
            [
                'name' => 'Macbook Pro 13" A2289',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/ff8f358e10b30cbc644f1a4b7e431fd3.jpeg'
            ],
            [
                'name' => 'Macbook Pro 13" A2251',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/db538348a3e76900bcbb4a94efc2536f.jpeg'
            ],
            [
                'name' => 'Mac Pro A1186 (2006-2010)',
                'product_category_id' => 3,
                'image' => null,
            ],
            [
                'name' => 'MACBOOK PRO13 INCH 2020 A2289',
                'product_category_id' => 3,
                'image' => null,
            ],
            [
                'name' => 'Macbook Air 11 A1495',
                'product_category_id' => 3,
                'image' => 'https://icolor.co.id/assets/media/sparepart/150931c66bd038b1e42f311f75bcb3d8.png',
            ],

            [
                'name' => 'iMac (21.5 inch, Late 2012)',
                'product_category_id' => 4,
                'image' => 'https://icolor.co.id/assets/media/sparepart/cda27065bdc203e40a2d9a4a8971041b.jpg',
            ],
            [
                'name' => 'iMac (27 inch, Late 2012)',
                'product_category_id' => 4,
                'image' => 'https://icolor.co.id/assets/media/sparepart/31af3b9a197ebb3f59cbb867ca326a54.jpg'
            ],
            [
                'name' => 'iMac (21.5 inch, early 2013)',
                'product_category_id' => 4,
                'image' => 'https://icolor.co.id/assets/media/sparepart/cda27065bdc203e40a2d9a4a8971041b.jpg',
            ],
            [
                'name' => 'iMac (21.5 inch, late 2013)',
                'product_category_id' => 4,
                'image' => 'https://icolor.co.id/assets/media/sparepart/cda27065bdc203e40a2d9a4a8971041b.jpg',
            ],
            [
                'name' => 'iMac (27 inch, Late 2013)',
                'product_category_id' => 4,
                'image' => 'https://icolor.co.id/assets/media/sparepart/31af3b9a197ebb3f59cbb867ca326a54.jpg'
            ],
            [
                'name' => 'iMac (21.5 inch, Mid 2014)',
                'product_category_id' => 4,
                'image' => 'https://icolor.co.id/assets/media/sparepart/cda27065bdc203e40a2d9a4a8971041b.jpg',
            ],
            [
                'name' => 'iMac (Retina 5K 27 inch, Late 2014)',
                'product_category_id' => 4,
                'image' => 'https://icolor.co.id/assets/media/sparepart/31af3b9a197ebb3f59cbb867ca326a54.jpg'
            ],
            [
                'name' => 'iMac (Retina 5K 27 inch, Mid 2015)',
                'product_category_id' => 4,
                'image' => 'https://icolor.co.id/assets/media/sparepart/31af3b9a197ebb3f59cbb867ca326a54.jpg'
            ],
            [
                'name' => 'imac mini',
                'product_category_id' => 4,
                'image' => null,
            ],
            [
                'name' => 'Imac (Retina 4K, 21.5 Inch, Late 2015)',
                'product_category_id' => 4,
                'image' => 'https://icolor.co.id/assets/media/sparepart/6262a4cf98c694592b96e774486f5715.png',
            ],
            [
                'name' => 'Imac (21.5 Inch, Late 2015)',
                'product_category_id' => 4,
                'image' => 'https://icolor.co.id/assets/media/sparepart/dc6b95777b573486b008d1b2b2905018.jpg'
            ],
            [
                'name' => 'iMac (Retina 5K 27 inch, Late 2015)',
                'product_category_id' => 4,
                'image' => 'https://icolor.co.id/assets/media/sparepart/b81f375c720e42d5838dc43ce29b7294.jpg'
            ],
            [
                'name' => 'iMac (Retina 5K 27 inch, 2017)',
                'product_category_id' => 4,
                'image' => 'https://icolor.co.id/assets/media/sparepart/b81f375c720e42d5838dc43ce29b7294.jpg'
            ],
            [
                'name' => 'iMac (21.5 inch, 2017)',
                'product_category_id' => 4,
                'image' => 'https://icolor.co.id/assets/media/sparepart/dc6b95777b573486b008d1b2b2905018.jpg'
            ],
            [
                'name' => 'iMac (Retina 4K 21.5 inch, 2017)',
                'product_category_id' => 4,
                'image' => 'https://icolor.co.id/assets/media/sparepart/dc6b95777b573486b008d1b2b2905018.jpg'
            ],
            [
                'name' => 'iMac Pro (2017)',
                'product_category_id' => 4,
                'image' => 'https://icolor.co.id/assets/media/sparepart/b81f375c720e42d5838dc43ce29b7294.jpg'
            ],
            [
                'name' => 'iMac (Retina 4K 21.5 inch, 2019)',
                'product_category_id' => 4,
                'image' => 'https://icolor.co.id/assets/media/sparepart/dc6b95777b573486b008d1b2b2905018.jpg'
            ],
            [
                'name' => 'iMac (Retina 4K 27 inch, 2019)',
                'product_category_id' => 4,
                'image' => 'https://icolor.co.id/assets/media/sparepart/b81f375c720e42d5838dc43ce29b7294.jpg'
            ],
        ];

        foreach ($datas as $data) {
            $product = new Product();
            $product->name = $data['name'];
            $product->product_category_id = $data['product_category_id'];
            $product->save();

            if ($data['image'] !== null) {
                $product->addMediaFromUrl($data['image'])->toMediaCollection('image');
            }
        }
    }
}