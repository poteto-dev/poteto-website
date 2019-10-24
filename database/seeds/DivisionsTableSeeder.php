<?php

use App\Entities\Division;
use Illuminate\Database\Seeder;

class DivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $divisions = ['Web Developer', 'Mobile Developer'];

        foreach ($divisions as $division) {
            $division = Division::create([
                'name'  =>  $division
            ]);

            $this->command->info('Division ' . $division->name . ' Created!');
        }
    }
}
