<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CreateUser extends Command
{
    protected $signature = 'user:create {name} {email} {password}';


    public function handle()
    {
        $name = $this->argument('name');
        $email = $this->argument('email');
        $password = $this->argument('password');

        User::create([
            "name" => $name,
            "email" => $email,
            "password" => bcrypt($password)
        ]);

        $this->info('User created successfully!');
    }
}
