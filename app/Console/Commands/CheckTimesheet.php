<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ChecKTimesheet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:timesheet';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Daily at 14:00 check timesheet for all users in my list users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(\Timesheet $timesheet)
    {
        parent::__construct();
        $this->timesheet = $timesheet;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}
