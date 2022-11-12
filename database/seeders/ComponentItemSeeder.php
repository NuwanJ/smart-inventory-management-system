<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentItemSeeder extends Seeder
{
    protected $data = [
        array('id' => '16', 'parent_id' => NULL, 'title' => 'Developemnt Boards', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '17', 'parent_id' => '16', 'title' => 'Arduino', 'subtitle' => NULL, 'description' => 'Arduino based development boards', 'thumb' => NULL),
        array('id' => '18', 'parent_id' => '16', 'title' => 'Espressif', 'subtitle' => NULL, 'description' => 'ESP development boards', 'thumb' => NULL),
        array('id' => '19', 'parent_id' => '16', 'title' => 'STM', 'subtitle' => NULL, 'description' => 'STM famility development boards', 'thumb' => NULL),
        array('id' => '20', 'parent_id' => '16', 'title' => 'Raspberry Pi', 'subtitle' => NULL, 'description' => 'Raspberry Pi based development boards', 'thumb' => NULL),
        array('id' => '21', 'parent_id' => '16', 'title' => 'PIC', 'subtitle' => NULL, 'description' => 'PIC family development boards', 'thumb' => NULL),
        array('id' => '22', 'parent_id' => NULL, 'title' => 'Sensors', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '23', 'parent_id' => '22', 'title' => 'Voltage', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '24', 'parent_id' => '22', 'title' => 'Current', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '25', 'parent_id' => '22', 'title' => 'Light and Color', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '26', 'parent_id' => '22', 'title' => 'GPS', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '27', 'parent_id' => '22', 'title' => 'Pressure', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '28', 'parent_id' => '22', 'title' => 'Temperature and Humidity', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '30', 'parent_id' => '22', 'title' => 'Distance', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '31', 'parent_id' => '22', 'title' => 'Motion', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '32', 'parent_id' => '22', 'title' => 'RFID', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '33', 'parent_id' => '22', 'title' => 'Touch', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '34', 'parent_id' => '22', 'title' => 'Gas', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '35', 'parent_id' => '22', 'title' => 'Fingerprint', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '36', 'parent_id' => NULL, 'title' => 'Motor Drivers', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '37', 'parent_id' => '36', 'title' => 'DC Motor Drivers', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '38', 'parent_id' => '36', 'title' => 'Stepper Motor Drivers', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '39', 'parent_id' => '36', 'title' => 'Brushless Motor Drivers', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '40', 'parent_id' => NULL, 'title' => 'Transmiters and Receivers', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '41', 'parent_id' => '40', 'title' => 'RF', 'subtitle' => 'Radio Frequency', 'description' => NULL, 'thumb' => NULL),
        array('id' => '42', 'parent_id' => '40', 'title' => 'Bluetooth', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '43', 'parent_id' => '40', 'title' => 'WiFi', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '44', 'parent_id' => '40', 'title' => 'GSM', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '45', 'parent_id' => NULL, 'title' => 'Readers and Converters', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '46', 'parent_id' => '45', 'title' => 'MicroSD', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '48', 'parent_id' => '45', 'title' => 'USB to TTL', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '49', 'parent_id' => '45', 'title' => 'RS232 to TTL', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '50', 'parent_id' => NULL, 'title' => 'Cameras', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '51', 'parent_id' => '50', 'title' => 'RPi Camera', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '52', 'parent_id' => NULL, 'title' => 'Arduino Shields', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '53', 'parent_id' => NULL, 'title' => 'Displays', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '54', 'parent_id' => '53', 'title' => 'LCD', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '55', 'parent_id' => '53', 'title' => 'OLED', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '56', 'parent_id' => '53', 'title' => 'LED', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '57', 'parent_id' => '53', 'title' => 'TFT', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '58', 'parent_id' => NULL, 'title' => 'Output Modules', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '59', 'parent_id' => '58', 'title' => 'Speakers', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '60', 'parent_id' => '58', 'title' => 'Relays', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '61', 'parent_id' => NULL, 'title' => 'Input Modules', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '62', 'parent_id' => '61', 'title' => 'Switches', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '63', 'parent_id' => '61', 'title' => 'Matrix Keypad', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '64', 'parent_id' => NULL, 'title' => 'Expansions and Cables', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '65', 'parent_id' => NULL, 'title' => 'Motors', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '66', 'parent_id' => '65', 'title' => 'DC Non-Geared', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '67', 'parent_id' => '65', 'title' => 'DC Geared', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '68', 'parent_id' => '65', 'title' => 'Stepper', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '69', 'parent_id' => '65', 'title' => 'Servo', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '70', 'parent_id' => '65', 'title' => 'Brushless', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '71', 'parent_id' => '65', 'title' => 'AC', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '72', 'parent_id' => NULL, 'title' => 'Measuring', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '73', 'parent_id' => '72', 'title' => 'Multimeters', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '74', 'parent_id' => '72', 'title' => 'Logic Probes', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '75', 'parent_id' => NULL, 'title' => 'ICs', 'subtitle' => 'Integrated Circuits', 'description' => NULL, 'thumb' => NULL),
        array('id' => '76', 'parent_id' => '75', 'title' => 'Digital Logic', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '77', 'parent_id' => '75', 'title' => 'Amplifiers', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL),
        array('id' => '78', 'parent_id' => '75', 'title' => 'Memory', 'subtitle' => NULL, 'description' => NULL, 'thumb' => NULL)
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