<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeCategoriesTableSeeder extends Seeder
{

    public function run()
    {


        DB::table('type_categories')->delete();

        DB::table('type_categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Economia',
                'description' => NULL,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 09:39:22',
                'updated_at' => '2025-09-25 09:39:22',
            ),
        ));


    }
}