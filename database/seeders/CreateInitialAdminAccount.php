<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateInitialAdminAccount extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::unguard();

        User::create([
            'email' => 'phanhieu@gmail.com',
            'password' => bcrypt('12345678'),
            'first_name' => 'Phan',
            'last_name' => 'Hieu',
            'is_active' => true,
            'username' => 'cphieu',
            'is_admin' => true,
        ]);

        User::factory(10)->create();

    }
}
