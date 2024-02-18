<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportBankHolidays extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-bank-holidays';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Bank Holidays From UK Government API';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('Importing Bank Holidays from ' . env('BANK_HOLS_API_URL'));
    }
}
