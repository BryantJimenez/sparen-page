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
        $abouts = [
    		array(
    			'id' => 1,
    			'paragraph_spanish' => 'Compañía especializada en brindar consultorías en Economía, Finanzas e Inversión a Empresas, Inversores e Instituciones.<br /> A través de un estudio personalizado y objetivo proponemos soluciones concretas a las necesidades de nuestros clientes agregando valor y simplificando la realidad económica.<br /> Valores que nos guían para satisfacer los requerimientos de nuestros clientes con eficacia y eficiencia:',
    			'paragraph_english' => 'Company specialized in providing consulting in Economics, Finance and Investment to Companies, Investors and Institutions.<br /> Through a personalized and objective study, we propose concrete solutions to the needs of our clients, adding value and simplifying the economic reality.<br /> Values ​​that guide us to satisfy the requirements of our clients effectively and efficiently:',
    			'list1_spanish' => 'Compromiso',
    			'list1_english' => 'Commitment',
    			'list2_spanish' => 'Profesionalismo',
    			'list2_english' => 'Professionalism',
    			'list3_spanish' => 'Responsabilidad',
    			'list3_english' => 'Responsibility',
    			'list4_spanish' => 'creatividad',
    			'list4_english' => 'Creativity',
    			'picture' => 'logo.jpg'
    		)
    	];
    	DB::table('abouts')->insert($abouts);
    }
}
