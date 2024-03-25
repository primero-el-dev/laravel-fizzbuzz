<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FizzBuzzCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fizzbuzz';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'FizzBuzz game to 100';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        for ($i = 1; $i <= 100; $i++) {
            $output = $i . ' ';
            if ($i % 3 === 0) {
                $output .= 'Fizz';
            }
            if ($i % 5 === 0) {
                $output .= 'Buzz';
            }
            $this->line($output);
        }
    }
}
