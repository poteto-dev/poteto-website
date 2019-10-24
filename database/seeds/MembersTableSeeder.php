<?php

use App\Entities\Division;
use App\Entities\Member;
use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [
            [
                'username'      =>  'fariz',
                'email'         =>  'fariz@poteto.dev',
                'password'      =>  env('SEEDER_PASSWORD'),
                'name'          =>  'Nizar Alfarizi',
                'division_id'   =>  Division::where('name', 'Web Developer')->first()->id
            ]
        ];

        foreach ($members as $member) {
            $member = Member::create([
                'username'      =>  $member['username'],
                'email'         =>  $member['email'],
                'password'      =>  $member['password'],
                'name'          =>  $member['name'],
                'division_id'   =>  $member['division_id'],
            ]);
            $this->command->info('Member ' . $member->name . ' Created!');
        }
    }
}
