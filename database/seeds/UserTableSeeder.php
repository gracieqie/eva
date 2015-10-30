<?php

use Illuminate\Database\Seeder;
use EVA\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newUsers = $this->generate();
        foreach ($newUsers as $newUser) {
            User::create($newUser);
        }

    }

    private function generate($amount = 5) {
        $users = array();
        $id = 0;
        while($id <= $amount) {
            $id += 1;
            $username = 'user'.$id;
            array_push($users, ['name' => $username, 'email' => $username.'@example.com', 'password'=> Hash::make($username)]);
        }

        return $users;
    }

}
