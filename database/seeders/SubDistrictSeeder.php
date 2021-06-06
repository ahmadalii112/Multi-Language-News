<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubDistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $punjab1 = array();
        #  database table field name = form field name using Request
        $punjab1['subdistrict_en']    =   'Lahore';
        $punjab1['subdistrict_urdu']  =   'لاہور';
        $punjab1['district_id']  =   1;
        DB::table('subdistricts')->insert($punjab1);

        $punjab2 = array();
        #  database table field name = form field name using Request
        $punjab2['subdistrict_en'] = 'Sargodha';
        $punjab2['subdistrict_urdu'] = 'سرگودھا';
        $punjab2['district_id'] = 1;
        DB::table('subdistricts')->insert($punjab2);

        $sind1 = array();
        #  database table field name = form field name using Request
        $sind1['subdistrict_en']    =   'Karachi';
        $sind1['subdistrict_urdu']  =   'کراچی';
        $sind1['district_id']  =   2;
        DB::table('subdistricts')->insert($sind1);

        $sind2 = array();
        #  database table field name = form field name using Request
        $sind2['subdistrict_en']    =   'Hyderabad';
        $sind2['subdistrict_urdu']  =   'حیدرآباد';
        $sind2['district_id']  =   2;
        DB::table('subdistricts')->insert($sind2);



        $balochistan1 = array();
        #  database table field name = form field name using Request
        $balochistan1['subdistrict_en']    =   'Quetta';
        $balochistan1['subdistrict_urdu']  =   'کوئٹہ';
        $balochistan1['district_id']  =   3;
        DB::table('subdistricts')->insert($balochistan1);


        $balochistan2 = array();
        #  database table field name = form field name using Request
        $balochistan2['subdistrict_en']    =   'Gwadar';
        $balochistan2['subdistrict_urdu']  =   'گوادر';
        $balochistan2['district_id']  =   3;
        DB::table('subdistricts')->insert($balochistan2);



        $khyber1 = array();
        #  database table field name = form field name using Request
        $khyber1['subdistrict_en']    =   'Peshawar';
        $khyber1['subdistrict_urdu']  =   'پشاور';
        $khyber1['district_id']  =   4;
        DB::table('subdistricts')->insert($khyber1);

        $khyber2 = array();
        #  database table field name = form field name using Request
        $khyber2['subdistrict_en']    =   'Abbottabad';
        $khyber2['subdistrict_urdu']  =   'ایبٹ آباد';
        $khyber2['district_id']  =   4;
        DB::table('subdistricts')->insert($khyber2);



    }

}
