<?php

namespace Database\Seeders;

use App\Models\Admin\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'title' => 'admin_access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'permission_index',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'permission_create',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'permission_edit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'permission_show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'permission_delete',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'role_index',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'role_create',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'role_edit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'role_show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'role_delete',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'player_index',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'player_create',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'player_store',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'player_edit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'player_update',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'player_show',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'player_delete',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'title' => 'transfer_log',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'make_transfer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'payment_type',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'withdraw_requests',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'deposit_requests',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'contact',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Permission::insert($permissions);
    }
}
