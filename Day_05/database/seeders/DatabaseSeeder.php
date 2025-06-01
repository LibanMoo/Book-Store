<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $this->call(RolesSeeder::class);
//         $user =  User::create([
//     'name' => 'Liban',
//     'email' => 'ahmed@example.com',
//     'password' => bcrypt('ahmed'),
// ]);
User::where('id', '!=', 3)->each(function ($user) {
    $user->removeRole('admin');
});
    }
}
