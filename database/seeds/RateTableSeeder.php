<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RateTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('rates')->delete();

        DB::table('rates')->insert(array (
            0 =>
            array (
                'id' => 1,
                'rate' => 900,
                'deleted_at' => NULL,
                'created_at' => '2025-12-01 10:03:42',
                'updated_at' => '2025-12-01 10:03:42',
            ),
        ));
    }
}
