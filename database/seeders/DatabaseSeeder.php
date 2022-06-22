<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Banner;
use App\Models\Competence;
use App\Models\CompetenceLangage;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(1)->create();
        Banner::factory(1)->create();
        About::factory(1)->create();
        Competence::factory(4)->create();
        CompetenceLangage::factory(4)->Create();
    }
}
