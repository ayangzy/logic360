<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            [
                "name" => "Abia",
                
            ],
            [
                "name" => "Adamawa",
                
            ],
            [
                "name" => "Akwa Ibom",
                
            ],
            [
                "name" => "Anambra",
                
            ],
            [
                "name" => "Bauchi",
                
            ],
            [
                "name" => "Bayelsa",
                
            ],
            [
                "name" => "Benue",
                
            ],
            [
                "name" => "Borno",
                
            ],
            [
                "name" => "Cross River",
                
            ],
            [
                "name" => "Delta",
                
            ],
            [
                "name" => "Ebonyi",
                
            ],
            [
                "name" => "Edo",
                
            ],
            [
                "name" => "Ekiti",
                
            ],
            [
                "name" => "Enugu",
                
            ],
            [
                "name" => "FCT - Abuja",
                
            ],
            [
                "name" => "Gombe",
                
            ],
            [
                "name" => "Imo",
                
            ],
            [
                "name" => "Jigawa",
                
            ],
            [
                "name" => "Kaduna",
                
            ],
            [
                "name" => "Kano",
                
            ],
            [
                "name" => "Katsina",
                
            ],
            [
                "name" => "Kebbi",
                
            ],
            [
                "name" => "Kogi",
                
            ],
            [
                "name" => "Kwara",
                
            ],
            [
                "name" => "Lagos",
                
            ],
            [
                "name" => "Nasarawa",
                
            ],
            [
                "name" => "Niger",
                
            ],
            [
                "name" => "Ogun",
            ],
            [
                "name" => "Ondo",
            ],
            [
                "name" => "Osun",
            ],
            [
                "name" => "Oyo",
            ],
            [
                "name" => "Plateau",
            ],
            [
                "name" => "Rivers",
            ],
            [
                "name" => "Sokoto",
            ],
            [
                "name" => "Taraba",
            ],
            [
                "name" => "Yobe",
                
            ],
            [
                "name" => "Zamfara",
            ],
        ];

        foreach($states as $state){
            State::updateOrCreate($state);
        }
    }
}
