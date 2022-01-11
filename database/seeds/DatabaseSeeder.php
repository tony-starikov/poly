<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             UsersTableSeeder::class,
             SoftwareTableSeeder::class,
             PositionsTableSeeder::class,
             ArtistsTableSeeder::class,
             WorksTableSeeder::class,
             PagesTableSeeder::class,
             FieldsTableSeeder::class,
             FieldsPagesTableSeeder::class,
             FilesTableSeeder::class
         ]);
    }
}
