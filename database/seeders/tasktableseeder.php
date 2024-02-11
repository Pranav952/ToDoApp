<?php

namespace Database\Seeders;

use App\Models\TaskTable;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tasktableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for ($i = 1; $i <= 10; $i++) {
            $table1 = new TaskTable;
            $faker = Faker::create();
            $table1->Task = $faker->name;
            $table1->save();
        }
    }
}
