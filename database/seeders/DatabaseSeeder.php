<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Banner;
use App\Models\Competence;
use App\Models\CompetenceLangage;
use App\Models\Education;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\ServiceDetail;
use App\Models\Temoignage;
use App\Models\User;
use App\Models\Work;
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
        CompetenceLangage::factory(10)->Create();
        Work::factory(3)->create();
        Portfolio::factory(8)->create();
        Temoignage::factory(8)->create();
        Service::factory('4')->create();
        ServiceDetail::factory('5')->create();
        Education::factory(5)->create();
    }
}
