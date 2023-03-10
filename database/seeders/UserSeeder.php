<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->name = 'Andrea';
        $user->email = 'Andrea.adedegiorgi@gmail.com';
        $user->password = bcrypt('ArcolaBasket19');
        $user->save();
    }
}
