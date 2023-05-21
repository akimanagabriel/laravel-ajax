<?php

namespace Database\Seeders;

use App\Models\Geo;
use Illuminate\Database\Seeder;

class GeoSeeder extends Seeder
{
    public function run()
    {
        $json_data = file_get_contents("data.json");
        $data = json_decode($json_data, true);

        foreach ($data as $region => $districts) {
            foreach ($districts as $district) {
                Geo::create([
                    'province' => $region,
                    'district' => $district,
                ]);
            }
        }
    }
}
