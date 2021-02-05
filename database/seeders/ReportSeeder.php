<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Report::create([
            'post_id' => '1',
            'user_id' => '1',
            'body' => 'Here is the reason for the Report.'
        ]);
    }
}
