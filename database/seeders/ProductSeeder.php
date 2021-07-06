<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('products')->insert([
            [
                "name" => 'Infinix Hot 9 Play',
                "price" => "2500",
                "description" => "A smartphone with 4g network, 6gb ram, android 8 os, 16 gb storage and many more",
                "category" => "Electronics",
                "gallery" => "https://www.droidafrica.net/wp-content/uploads/2020/04/Infinix-Hot-9-Play-600x600.jpg",
            ],

            [
                "name" => 'Techno Phantom 9',
                "price" => "3600",
                "description" => "A smartphone with 4g network, 8gb ram, android 8 os, 32 gb Storage and many more",
                "category" => "Electronics",
                "gallery" => "https://www.gizmochina.com/wp-content/uploads/2019/07/TECNO-Phantom-9-500x500.jpg",
            ],

            [
                "name" => 'Xiomi mi 11',
                "price" => "4100",
                "description" => "A smartphone with 4g network, 4gb ram, android 10 os, 64 gb sorage and many more",
                "category" => "Electronics",
                "gallery" => "https://www.kibotek.com/wp-content/uploads/2021/03/kiboTEK_mi11_lite_008.png",
            ],

            [
                "name" => 'Huawei P40 ',
                "price" => "4000",
                "description" => "A smartphone with 5g network, 8gb ram, harmony os, 64gb and many more",
                "category" => "Electronics",
                "gallery" => "https://img.router-switch.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/h/u/huawei_p40_pro_5g_phone.jpg",
            ],

            [
                "name" => 'Hisense',
                "price" => "6000",
                "description" => "A smart TV with 5g network, 8gb ram, android os, 64gb and many more",
                "category" => "Electronics and Home Appliances",
                "gallery" => "https://www.monbareme.com/wp-content/uploads/2020/03/Hisense-49P4-50-Inch-127cm-Smart-Full-HD-LED-LCD-TV-Hero-high.jpeg",
            ],
        ]);
    }
}
