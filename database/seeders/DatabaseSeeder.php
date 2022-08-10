<?php

namespace Database\Seeders;

use CreateStationsTable;
use Illuminate\Database\Seeder;
use App\Models\Stations;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Stations::create(['start'=>'Istanbul','end'=>'Tokat','Capacity'=>'10','cost'=>'900','take_off'=>'2022-08-10 08:00','arrival'=>'2022-08-10 18:00']);
        Stations::create(['start'=>'Istanbul','end'=>'Izmir','Capacity'=>'34','cost'=>'1000','take_off'=>'2022-08-10 09:00','arrival'=>'2022-08-10 18:00']);
        Stations::create(['start'=>'Istanbul','end'=>'Marashli','Capacity'=>'2','cost'=>'800','take_off'=>'2022-08-10 07:00','arrival'=>'2022-08-10 18:00']);
        Stations::create(['start'=>'Istanbul','end'=>'Mersin','Capacity'=>'4','cost'=>'800','take_off'=>'2022-08-10 05:00','arrival'=>'2022-08-10 18:00']);
        Stations::create(['start'=>'Istanbul','end'=>'Kastamonu','Capacity'=>'9','cost'=>'400','take_off'=>'2022-08-10 03:00','arrival'=>'2022-08-10 18:00']);
        Stations::create(['start'=>'Istanbul','end'=>'Samsung','Capacity'=>'5','cost'=>'300','take_off'=>'2022-08-10 05:00','arrival'=>'2022-08-10 18:00']);
        Stations::create(['start'=>'Istanbul','end'=>'Bursa','Capacity'=>'15','cost'=>'200','take_off'=>'2022-08-10 03:00','arrival'=>'2022-08-10 18:00']);
        Stations::create(['start'=>'Istanbul','end'=>'Mardin','Capacity'=>'5','cost'=>'200','take_off'=>'2022-08-10 03:00','arrival'=>'2022-08-10 18:00']);
    }
}
