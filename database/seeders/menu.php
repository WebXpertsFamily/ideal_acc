<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class menu extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $menus = [
            [
                'name' => 'BRV',
            ],
            [
                'name' => 'BPV',
            ],
            [
                'name' => 'CPV',
            ],
            [
                'name' => 'CRV',
            ],
            [
                'name' => 'JV',
            ],
            [
                'name' => 'Documents',
            ],
            [
                'name' => 'User Registration',
            ],
            [
                'name' => 'Project Registration',
            ],
            [
                'name' => 'Donor Registration',
            ],
            [
                'name' => 'Bank Registration',
            ],
            [
                'name' => 'Financial Year',
            ]
        ];
        foreach($menus as $area){
            \App\Menu::create($area);
        }
    }
}
