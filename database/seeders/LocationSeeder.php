<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations =  [
            [
                "state_id" => 7,
                "name" => "Ado",
                "head_quarters" => "Ado"
            ],
            [
                "state_id" => 7,
                "name" => "Agatu",
                "head_quarters" => "Agatu"
            ],
            [
                "state_id" => 7,
                "name" => "Apa",
                "head_quarters" => "Apa"
            ],

            [
                "state_id" => 7,
                "name" => "Buruku;",
                "head_quarters" => "Buruku"
            ],

            [
                "state_id" => 7,
                "name" => "Gboko",
                "head_quarters" => "Gboko"
            ],
           
            [
                "state_id" => 7,
                "name" => "Guma",
                "head_quarters" => "Gbajimba"
            ],

            [
                "state_id" => 7,
                "name" => "Gwer-East",
                "head_quarters" => "Aliade"
            ],
            
            [
                "state_id" => 7,
                "name" => "Gwer-West",
                "head_quarters" => "Naka"
            ],
            [
                "state_id" => 7,
                "name" => "Katsina-Ala",
                "head_quarters" => "katsina-Ala"
            ],
            [
                "state_id" => 7,
                "name" => "Konshisha",
                "head_quarters" => "Tse-Agberagba"
            ],
            [
                "state_id" => 7,
                "name" => "Kwande",
                "head_quarters" => "Kwande"
            ],
            [
                "state_id" => 7,
                "name" => "Logo",
                "head_quarters" => "Ugba"
            ],
            [
                "state_id" => 7,
                "name" => "Makurdi",
                "head_quarters" => "Makurdi"
            ],
            [
                "state_id" => 7,
                "name" => "Ogbadibo",
                "head_quarters" => "Ogbadibo"
            ],
            [
                "state_id" => 7,
                "name" => "Ohimini",
                "head_quarters" => "Ohimini"
            ],
            [
                "state_id" => 7,
                "name" => "Oju",
                "head_quarters" => "OJu"
            ],
            [
                "state_id" => 7,
                "name" => "Okpokwu",
                "head_quarters" => "Okpokwu"
            ],
            [
                "state_id" => 7,
                "name" => "Otukpo",
                "head_quarters" => "Otukpod"
            ],
            [
                "state_id" => 7,
                "name" => "Tarka",
                "head_quarters" => "Annune"
            ],
            [
                "state_id" => 7,
                "name" => "Ukum",
                "head_quarters" => "Sankara"
            ],
            [
                "state_id" => 7,
                "name" => "Ushongo",
                "head_quarters" => "Lessel"
            ],
            [
                "state_id" => 7,
                "name" => "Vandeikya",
                "head_quarters" => "Vandeikya"
            ],
            
        ];

        foreach($locations as $location){
            Location::updateOrCreate($location);
        }
    }
}
