<?php

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banners = [
    		array(
    			'id' => 1,
    			'banner1_spanish' => 'Economía Finanzas Inversión',
    			'banner1_english' => 'Economics Finance Investment',
    			'banner2_spanish' => 'Consultorías para empresas, inversores e instituciones',
    			'banner2_english' => 'Consulting for companies, investors and institutions',
    			'banner3_spanish' => 'Compromiso, profesionalismo, responsabilidad y  creatividad son valores que nos guían',
    			'banner3_english' => 'Commitment, professionalism, responsibility and creativity are values ​​that guide us',
    			'picture1' => 'banner2.jpg',
    			'picture2' => 'banner1.png',
    			'picture3' => 'about_banner.png'
    		)
    	];
    	DB::table('banners')->insert($banners);
    }
}
