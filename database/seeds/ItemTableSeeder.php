<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'user_id' => 2,
                'name' => 'bantal cinta',
                'price' => 50000,
                'tags' => 'bantal,cushion'
            ]
        ]);
        // ntr isi banyak
    }
}
