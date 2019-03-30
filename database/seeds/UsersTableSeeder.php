<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User();

        $user->role_id="1";
        $user->name="Md.Admin";
        $user->username="admin";
        $user->email="admin@gmail.com";
        $user->password=bcrypt('12345678');
        $user->save();


        $user1=new User();

        $user1->role_id="2";
        $user1->name="Md.Author";
        $user1->username="author";
        $user1->email="author@gmail.com";
        $user1->password=bcrypt('87654321');
        $user1->save();
    }
}
