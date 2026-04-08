<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('categories')->delete();

        DB::table('categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Nacional',
                'description' => 'Notícias do tipo economia, do mercado nacional.',
                'typecategory_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 09:40:21',
                'updated_at' => '2025-09-25 09:40:21',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Internacional',
                'description' => 'Notícias do tipo economia, do mercado internacional.',
                'typecategory_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-09-25 09:40:52',
                'updated_at' => '2025-09-25 09:40:52',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Negocios',
                'description' => NULL,
                'typecategory_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-10-06 10:08:35',
                'updated_at' => '2025-10-06 10:08:35',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Tecnologia',
                'description' => NULL,
                'typecategory_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-10-06 10:09:03',
                'updated_at' => '2025-10-06 10:09:03',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Economia Azul',
                'description' => NULL,
                'typecategory_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-10-23 13:55:25',
                'updated_at' => '2025-10-23 13:55:25',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Economia Verde',
                'description' => NULL,
                'typecategory_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-10-23 13:55:38',
                'updated_at' => '2025-10-23 13:55:38',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Recursos Minerais',
                'description' => NULL,
                'typecategory_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-10-23 13:55:47',
                'updated_at' => '2025-10-23 13:55:47',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Agronegocio',
                'description' => NULL,
                'typecategory_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-10-23 13:55:58',
                'updated_at' => '2025-10-23 13:55:58',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Sector Bancario',
                'description' => NULL,
                'typecategory_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2025-10-23 13:58:18',
                'updated_at' => '2025-10-23 13:58:18',
            ),
        ));


    }
}