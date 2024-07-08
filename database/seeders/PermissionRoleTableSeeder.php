<?php

namespace Database\Seeders;

use App\Models\Admin\Permission;
use App\Models\Admin\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin permissions
        $admin_permissions = Permission::whereIn('title', [
            'admin_access',
            'role_index',
            'role_create',
            'role_store',
            'role_edit',
            'role_update',
            'role_delete',
            'permission_index',
            'permission_create',
            'permission_store',
            'permission_edit',
            'permission_update',
            'permission_delete',
            'transfer_log',
            'player_index',
            'deposit_requests',
            'withdraw_requests',
            'make_transfer',
            'payment_type',
            'game_type_access',
            'contact'
        ]);
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));
      
    }
}
