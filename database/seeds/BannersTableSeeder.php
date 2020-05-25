<?php

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
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
    			'banner1_spanish' => 'Economía<br />Finanzas<br />Inversión',
    			'banner1_english' => 'Economy<br />Finance<br />Investment',
    			'banner2_spanish' => 'Consultorías para Empresas,<br />Inversores e Instituciones',
    			'banner2_english' => 'Consulting for Companies,<br />Investors and Institutions',
    			'banner3_spanish' => 'Compromiso,<br />Profesionalismo,<br />Responsabilidad y Creatividad',
    			'banner3_english' => 'Commitment,<br />Professionalism,<br />Responsibility and Creativity',
    			'picture1' => 'banner2.jpg',
    			'picture2' => 'banner4.jpg',
    			'picture3' => 'banner3.jpg'
    		)
    	];
    	DB::table('banners')->insert($banners);
    }
}
