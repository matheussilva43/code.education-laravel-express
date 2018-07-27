<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

        factory('App\User')->create(
            [
                'name' => 'Matheus',
                'email' => 'msmatheuspereira@gmail.com',
                'password' => bcrypt(123456),
                'remember_token' => str_random(10),
            ]
        );

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(PostTableSeeder::class);
        // $this->call(CommentTableSeeder::class);
        $this->call(TagTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Model::reguard();
    }
}