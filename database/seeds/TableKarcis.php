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
        $x = "FES000";
        for($i = 0; $i < 250; $i++) {
            // echo $x++,'<br />';
            DB::table('karcis')->insert([
                'id_karcis' => $x++,
                'id_tiket' => 1,
                'id_penjaga' => "1",
                'status' => 0,
            ]);
        }
    }
}
