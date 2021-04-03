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
            'name'=>'Redmi MI',
            'price'=>'200',
            'description'=>'4 GB ram and 64 GB Storage and more features',
            'catgegory'=>'mobile',
        ]);
    }
}
