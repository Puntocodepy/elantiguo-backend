<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $measures = [
            [ 'name' => 'UN'   ],
            [ 'name' => 'M'    ],
            [ 'name' => 'CM'   ],
            [ 'name' => 'MM'   ],
            [ 'name' => 'M2'   ],
            [ 'name' => 'M3'   ],
            [ 'name' => 'KG'   ],
            [ 'name' => 'G'    ],
            [ 'name' => 'ML'   ],
            [ 'name' => 'L'    ],
            [ 'name' => 'ML'   ],
            [ 'name' => 'CAJA' ],
        ];

        DB::table('measures')->insert($measures);
    }
}
