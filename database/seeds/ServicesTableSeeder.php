<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
    		array(
    			'id' => 1,
    			'title1_spanish' => 'Consultorías de Economía',
    			'title1_english' => 'Economy Consulting',
    			'content1_spanish' => 'Realizamos estudios micro y macroeconómicos orientados a simplificar el entorno y determinar las variables relevantes, para que nuestros clientes cuenten con información clara y confiable.',
    			'content1_english' => 'We carry out micro and macroeconomic studies aimed at simplifying the environment and determining the relevant variables, so that our clients have clear and reliable information.',
    			'title2_spanish' => 'Consultorías de Finanzas',
    			'title2_english' => 'Finance Consulting',
    			'content2_spanish' => 'Con herramientas financieras personalizadas buscamos que nuestros clientes manejen sus fondos con transparencia, eficiencia, eficacia y que cuenten con información relevante sobre su gestión.',
    			'content2_english' => 'With personalized financial tools we seek that our clients manage their funds with transparency, efficiency, effectiveness and that they have relevant information on their management.',
                'title3_spanish' => 'Consultorías de Inversión',
    			'title3_english' => 'Investment Consulting',
    			'content3_spanish' => 'Para todas las etapas de una inversión, respaldamos con adecuadas herramientas de evaluación de rendimientos, de minimizacion de riesgos y de fuentes de financiamiento.',
    			'content3_english' => 'For all stages of an investment, we support with adequate performance evaluation tools, risk minimization and financing sources.',
    			'picture1' => '1.jpg',
    			'picture2' => '2.jpg',
    			'picture3' => '3.jpg'
    		)
    	];
    	DB::table('services')->insert($services);
    }
}
