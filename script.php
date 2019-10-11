<?php

use PhpOffice\PhpSpreadsheet\IOFactory;
use Tightenco\Collect\Support\Collection;

require 'vendor/autoload.php';

// Determine the filepath of the Excel sheet
$spreadsheetPath = 'data/sheet.xlsm';

// Create a reader for the current file
$reader = IOFactory::createReaderForFile($spreadsheetPath);
$reader->setReadDataOnly(true);

// Load the right tab
$reader->setLoadSheetsOnly(['Population']);

// Get a Spreadsheet instance.
$spreadsheet = $reader->load($spreadsheetPath);

// Let's define some info about the sheets we're looking at...
$startRow = 16;
$endRow = 275;

// And the cells we care about
$nameCell = 'Q';
$acsCell = 'R';

// And the categories that will end up in the JSON data structure
$categories = ['name'];

$entries = new Collection();

for ($row = $startRow; $row <= $endRow; $row++) {
    $activeSheet = $spreadsheet->getActiveSheet();
    $data = [];

    foreach ($categories as $category) {
        $name = $activeSheet->getCell("{$nameCell}{$row}")->getValue();
        $acs = $activeSheet->getCell("{$acsCell}{$row}")->getValue();
    }

    $entries->push([
        'name' => $name,
        'acsAdmissions' => $acs
    ]);
}

$fp = fopen('./src/data/acs.json', 'w');
fwrite($fp, $entries->toJson());
fclose($fp);
