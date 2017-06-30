<?php
namespace App\Components;

use Carbon\Carbon;
use Sheets;
use Google;

/**
 * Created by PhpStorm.
 * User: james
 * Date: 30/06/2017
 * Time: 11:12
 */
class Timesheet extends LaravelGoogleSheet
{
    private $timesheetId;
    private $month;
    private $checkingUserIds;

    public function __construct()
    {
        $spreadsheetId = config('common.timesheet_spreadsheet_id');
        parent::__construct($spreadsheetId);
        $this->timesheetId = $spreadsheetId;
        $this->month = $this->getCurrentMonth();
        $this->checkingUserIds = config('common.timesheet_checking_user_ids');
    }

    public function getCurrentMonth()
    {
        $now = Carbon::now();
        $currentMonth = ucfirst($now->month) . $now->year;

        return $currentMonth;
    }

    public function getTimesheetData()
    {
        $rows = Sheets::sheet($this->month)->all();
    }
}
