<?php

use Illuminate\Database\Seeder;

class TargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $target = new \App\Target();

        $target->monthly_target_companies =50;
        $target->quarterly_target_companies =300;
        $target->monthly_target_jobs =100;
        $target->quarterly_target_jobs =600;
        $target->save();

    }
}
