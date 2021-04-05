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
        DB::table('products')->insert(
            [
                [
                    'name'=>'Redmi MI',
                    'price'=>'200',
                    'description'=>'4 GB ram and 64 GB Storage and more features',
                    'category'=>'Mobile',
                    'gallery'=>'https://i.gadgets360cdn.com/large/vivo_x60t_1617363513664.jpg?downsize=950:*&output-quality=80&output-format=webp'
                ],
                [
                    'name'=>'Laptop',
                    'price'=>'400',
                    'description'=>'LG Ultra Gear 17 Laptop With 11th-Gen Tiger Lake CPU, Nvidia GeForce GTX 1650i Graphics Launched',
                    'category'=>'PC',
                    'gallery'=>'https://i.gadgets360cdn.com/large/LG_Ultra_Gear_17_main_website_1617362199549.jpg?downsize=950:*&output-quality=80&output-format=webp'
                ],
                [
                    'name'=>'REDMI MI TV',
                    'price'=>'500',
                    'description'=>'Itel G3230IE, G4330IE, G4334IE, G5534IE Android TV Models With Dolby Audio Launched in India',
                    'category'=>'TV',
                    'gallery'=>'https://i.gadgets360cdn.com/large/Itel_G_series_launch_small_1616064352787.jpg?downsize=234:176&output-quality=80&output-format=webp'
                ],
                [
                    'name'=>'PS 5',
                    'price'=>'200',
                    'description'=>'4 GB ram and 64 GB Storage and more features',
                    'category'=>'Gaming',
                    'gallery'=>'https://i.gadgets360cdn.com/large/pubg_lite_terminate_facebook_small_1617260318540.jpg?downsize=234:176&output-quality=80&output-format=webp'
                ]
            ]
        );
    }
}
