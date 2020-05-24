<?php

use Illuminate\Database\Seeder;

class InfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $info = [
    		array(
    			'id' => 1,
    			'address' => 'Córdoba-Argentina (CP 5018)',
    			'email' => 'info@sparen.com.ar',
    			'phone' => NULL,
    			'facebook' => NULL,
    			'twitter' => NULL
    		)
    	];
    	DB::table('info_contacts')->insert($info);
    }
}
