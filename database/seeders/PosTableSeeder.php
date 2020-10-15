<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('posts')->inset([
          'name' => 'insert gun name',
          'size' => '1',
          'type' => 'insert gun tyjpe',
          'price' => '1'
        ]);
        //
    }
}
