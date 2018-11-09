<?php

use Illuminate\Database\Seeder;

class StoragesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\StorageAction::class, 5)->create();
        factory(\App\Models\Storage::class, 30)->create();
    }
}
