<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            DB::beginTransaction();

            Permission::create(['name' => 'create']);
            Permission::create(['name' => 'read']);
            Permission::create(['name' => 'update']);
            Permission::create(['name' => 'delete']);
            Permission::create(['name' => 'change']);

            $creator = Role::create(['name' => 'Creator']);
            $administrator = Role::create(['name' => 'Administrator']);
            Role::create(['name' => 'Moderator']);
            Role::create(['name' => 'Editor']);
            Role::create(['name' => 'Member']);
            Role::create(['name' => 'Guest']);

            $creator->givePermissionTo(Permission::all());
            $administrator->givePermissionTo(['create', 'read', 'update', 'delete']);

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
