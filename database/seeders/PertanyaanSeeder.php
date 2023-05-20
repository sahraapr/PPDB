<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Wawancara;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id_data'          => '1',
                
            ],
            [
                'id_data'          => '2',
                
            ],
            [
                'id_data'          => '3',
                
            ],
            [
                'id_data'          => '4',
                
            ],
            [
                'id_data'          => '5',
                
            ],
            [
                'id_data'          => '6',
                
            ],
            [
                'id_data'          => '7',
                
            ],
            [
                'id_data'          => '8',
                
            ],
            [
                'id_data'          => '9',
                
            ],

        ];

        Wawancara::insert($data);
    }
}
