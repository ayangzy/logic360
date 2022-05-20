<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class DefaultAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = 'logic360ate';
        $data = [
            'first_name' => 'Fater',
            'last_name' => 'Atekombo',
            'phone_number' => '08134949093',
            'email' => 'logicfatee360@gmail.com',
            'password' => Hash::make($password),
            'email_verified_at' => Carbon::now(),
            'role' => 'super_admin',
        ];
        User::updateOrCreate(['email'=> $data['email']], $data);
    }
}
