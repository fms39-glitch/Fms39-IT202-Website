<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->

<?php
require_once("watchtype.php");
$watchTypes = WatchType::getWatchTypes();
if ($watchTypes) {
    foreach ($watchTypes as $watchType) {
        $watches_type_id = $watchType->watches_type_id;
        $name = $watches_type_id . " - " . $watchType->watches_type_code . ", " . $watchType->watches_type_name . ", Shelf: " . $watchType->watches_ShelfNumber;
        echo "$name<br>";
    }
} else {
    echo "<h2>No watch types found.</h2>";
}
