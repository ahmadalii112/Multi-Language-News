<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $socialSiteLinks = array();
        #  database table field name = form field name using Request
        $socialSiteLinks['facebook'] = 'https://www.facebook.com/';
        $socialSiteLinks['instagram'] = 'https://www.instagram.com/';
        $socialSiteLinks['twitter'] = 'https://twitter.com/';
        $socialSiteLinks['linkedin'] = 'https://www.linkedin.com/';
        $socialSiteLinks['youtube'] = 'https://www.youtube.com/channel/UC2HFPpU7-qCPelVmtE_7SEA';
        DB::table('socials')->insert($socialSiteLinks);
//        ----------------------------------------------------------------------------------------------

        $liveTv = array();
        #  database table field name = form field name using Request
        $liveTv['embed_code'] = '<iframe width="560" height="315" src="https://www.youtube.com/embed/Rm8ckvIsN9M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        $liveTv['status'] = 1;
        DB::table('livetv')->insert($liveTv);

//        ----------------------------------------------------------------------------------------------
        $seo = array();

        $seo['meta_author']=null;
        $seo['meta_title']=null;
        $seo['meta_keyword']=null;
        $seo['meta_description']=null;
        $seo['google_analytics']=null;
        $seo['google_verification']=null;
        $seo['alexa_analytics']=null;
        DB::table('seos')->insert($seo);
//        ----------------------------------------------------------------------------------------------
        $notice = array();
        $notice['notice']=null;
        DB::table('notice')->insert($notice);
//        ----------------------------------------------------------------------------------------------
        $website = array();
        $website['website_name']=null;
        DB::table('website')->insert($website);
//        ----------------------------------------------------------------------------------------------
        $prayers = array();
        $prayers['fajar']='4:36 AM';
        $prayers['zohar']='12:08 PM';
        $prayers['asar']='4:34 PM';
        $prayers['maghrib']='6:19 PM';
        $prayers['isha']='7:41 PM';
        DB::table('prayers')->insert($prayers);
    }
}
