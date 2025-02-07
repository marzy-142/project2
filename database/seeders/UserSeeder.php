<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Permissions
        $manageUsers = Permission::create(['name' => 'manage users', 'guard_name' => 'web']);
        $manageAccounts = Permission::create(['name' => 'manage accounts', 'guard_name' => 'web']);
        $manageTransactions = Permission::create(['name' => 'manage transactions', 'guard_name' => 'web']);

        // Roles
        $adminRole = Role::create(['name' => 'admin', 'guard_name' => 'web']);
        $accountManagerRole = Role::create(['name' => 'account manager', 'guard_name' => 'web']);
        $tellerRole = Role::create(['name' => 'teller', 'guard_name' => 'web']);

        // Assign Permissions to Roles
        $adminRole->givePermissionTo($manageUsers, $manageAccounts, $manageTransactions);
        $accountManagerRole->givePermissionTo($manageAccounts, $manageTransactions);
        $tellerRole->givePermissionTo($manageTransactions);

        // Create Admin User
        $adminUser = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);

        // Assign Role to Admin
        $adminUser->assignRole($adminRole);
    }
}
