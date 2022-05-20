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
                "name" => "Ado",
                "head_quarters" => "Ado"
            ],
            [
                "name" => "Agatu",
                "head_quarters" => "Agatu"
            ],
            [
                "name" => "Apa",
                "head_quarters" => "Apa"
            ],

            [
                "name" => "Buruku;",
                "head_quarters" => "Buruku"
            ],

            [
                "name" => "Gboko",
                "head_quarters" => "Gboko"
            ],
           
            [
                "name" => "Guma",
                "head_quarters" => "Gbajimba"
            ],

            [
                "name" => "Gwer-East",
                "head_quarters" => "Aliade"
            ],
            
            [
                "name" => "Gwer-West",
                "head_quarters" => "Naka"
            ],
            [
                "name" => "Katsina-Ala",
                "head_quarters" => "katsina-Ala"
            ],
            [
                "name" => "Konshisha",
                "head_quarters" => "Tse-Agberagba"
            ],
            [
                "name" => "Kwande",
                "head_quarters" => "Kwande"
            ],
            [
                "name" => "Logo",
                "head_quarters" => "Ugba"
            ],
            [
                "name" => "Makurdi",
                "head_quarters" => "Makurdi"
            ],
            [
                "name" => "Ogbadibo",
                "head_quarters" => "Ogbadibo"
            ],
            [
                "name" => "Ohimini",
                "head_quarters" => "Ohimini"
            ],
            [
                "name" => "Oju",
                "head_quarters" => "OJu"
            ],
            [
                "name" => "Okpokwu",
                "head_quarters" => "Okpokwu"
            ],
            [
                "name" => "Otukpo",
                "head_quarters" => "Otukpod"
            ],
            [
                "name" => "Tarka",
                "head_quarters" => "Annune"
            ],
            [
                "name" => "Ukum",
                "head_quarters" => "Sankara"
            ],
            [
                "name" => "Ushongo",
                "head_quarters" => "Lessel"
            ],
            [
                "name" => "Vandeikya",
                "head_quarters" => "Vandeikya"
            ],
            
        ];

        foreach($locations as $location){
            Location::updateOrCreate($location);
        }
    }
}
