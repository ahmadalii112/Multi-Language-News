<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */



    public function run()
    {
        $posts = array();
        #  database table field name = form field name using Request
        $posts['category_id']       = 1;
        $posts['subcategory_id']    = 2;
        $posts['district_id']       = 1;
        $posts['subdistrict_id']    = 2;
        $posts['user_id']           = 1;
        $posts['title_en']          = 'Post 1';
        $posts['title_urdu']        = 'پوسٹ 1';
        $posts['image']             = 'http://placehold.it/150x150';
        $posts['details_en']        = 'Detail 1';
        $posts['details_urdu']      = 'تفصیل 1';
        $posts['tags_en']           = 'tag 1';
        $posts['tags_urdu']         = 'ٹیگ';
        $posts['headline']          = 1;
        $posts['first_section']     = 1;
        $posts['first_section_thumbnail'] = 1;
        $posts['bigthumbnail']      = 1;
        $posts['post_date']         = date('d-m-y');
        $posts['post_month']        = date('F');
        DB::table('posts')->insert($posts);

        $posts1 = array();
        #  database table field name = form field name using Request
        $posts1['category_id']       = 2;
        $posts1['subcategory_id']    = 3;
        $posts1['district_id']       = 2;
        $posts1['subdistrict_id']    = 3;
        $posts1['user_id']           = 1;
        $posts1['title_en']          = 'Post 2';
        $posts1['title_urdu']        = 'پوسٹ 2';
        $posts1['image']             = 'http://placehold.it/150x150';
        $posts1['details_en']        = 'Detail 2';
        $posts1['details_urdu']      = 'تفصیل 2';
        $posts1['tags_en']           = 'tag 2';
        $posts1['tags_urdu']         = 'ٹیگ 2';
        $posts1['headline']          = 0;
        $posts1['first_section']     = 1;
        $posts1['first_section_thumbnail'] = 0;
        $posts1['bigthumbnail']      = 0;
        $posts1['post_date']         = date('d-m-y');
        $posts1['post_month']        = date('F');
        DB::table('posts')->insert($posts1);
    }
}
