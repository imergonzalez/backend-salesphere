<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run(): void {
       Users::factory()->count(5)->create();
    }
}
