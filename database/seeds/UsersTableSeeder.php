<?php

use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $users = [
            
            [
                'name' => "Hassan",
                'email' => 'hassan@dmin.com',
                'password' => '123123',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            
                 [
                'name' => "Ahmad",
                'email' => 'Ahmad@dmin.com',
                'password' => '123123',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            
           
           
        ];

        DB::table('users')->insert($users);
    }

}
