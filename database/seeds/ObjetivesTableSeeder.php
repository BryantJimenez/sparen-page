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
    			'content1_spanish' => 'Estudios de Mercado,<br />Informes Sectoriales,<br />Análisis de Impacto de Políticas,<br />Proyecciones de Demanda,<br />Estudios de Sensibilidad,<br />Beneficios y Costos',
    			'content1_english' => 'Market Analisys,<br />Sectorial Reports,<br />Impact Analysis,<br />Forecasting,<br />Sensitivity Analysis,<br />Profit & Loss',
    			'title2_spanish' => 'Finanzas',
    			'title2_english' => 'Finance',
    			'content2_spanish' => 'Planeamiento Financiero Estratégico,<br />Optimización de Tesorería,<br />Presupuestos y Flujos de caja,<br />Inversión y Riesgo,<br />Diversificación,<br />Control y Corrección de Desvíos',
    			'content2_english' => 'Strategic Financial Planning,<br />Treasury Optimization,<br />Financial Budgeting and Cash Flows,<br />Investment Risk Management,<br />Diversification,<br />Deviations Control',
    			'title3_spanish' => 'Inversión',
    			'title3_english' => 'Investment',
    			'content3_spanish' => 'Planes y Modelos de Negocio,<br />Fusiones y Adquisiciones M&A,<br />Valuaciones de Empresas,<br />Evaluación de Proyectos de Inversión,<br />Estudios de Factibilidad,<br />Análisis y Gestión del Riesgo,<br />Fuentes de Financiamiento,<br />Inversiones Patrocinadas',
    			'content3_english' => 'Business Plan,<br />M&A Mergers and Acquisitions,<br />Valuation,<br />Investment Projects Analysis,<br />Feasibility Studies,<br />Risk Analysis,<br />Sources of Founding,<br />Sponsored Investments',
    			'picture' => 'banner2.jpg'
    		)
    	];
    	DB::table('objectives')->insert($objectives);
    }
}
