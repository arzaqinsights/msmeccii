<?php

namespace Database\Seeders;

use App\Models\GrowthRecord;
use Illuminate\Database\Seeder;

class GrowthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GrowthRecord::truncate();

        $data = [
            // --- CONFERENCES GROUP ---
            ['group' => 'conference', 'category' => 'delegates', 'year' => '2019', 'value' => '150+', 'label' => 'Delegates'],
            ['group' => 'conference', 'category' => 'delegates', 'year' => '2020', 'value' => '453+', 'label' => 'Delegates'],
            ['group' => 'conference', 'category' => 'delegates', 'year' => '2022', 'value' => '1083+', 'label' => 'Delegates'],
            ['group' => 'conference', 'category' => 'delegates', 'year' => '2023', 'value' => '800+', 'label' => 'in Two Days'],
            ['group' => 'conference', 'category' => 'delegates', 'year' => '2024', 'value' => '730+', 'label' => 'Delegates'],
            ['group' => 'conference', 'category' => 'delegates', 'year' => '2025', 'value' => '780+', 'label' => 'Delegates'],

            ['group' => 'conference', 'category' => 'speakers', 'year' => '2019', 'value' => '80+'],
            ['group' => 'conference', 'category' => 'speakers', 'year' => '2020', 'value' => '80+'],
            ['group' => 'conference', 'category' => 'speakers', 'year' => '2022', 'value' => '120+'],
            ['group' => 'conference', 'category' => 'speakers', 'year' => '2023', 'value' => '100+'],
            ['group' => 'conference', 'category' => 'speakers', 'year' => '2024', 'value' => '100+'],
            ['group' => 'conference', 'category' => 'speakers', 'year' => '2025', 'value' => '90+'],

            ['group' => 'conference', 'category' => 'excellence', 'year' => '2019', 'value' => '40+'],
            ['group' => 'conference', 'category' => 'excellence', 'year' => '2020', 'value' => '72+'],
            ['group' => 'conference', 'category' => 'excellence', 'year' => '2022', 'value' => '150+'],
            ['group' => 'conference', 'category' => 'excellence', 'year' => '2023', 'value' => '160+'],
            ['group' => 'conference', 'category' => 'excellence', 'year' => '2024', 'value' => '100+'],
            ['group' => 'conference', 'category' => 'excellence', 'year' => '2025', 'value' => '80+'],

            // --- AWARDS GROUP ---
            // 1st Excellence Award (2025)
            ['group' => 'award', 'category' => 'speakers', 'sub_category' => '1st Excellence Award', 'year' => '2025', 'value' => '20+', 'label' => 'Speakers'],
            ['group' => 'award', 'category' => 'awardees', 'sub_category' => '1st Excellence Award', 'year' => '2025', 'value' => '120+', 'label' => 'Awardees'],
            ['group' => 'award', 'category' => 'guests', 'sub_category' => '1st Excellence Award', 'year' => '2025', 'value' => '30+', 'label' => 'Guest of Honor'],

            // 2nd Excellence Award (2026)
            ['group' => 'award', 'category' => 'speakers', 'sub_category' => '2nd Excellence Award', 'year' => '2026', 'value' => '15+', 'label' => 'Speakers'],
            ['group' => 'award', 'category' => 'awardees', 'sub_category' => '2nd Excellence Award', 'year' => '2026', 'value' => '98+', 'label' => 'Awardees'],
            ['group' => 'award', 'category' => 'guests', 'sub_category' => '2nd Excellence Award', 'year' => '2026', 'value' => '32+', 'label' => 'Guest of Honor'],
        ];

        foreach ($data as $item) {
            GrowthRecord::create($item);
        }
    }
}
