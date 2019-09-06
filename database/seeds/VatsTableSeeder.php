<?php

use Illuminate\Database\Seeder;

class VatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vats')->insert([
            'name' => 'Buisness Tax',
            'vat%' => 10,
            'fine%'=> 15,
            'route'=> 'buisness'
        ]);

        DB::table('vats')->insert([
            'name' => 'Industrial Tax',
            'vat%' => 10,
            'fine%'=> 15,
            'route'=> 'industrial'
        ]);
    }
}
