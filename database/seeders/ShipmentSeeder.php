<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Shipment;
use Illuminate\Database\Seeder;

class ShipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Shipment::create([
            'code' => Str::random(8),
            'shipper_name' => 'Esraa',
            'weight' => 15,
            'status' => 'pending',
            'price' => 100,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'image'=>'',
            
            
        ]);   
        Shipment::create([
            'code' => Str::random(8),
            'shipper_name' => 'Ahmed',
            'weight' => 2,
            'status' => 'progress',
            'price' => 10,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'image'=>'',
                        
        ]);   
        Shipment::create([
            'code' => Str::random(8),
            'shipper_name' => 'Mohamed',
            'weight' => 65,
            'status' => 'done',
            'price' => 300,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'image'=>'',
            'journal_id' => 1
                        
        ]);   
        Shipment::create([
            'code' => Str::random(8),
            'shipper_name' => 'Ali',
            'weight' => 45,
            'status' => 'done',
            'price' => 300,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'image'=>'',
            'journal_id' => 1

                        
        ]);   
        Shipment::create([
            'code' => Str::random(8),
            'shipper_name' => 'Asmaa',
            'weight' => 20,
            'status' => 'done',
            'price' => 100,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'image'=>'',

                        
        ]);   
        Shipment::create([
            'code' => Str::random(8),
            'shipper_name' => 'Hadeer',
            'weight' => 100,
            'status' => 'done',
            'price' => 300,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'image'=>'',

                        
        ]);   
     }
}
