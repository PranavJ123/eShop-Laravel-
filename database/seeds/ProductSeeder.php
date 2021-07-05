<?php

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
        DB::table('products')->insert([
            [
                'name' =>'Redmi Mobile',
                'price' =>'10000',
                'category' =>'Mobile',
                'description' =>' With the new Redmi Note 10 family, Xiaomi is offering more premium features than ever, but prices have also risen',
                'gallery' =>'https://i02.appmifile.com/349_operator_in/04/03/2021/2c055413f975744906c655703aa812c1.png'
            ],
            [
            'name' =>'Realme mobile',
            'price' =>'12000',
            'category' =>'Mobile',
            'description' =>'Realme is an offshoot of the Chinese brand Oppo, and aims to provide smartphones under Rs. 20,000 for the young people around the world',
            'gallery' =>'https://image01.realme.net/general/20200807/1596789155554.png'
            ],
            [
            'name' =>'Panasonic TV',
            'price' =>'18000',
            'category' =>'TV',
            'description' =>'The Panasonic Smart TV line-up gives you more from your Internet connection.',
            'gallery' =>'https://image.shutterstock.com/image-photo/flatscreen-tv-set-displaying-logo-260nw-1906816321.jpg'
            ],
            [
            'name' =>'LG TV',
            'price' =>'30000',
            'category' =>'TV',
            'description' =>'With their sleek, clean styling and design, LG TVs are the focal point of any room',
            'gallery' =>'https://www.lg.com/in/images/tvs/md06117716/gallery/01-1100-V01.jpg'
            ],
            [
            'name' =>'Godrej Fridge',
            'price' =>'22000',
            'category' =>'Fridge',
            'description' =>' Godrej uses modern technology and delivers at affordable prices that has contributed much to its brand value. Godrej refrigerators are available in many colors and designs',
            'gallery' =>'https://images-na.ssl-images-amazon.com/images/I/71FxWNuC7sL._SX466_.jpg'
            ]
            
        ]);
    }
}
