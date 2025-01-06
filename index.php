<?php

declare(strict_types=1);

require_once './autoload.php';

require "./recruitStaff.php";
require "./printReport.php";


$workers = $recruitStaff();

printReport($workers);
