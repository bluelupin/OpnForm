<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RegisterUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'register-user {name} {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Register a new user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $workspace = Workspace::create([
            'name' => 'My Workspace',
            'icon' => '🧪',
        ]);

        $user = User::create([
            'name' => $this->argument('name'),
            'email' => strtolower($this->argument('name')),
            'password' => bcrypt($this->argument('password')),
            'hear_about_us' => "reddit",
        ]);

        // Add relation with user
        $user->workspaces()->sync([
            $workspace->id => [
                'role' => 'admin',
            ],
        ], false);


        $this->info('User registered successfully!');

    }
}
