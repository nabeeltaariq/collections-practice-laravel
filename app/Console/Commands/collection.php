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
        // $data = [['price' => 3000, "tax" => 100, 'active' => false], ['price' => 300, "tax" => 200, 'active' => true]];
        // echo  collect($data)->min('price');
        $data = [1, 2, 3];

        echo collect($data)->combine(["100" => 123, "256785678" => 345, "577799" => 123]);
    }
}
