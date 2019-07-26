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
        $password = 'Ch@ng3m3';
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
    }
}
