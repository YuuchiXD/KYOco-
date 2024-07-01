<?php

namespace Database\Seeders;

use App\Models\Setting\WebConfig;
use Illuminate\Database\Seeder;

class WebConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WebConfig::updateOrCreate(
            ['name' => 'app_name'],
            [
                'label' => 'Application Name',
                'value' => 'KYOco!',
                'type'  => 0
            ]
        );

        WebConfig::updateOrCreate(
            ['name' => 'app_logo'],
            [
                'label' => 'Logo',
                'type'  => 2
            ]
        );
    }
}
