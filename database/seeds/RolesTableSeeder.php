<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $role = Role::firstOrNew(['name' => 'admin']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'Administrator',
                ])->save();
        }

        $role = Role::firstOrNew(['name' => 'moderator']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'Moderator',
                ])->save();
        }

        $role = Role::firstOrNew(['name' => 'teacher']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'Teacher',
                ])->save();
        }

        $role = Role::firstOrNew(['name' => 'student']);
        if (!$role->exists) {
            $role->fill([
                    'display_name' => 'Student',
                ])->save();
        }
    }
}
