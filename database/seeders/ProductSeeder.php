<?php

namespace Database\Seeders;

use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name'=>'Sumsung note 10',
            'price'=>'80000',
            'category'=>'Smart Phone',
            'description'=>'Max features in this phone',
            'gallery'=>"https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-note10-aura-glow.jpg"
            ],
            ['name'=>'Sumsung LCD',
            'price'=>'110000',
            'category'=>'LCD',
            'description'=>'This LCD have good graphic qualities',
            'gallery'=>"https://www.symbios.pk/image/cache/data/1/1_1378123940-500x500.jpg"
            ],
            ['name'=>'Haier AC',
            'price'=>'95000',
            'category'=>'AC',
            'description'=>'Osome Cooling',
            'gallery'=>"https://lahorecentre.com/wp-content/uploads/2020/11/6-2.jpg"
            ],
            ['name'=>'Haier Washing Machine',
            'price'=>'70000',
            'category'=>'Washing Machine',
            'description'=>'Auto cleaning feature and auto dry',
            'gallery'=>"https://www.alfatah.com.pk/wp-content/uploads/2020/07/Haier-10-Kg-Twin-Tub-Washing-Machine-HWM-100-BS.jpg"
            ]
        ]);
    }
}
