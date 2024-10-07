<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\Branch;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $branches = Branch::all();
        $users = User::all();

        foreach ($users as $user) {
            $adsCount = rand(0, 7);
            $userAds = Ad::factory()->count($adsCount)->make();

            foreach ($userAds as $ad) {
                $branch = $branches->random();
                $ad->branch_id = $branch->id;
                $ad->user_id = $user->id;
                $ad->save();
            }
        }
    }
}
