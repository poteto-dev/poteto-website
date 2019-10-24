<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['member', 'visitor'];

        foreach ($roles as $name) {
            $role = Role::create(['name' => $name]);
            
            $this->command->info('Role ' . ucfirst($role->name) . ' Created!');
        }
    }
}
