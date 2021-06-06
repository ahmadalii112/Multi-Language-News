<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//--------------------------------------------International-----------------------------------------------
        $international1 = array();
        #  database table field name = form field name using Request
        $international1['subcategory_en'] = 'Asia';
        $international1['subcategory_urdu'] = 'ایشیا';
        $international1['category_id'] = 1;
        DB::table('subcategories')->insert($international1);

        $international2 = array();
        #  database table field name = form field name using Request
        $international2['subcategory_en'] = 'Europe';
        $international2['subcategory_urdu'] = 'یورپ';
        $international2['category_id'] = 1;
        DB::table('subcategories')->insert($international2);

        $international3 = array();
        #  database table field name = form field name using Request
        $international3['subcategory_en'] = 'Americas';
        $international3['subcategory_urdu'] = 'امریکہ';
        $international3['category_id'] = 1;
        DB::table('subcategories')->insert($international3);

        $international4 = array();
        #  database table field name = form field name using Request
        $international4['subcategory_en'] = 'Middle East';
        $international4['subcategory_urdu'] = 'مشرق وسطی';
        $international4['category_id'] = 1;
        DB::table('subcategories')->insert($international4);

        $international5 = array();
        #  database table field name = form field name using Request
        $international5['subcategory_en'] = 'China';
        $international5['subcategory_urdu'] = 'چین';
        $international5['category_id'] = 1;
        DB::table('subcategories')->insert($international5);
//--------------------------------------------Sports-----------------------------------------------
        $sport1 = array();
        #  database table field name = form field name using Request
        $sport1['subcategory_en'] = 'Cricket';
        $sport1['subcategory_urdu'] = 'کرکٹ';
        $sport1['category_id'] = 2;
        DB::table('subcategories')->insert($sport1);

        $sport2 = array();
        #  database table field name = form field name using Request
        $sport2['subcategory_en'] = 'Football';
        $sport2['subcategory_urdu'] = 'فٹ بال';
        $sport2['category_id'] = 2;
        DB::table('subcategories')->insert($sport2);
//--------------------------------------------Business---------------------------------------------------
        $business1 = array();
        #  database table field name = form field name using Request
        $business1['subcategory_en'] = 'Local';
        $business1['subcategory_urdu'] = 'مقامی';
        $business1['category_id'] = 3;
        DB::table('subcategories')->insert($business1);

        $business2 = array();
        #  database table field name = form field name using Request
        $business2['subcategory_en'] = 'Global';
        $business2['subcategory_urdu'] = 'عالمی';
        $business2['category_id'] = 3;
        DB::table('subcategories')->insert($business2);
//--------------------------------------------Entertainment---------------------------------------------------
        $entertainment1 = array();
        #  database table field name = form field name using Request
        $entertainment1['subcategory_en'] = 'Bollywood';
        $entertainment1['subcategory_urdu'] = 'بالی ووڈ';
        $entertainment1['category_id'] = 4;
        DB::table('subcategories')->insert($entertainment1);

        $entertainment2 = array();
        #  database table field name = form field name using Request
        $entertainment2['subcategory_en'] = 'Hollywood';
        $entertainment2['subcategory_urdu'] = 'ہالی ووڈ';
        $entertainment2['category_id'] = 4;
        DB::table('subcategories')->insert($entertainment2);

        $entertainment3 = array();
        #  database table field name = form field name using Request
        $entertainment3['subcategory_en'] = 'Lollywood';
        $entertainment3['subcategory_urdu'] = 'لالی ووڈ';
        $entertainment3['category_id'] = 4;
        DB::table('subcategories')->insert($entertainment3);
    }
}
