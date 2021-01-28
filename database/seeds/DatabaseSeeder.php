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
        $this->call(RoleSeeder::class);
        factory(App\User::class,30)->create();
        factory(App\Post::class,30)->create();
        factory(App\Video::class,30)->create();
    }
}
