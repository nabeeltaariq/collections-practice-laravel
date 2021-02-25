<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


class collection extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        $collection = collect([
            ['product' => "apple", "price" => 59],
            ['product' => "apple", "price" => 69],
            ['product' => "Samsung", "price" => 40],
            ['product' => "Samsung", "price" => 50]
        ]);
        echo $collection->pluck('price');
    }
}
