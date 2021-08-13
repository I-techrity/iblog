<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class iseedDummy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'iseed:dummy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'seed all database tables related to iblog';

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
        exec('php artisan iseed users,articles,audio,videos,comments,categories,categorizable,tags,taggable --clean --force');
        return 0;
    }
}
