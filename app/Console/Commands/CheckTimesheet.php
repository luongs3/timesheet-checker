<?php

namespace App\Console\Commands;

use App\Components\Timesheet;
use Illuminate\Console\Command;

class CheckTimesheet extends Command
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
    protected $timesheet;

    /**
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
        $this->timesheet = new Timesheet();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $data = $this->timesheet->getTimesheetData();

        return $data;
    }
}
