<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Support\Str;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */

    // 1st way
    // protected $signature = 'user:new';

    // 2nd way
    // protected $signature = 'user:new {name} {email} {password}';

    // 3rd way
    // ? is optional
    // protected $signature = 'user:new {name} {email} {password?}';

    // 4th way
    // --??= means it's a flag or options
    protected $signature = 'user:new {--name=} {--email=} {--password=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create a new user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // 1st way
        // User::create([
        //     'name' => Str::random(5),
        //     'email' => Str::random(5) . '@gmail.com',
        //     'password' => bcrypt(Str::random(6))
        // ]);

        // 2nd way
        // $name = $this->argument('name');
        // $email = $this->argument('email');
        // $password = $this->argument('password');
        // User::create([
        //     'name' => $name,
        //     'email' => $email . '@gmail.com',
        //     'password' => bcrypt($password)
        // ]);

        // 3rd way
        // $name = $this->argument('name');
        // $email = $this->argument('email');
        // $password = $this->argument('password') ?? Str::random(6);
        // User::create([
        //     'name' => $name,
        //     'email' => $email,
        //     'password' => bcrypt($password)
        // ]);

        // 4th way
        $name = $this->option('name');
        $email = $this->option('email');
        $password = $this->option('password') ?? Str::random(6);
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password)
        ]);

        $this->info('success');
    }
}
