<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $password = 'foobarfizzbuzz';
        $email = 'ambielecki@gmail.com';

        User::create([
            'first_name' => 'Andrew',
            'last_name' => 'Bielecki',
            'email' => $email,
            'email_hash' => Hash::make($email),
            'phone_number' => '5555555555',
            'password' => Hash::make($password),
            'is_admin' => 1,
        ]);

        $email = 'ambielecki@yahoo.com';

        User::create([
            'first_name' => 'Andrew',
            'last_name' => 'Bielecki',
            'email' => $email,
            'email_hash' => Hash::make($email),
            'phone_number' => '5555555555',
            'password' => Hash::make($password),
            'is_admin' => 0,
        ]);

        $email = 'missitnoonan@gmail.com';

        User::create([
            'first_name' => 'Andrew',
            'last_name' => 'Bielecki',
            'email' => $email,
            'email_hash' => Hash::make($email),
            'phone_number' => '5555555555',
            'password' => Hash::make($password),
            'is_admin' => 0,
        ]);
    }
}
