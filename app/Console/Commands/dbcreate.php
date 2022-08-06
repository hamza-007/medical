<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class dbcreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:create {
    name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new mysql database';

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

        $schemaName = $this->argument('name') ?: config('database.connections.mysql.database');
        $charset = config('dtatabase.connections.mysql.charset', 'utf8mb4');
        $colletion = config('database.connections.mysql.collation', 'utf8mb4_general_c1');
    }
}
