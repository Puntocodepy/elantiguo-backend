<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [ "id" => 1,  "name" => 'Asunción' ],
            [ "id" => 2,  "name" => 'Alto Paraguay' ],
            [ "id" => 3,  "name" => 'Alto Paraná' ],
            [ "id" => 4,  "name" => 'Amambay' ],
            [ "id" => 5,  "name" => 'Boquerón' ],
            [ "id" => 6,  "name" => 'Caaguazú' ],
            [ "id" => 7,  "name" => 'Caazapa' ],
            [ "id" => 8,  "name" => 'Canindeyu' ],
            [ "id" => 9,  "name" => 'Central' ],
            [ "id" => 10,  "name" => 'Concepción' ],
            [ "id" => 11,  "name" => 'Cordillera' ],
            [ "id" => 12,  "name" => 'Guaira' ],
            [ "id" => 13,  "name" => 'Itapua' ],
            [ "id" => 14,  "name" => 'Misiones' ],
            [ "id" => 15,  "name" => 'Ñeembucu' ],
            [ "id" => 16,  "name" => 'Paraguari' ],
            [ "id" => 17,  "name" => 'Presidente Hayes' ],
            [ "id" => 18,  "name" => 'San Pedro' ]
        ];

        DB::table('departments')->insert($departments);
    }
}
