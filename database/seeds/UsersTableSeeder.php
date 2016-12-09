<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create(array(
            'username'      => 'endro',
            'nik'           => 21372,
            'first_name'    => 'Endro',
            'last_name'     => 'Ngujiharto',
            'email'         => 'endro.ngujiharto@jst.co.id',
            'password'      => Hash::make('12345678'),
        ));

        \App\Models\User::create(array(
            'username'      => 'denar',
            'nik'           => 21373,
            'first_name'    => 'Denar',
            'last_name'     => 'Jamhuri',
            'email'         => 'endro.ngujiharto@jst.co.id',
            'password'      => Hash::make('12345678'),
        ));
    }
}
