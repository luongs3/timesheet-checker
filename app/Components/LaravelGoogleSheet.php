<?php
namespace App\Components;

use Sheets;
use Google;

/**
 * Created by PhpStorm.
 * User: james
 * Date: 30/06/2017
 * Time: 09:30
 */
class LaravelGoogleSheet
{

    public function __construct($spreadsheetId)
    {
        Sheets::setService(Google::make('sheets'));
        Sheets::spreadsheet($spreadsheetId);
    }
}