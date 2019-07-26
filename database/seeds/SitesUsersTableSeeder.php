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
        $user = User::get()->first();

        $site->users()->attach($user->id, ['is_site_admin' => 1]);
    }
}
