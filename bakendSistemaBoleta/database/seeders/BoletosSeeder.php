<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BoletosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('boletos')->insert([
        	[
	        	'Nombre' => 'BIG TIME RUSH ',
	        	'Precio' => 50000,
	        	'Descripcion' => 'Quienes',
                'created_at'=> date('Y-m-d H:i:s')
        	]
        ]);
    }
}
