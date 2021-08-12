<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class iseedAll extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'iseed:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'seed all database tables related to boyager';

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
        exec('php artisan iseed data_types,data_rows,menus,menu_items,roles,permissions,permission_role,settings,users --clean --force');
        return 0;
    }
}
