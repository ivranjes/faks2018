<?php

use Illuminate\Database\Seeder;

class ZupanijasTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function down()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call (ZupanijasTableSeeder::class);
         $this->call (MjestosTableSeeder::class);
    }
}
