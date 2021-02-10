<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $userNames = [
            "Admin", "Member"
        ];

        $userEmails = [
            "admin@google.com", "member@google.com"
        ];

        $userPhones = [
            "081362673324", "081362673324"
        ];

        $userPasswords = [
            "admin", "member"
        ];

        for ($i = 0; $i < 2; $i++) {
            $user = new User;
            $user->fill(["name" => $userNames[$i], "role" => $userNames[$i], "email" => $userEmails[$i], "phone" => $userPhones[$i], "password" => bcrypt($userPasswords[$i])]);
            $user->save();
        }
    }
}
