<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            ['name' => 'bantal'], ['name' => 'cushion'], ['name' => 'celana panjang'], ['name' => 'celana panjang pria'],
            ['name' => 'kemeja'], ['name' => 'kemeja wanita'], ['name' => 'kemeja pria']
        ]);
    }
}
