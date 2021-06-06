<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return array
     */
    public function run()
    {
        $international = array();
        #  database table field name = form field name using Request
        $international['category_en']    =   'International';
        $international['category_urdu']  =   'بین اقوامی';
        $category1 = DB::table('categories')->insert($international);

        $sports = array();
        #  database table field name = form field name using Request
        $sports['category_en']    =   'Sports';
        $sports['category_urdu']  =   'کھیلوں';
        $category2 = DB::table('categories')->insert($sports);

        $business = array();
        #  database table field name = form field name using Request
        $business['category_en']    =   'Business';
        $business['category_urdu']  =   'کاروبار';
        $category3 = DB::table('categories')->insert($business);

        $entertainment = array();
        #  database table field name = form field name using Request
        $entertainment['category_en']    =   'Entertainment';
        $entertainment['category_urdu']  =   'تفریح';
        $category4 = DB::table('categories')->insert($entertainment);


    }
}
