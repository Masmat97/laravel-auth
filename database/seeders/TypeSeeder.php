<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            ['name' => 'Front-end', 'description' => 'Front-end development', 'icon' => 'https://www.nicepng.com/png/detail/222-2225386_front-end-web-development-logo.png'],
            ['name' => 'Back-end', 'description' => 'Back-end development', 'icon' => ''],
            ['name' => 'Full stack', 'description' => 'Full stack development', 'icon' => ''],
            ['name' => 'Design', 'description' => 'Design work', 'icon' => ''],
        ]);
    }
}
