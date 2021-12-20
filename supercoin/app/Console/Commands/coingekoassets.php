<?php

namespace App\Console\Commands;

use App\Models\Exchange;
use Illuminate\Console\Command;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use Illuminate\Support\Facades\Log;

class coingekoassets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:coingeko';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update assets DB';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new CoinGeckoClient();
        $data = $client->derivatives()->getExchanges();
        foreach ($data as $exchange) {
            Exchange::create($exchange);
            Log::debug($exchange);
        }

        return command::SUCCESS;
    }
}
