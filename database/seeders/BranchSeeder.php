<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $branches = Branch::factory()->count(5)->create();

        foreach ($branches as $branch) {
            $adsCount = rand(0, 20);
            Ad::factory()->count($adsCount)->create(['branch_id' => $branch->id]);
        }
    }
}
