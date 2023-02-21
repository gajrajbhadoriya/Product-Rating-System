<?php

use App\Database\DBTransaction;

require __DIR__ . "/vendor/autoload.php";


$record = new DBTransaction();
if (isset($_GET['id']) && isset($_GET['req'])) {
    if ($_GET['req'] == "detele") {
        $record->setId($_GET['id']);
        $record->deleteData();
    }
}

?>
