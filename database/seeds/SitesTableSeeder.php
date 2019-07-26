<?php

use Illuminate\Database\Seeder;
use App\Models\Site;
use App\User;

class SitesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $user = User::query()
            ->where('email', 'ambielecki@yahoo.com')
            ->first();

        Site::create([
            'user_id' => $user->id ?? 2,
            'team_name' => 'Red Sox',
            'division_name' => 'AAA',
            'league_name' => 'Stoneham LL',
            'year' => 2019,
            'slug' => 'stoneham_ll_aaa_red_sox_2019',
            'css_file' => 'default',
            'settings' => json_encode([]),
        ]);
    }
}
