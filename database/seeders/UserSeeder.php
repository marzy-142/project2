<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    public function run(): void
    {

        $manageUsers = Permission::create(['name' => 'manage users']);
        $manageAccounts = Permission::create(['name' => 'manage accounts']);
        $manageTransactions = Permission::create(['name' => 'manage transactions']);


        $adminRole = Role::create(['name' => 'admin']);
        $accountManagerRole = Role::create(['name' => 'account manager']);
        $tellerRole = Role::create(['name' => 'teller']);


        $adminRole->givePermissionTo($manageUsers, $manageAccounts, $manageTransactions);
        $accountManagerRole->givePermissionTo($manageAccounts, $manageTransactions);
        $tellerRole->givePermissionTo($manageTransactions);


        $adminUser = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $adminUser->assignRole($adminRole);

        $accountManager = User::create([
            'name' => 'Account Manager',
            'email' => 'manager@example.com',
            'password' => bcrypt('password'),
        ]);
        $accountManager->assignRole($accountManagerRole);

        $tellerUser = User::create([
            'name' => 'Teller',
            'email' => 'teller@example.com',
            'password' => bcrypt('password'),
        ]);
        $tellerUser->assignRole($tellerRole);
    }
}
