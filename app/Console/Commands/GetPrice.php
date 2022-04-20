<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GetPrice extends Command
{

    protected $signature = 'GetPrice';


    protected $description = 'command that fetch price';


    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        app()->call('App\Http\Controllers\api\CryptoController@storePrice');
    }
}
