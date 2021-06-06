<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = array();
        #  database table field name = form field name using Request
        $data1['district_en']    =   'Punjab';
        $data1['district_urdu']  =   'پنجاب';
        $district3 = DB::table('districts')->insert($data1);

        $data2 = array();
        #  database table field name = form field name using Request
        $data2['district_en']    =   'Sindh';
        $data2['district_urdu']  =   'سندھ۔';
        $district2 = DB::table('districts')->insert($data2);

        $data3 = array();
        #  database table field name = form field name using Request
        $data3['district_en']    =   'Balochistan';
        $data3['district_urdu']  =   'بلوچستان';
        $district3 = DB::table('districts')->insert($data3);

        $data4 = array();
        #  database table field name = form field name using Request
        $data4['district_en']    =   'Khyber Pakhtunkhwa';
        $data4['district_urdu']  =   'خیبر پختونخوا';
        $district4 = DB::table('districts')->insert($data4);
    }
}
