<?php

use Illuminate\Database\Seeder;
use App\Models\Site;

class SitesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Site::create([
            'user_id' => '1',
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
