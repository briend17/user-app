<?php

namespace Database\Seeders;

use App\Models\Pais;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client(); //GuzzleHttp\Client
        $url = "https://api.first.org/data/v1/countries?region=South America";

        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());

        foreach ($responseBody->data as $data) {
            Pais::create([
                "nombre" => $data->country
            ]);
        }
    }
    
}
