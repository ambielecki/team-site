<?php

use App\Models\Site;
use App\User;
use Illuminate\Database\Seeder;

class SitesUsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $site = Site::get()->first();
        $user = User::query()
            ->where('email', 'ambielecki@yahoo.com')
            ->get()
            ->first();

        $site->users()->attach($user->id, ['is_site_admin' => 1]);

        $user = User::query()
            ->where('email', 'missitnoonan@gmail.com')
            ->get()
            ->first();

        $site->users()->attach($user->id, ['is_site_admin' => 0]);
    }
}
