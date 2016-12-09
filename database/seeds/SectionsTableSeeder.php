<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Section::create(array(
            'name'      => 'Infrastruktur'
        ));
    }
}
