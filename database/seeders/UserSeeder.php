<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run() {
    \App\Models\User::insert([
      'name' => 'DPKPP KUNINGAN',
      'email' => 'dpkppkuningan@gmail.com',
      'password' => bcrypt('dpkppkuningan')
    ]);
  }
}