<?php

use Illuminate\Database\Seeder;

class ObjetivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objectives = [
    		array(
    			'id' => 1,
    			'title1_spanish' => 'Economía',
    			'title1_english' => 'Economy',
    			'content1_spanish' => 'Estudios de Mercado, Informes Sectoriales, Análisis de Impacto de Políticas, Proyecciones de Demanda, Estudios de Sensibilidad, Beneficios y Costos',
    			'content1_english' => 'Market Studies, Sector Reports, Policy Impact Analysis, Demand Projections, Sensitivity Studies, Benefits and Costs',
    			'title2_spanish' => 'Finanzas',
    			'title2_english' => 'Finance',
    			'content2_spanish' => 'Planeamiento Financiero Estratégico, Optimización de Tesorería, Presupuestos y Flujos de caja, Inversión y Riesgo, Diversificación, Control y Corrección de Desvíos',
    			'content2_english' => 'Strategic Financial Planning, Treasury Optimization, Budgets and Cash Flows, Investment and Risk, Diversification, Control and Correction of Deviations',
    			'title3_spanish' => 'Inversión',
    			'title3_english' => 'Investment',
    			'content3_spanish' => 'Planes y Modelos de Negocio, Fusiones y Adquisiciones M&A, Valuaciones de Empresas, Evaluación de Proyectos de Inversión, Estudios de Factibilidad, Análisis y Gestión del Riesgo, Fuentes de F',
    			'content3_english' => 'Business Plans and Models, M&A Mergers and Acquisitions, Business Valuations, Investment Project Evaluation, Feasibility Studies, Risk Analysis and Management, Financing Sources, Sponsored In',
    			'picture' => 'banner2.jpg'
    		)
    	];
    	DB::table('objectives')->insert($objectives);
    }
}