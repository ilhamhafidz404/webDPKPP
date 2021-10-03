<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InventorySeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run() {
    \App\Models\Inventory::insert([
      'daerah' => "Kab.Kuningan",
      'pengembang' => "Bumi Serang Indah",
      'perumahan' => "Kelurahan Awirarabgan Kecamatan Kuningan",
      'asset' => "PSU",
      'luas' => "4,20.00",
      'perolehan' => "-",
      'permasalahan' => "Proses Verifikasi Berkas",
      'progres' => "Proses Perivikasi Berkas",
    ]);
  }
}