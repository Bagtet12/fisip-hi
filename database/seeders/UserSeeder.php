<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'name' => 'IRD',
            'role' => 'admin',
            'email' => 'ird@unej.ac.id',
            'password' => bcrypt('irdhifisip_unej')
        ]];
        
        foreach($data as $dt){
            User::create($dt);
        }
    }
}
