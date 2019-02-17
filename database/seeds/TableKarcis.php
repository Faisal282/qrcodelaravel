<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TableKarcis extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $x = "130000000001";
        for($i = 1; $i <= 600; $i++) {
            // echo $x++,'<br />';
            DB::table('karcis')->insert([
                'id_karcis' => $x++,
                'id_tiket' => 3,
                'id_penjaga' => 1,
                'status' => 0,
            ]);
        }
    }
}
