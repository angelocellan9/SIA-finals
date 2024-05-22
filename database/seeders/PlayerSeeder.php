<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     Offical::factory(50)->create();
    // }

    public function run() : void
    {
        $players = [
            [
                'position' => 'Captain Ball',
                'name' => 'Justine Palma',
                'description' => 'Being A Leader Behind the Scenes',
                'email' => 'Justine@gmail.com',
                'phone_number' => '09299288388',
            ],
            [
                'position' => 'Setter',
                'name' => 'CJ Batausa',
                'description' => 'delicate touch to set the ball perfectly',
                'email' => 'cjboi@gmail.com',
                'phone_number' => '09232388585',
            ],
            [
                'position' => 'Outside Hitter',
                'name' => 'Dieven Mueblas',
                'description' => 'the left-side hitter ',
                'email' => 'deven@gmail.com',
                'phone_number' => '09232388585',
            ],
            [
                'position' => 'Opposite Hitter',
                'name' => 'Ian Khalle Montilde',
                'description' => 'the right-side hitter',
                'email' => 'eyan@gmail.com',
                'phone_number' => '09232388585',
            ],
            [
                'position' => 'Middle Blocker',
                'name' => 'Jhadine Asupra',
                'description' => 'middle hitter',
                'email' => 'Jdine@gmail.com',
                'phone_number' => '09232388585',
            ],
            [
                'position' => 'Libero',
                'name' => 'Justine Cruan',
                'description' => 'person to receive a hit from the opposite team',
                'email' => 'Bolhog@gmail.com',
                'phone_number' => '09232388585',
            ],
            [
                'position' => 'Defensive Specialist',
                'name' => 'Arcel Montero Corage',
                'description' => 'focuses on ball control and passing',
                'email' => 'Dayeng@gmail.com',
                'phone_number' => '09232388585',
            ],


        ];


        foreach ($players as $player) {
            DB::table('players')->insert($player);
        }
    }
}
