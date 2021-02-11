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

        $userRoles = [
            "Admin", "Member"
        ];

        $userNames = [
            "Admin1", "Admin2", "Admin3", "Admin4",
            "Member1", "Member2", "Member3", "Member4"
        ];

        $userEmails = [
            "admin@google.com", "admin2@google.com", "admin3@google.com", "admin4@google.com",
            "member@google.com", "member2@google.com", "member3@google.com", "member4@google.com",
        ];

        $userPasswords = [
            "admin", "member"
        ];
        $index = 0;
        for ($i = 0; $i < 8; $i++) {
            $user = new User;
            if ($i == 4) $index = 1;
            $user->fill(["name" => $userNames[$i], "role" => $userRoles[$index], "email" => $userEmails[$i], "phone" => "081362673324", "password" => bcrypt($userPasswords[$index])]);
            $user->save();
        }
    }
}
