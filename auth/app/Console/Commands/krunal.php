<?php

namespace App\Console\Commands;

use Faker\Guesser\Name;
use Illuminate\Console\Command;

class krunal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:krunal {--name=?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->option('name');
        $this->info($name);
    }
}
