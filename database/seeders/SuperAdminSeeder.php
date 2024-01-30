<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Md. Nihan Uddin', 
            'email' => 'nihancoder@gmail.com',
            'password' => Hash::make('nihan1234')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Md. Nakib Uddin', 
            'email' => 'nakib@gmail.com',
            'password' => Hash::make('nakib1234')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Md. Nazim Uddin', 
            'email' => 'nazim@gmail.com',
            'password' => Hash::make('nazim1234')
        ]);
        $productManager->assignRole('Product Manager');
    }
}