<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateFilamentAdminUser extends Command
{
    protected $signature = 'make:filament-admin-user';
    protected $description = 'Create a new Filament admin user';

    public function handle()
    {
        $email = 'admin@gmail.com';
        $password = 123456;

        if (User::where('email', $email)->exists()) {
            $this->warn("User with email {$email} already exists!");
            return;
        }

        User::create([
            'name' => 'Admin User',
            'email' => $email,
            'password' => Hash::make($password),
          
        ]);

        $this->info("Filament admin user created successfully. Email: {$email}");
    }
}