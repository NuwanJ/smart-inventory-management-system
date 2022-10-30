<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComponentTypeSeeder extends Seeder
{
    protected $data = [
        array('id' => '1', 'parent_id' => NULL, 'code' => '', 'title' => 'Development Boards', 'subtitle' => '', 'description' => ' ', 'thumb' => NULL),
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $index => $value) {
            $result = DB::table('component_types')->insert($value);

            if (!$result) {
                $this->command->info("Insert failed at record $index.");
                return;
            }
        }
        $this->command->info('Inserted ' . count($this->data) . ' records to component_types table');
    }
}