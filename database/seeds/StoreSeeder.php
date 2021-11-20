<?php

use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
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
              'id'=> 1,
              'name'=> 'Cartmax',
              'location'=> 'Calape, Bohol',
              'owner'=> 'Kenn C. Secusana',
              'net_worth'=> 12500,
  
          ],
          [

            'id'=> 2,
            'name'=> 'Megaplex',
            'location'=> 'Vancouver, Canada',
            'owner'=> 'Alex D. Cooper',
            'net_worth'=> 10200,
  


          ],
          [

            'id'=> 3,
              'name'=> 'Shoppers Delight',
              'location'=> 'Atlanta, Georgia',
              'owner'=> 'Keanu S. Reeves',
              'net_worth'=> 11600,
   
            ],
            [

              'id'=> 4,
              'name'=> 'Dollar Smart',
              'location'=> 'Atlanta, Georgia',
              'owner'=> 'Vin K. Diesel',
              'net_worth'=> 13600,

            ],
            [

              'id'=> 5,
              'name'=> 'Brilliant Boutique',
              'location'=> 'Miami, Florida',
              'owner'=> 'Kian C. Secusana',
              'net_worth'=> 13650,

            ],
            [

              'id'=> 6,
              'name'=> 'Fuller Shelf',
              'location'=> 'Atlanta, Georgia',
              'owner'=> 'Alex F. Turner',
              'net_worth'=> 7500,


          ]

        ];
  
        foreach($data as $s){
            \App\Store::create($s);
        }

    }
}
