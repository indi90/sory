<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Location::create(array(
            'barcode'       => 'Loc0001',
            'department_id' => 1,
            'section_id'    => 1,
            'description'   => 'Cabin 1'
        ));

        \App\Models\Location::create(array(
            'barcode'       => 'Loc0002',
            'department_id' => 1,
            'section_id'    => 1,
            'description'   => 'Cabin 2'
        ));
    }
}
