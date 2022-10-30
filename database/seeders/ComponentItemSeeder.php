<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentItemSeeder extends Seeder
{
    protected $data = [
        array('id' => '1001', 'code' => '', 'title' => 'Arduino UNO REV3', 'brand' => 'Arduino', 'productCode' => 'Uno v3', 'quantity' => '10', 'specifications' => 'Digital I/O 14 pins, Analog: 4 pins, PWM: 6 pins', 'datasheet' => '', 'datasheet' => 'https://store-usa.arduino.cc/products/arduino-uno-rev3', 'price' => '1200.00', 'thumb' => NULL, 'component_type_id' => 1),
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $index => $setting) {
            $result = DB::table('component_items')->insert($setting);

            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }

        $this->command->info('Inserted ' . count($this->data) . ' records to component_items table');
    }
}