<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(PostTableSeeder::class);

        Model::reguard();

    }
}
