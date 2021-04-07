<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;

class CodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Code::loadCodesFromCSV();
    }
}
