<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->

<?php
require_once("watchtype.php");
$watches_type_id = $_POST['watches_type_id'];
if ((trim($watches_type_id) == '') or (!is_numeric($watches_type_id))) {
    echo "<h2>Sorry, you must enter a valid watch type ID</h2>\n";
} else if (!WatchType::findWatchType($watches_type_id)) {
    echo "<h2>Sorry, A watch type with ID #$watches_type_id does not exist</h2>\n";
} else {
    $watch = WatchType::findWatchType($watches_type_id);
    $watch->watches_type_id = $_POST['watches_type_id'];
    $watch->watches_type_code = $_POST['watches_type_code'];
    $watch->watches_type_name = $_POST['watches_type_name'];
    $watch->watches_ShelfNumber = $_POST['watches_ShelfNumber'];
    $result = $watch->updateWatchType();
    if ($result) {
        echo "<h2>Watch Type $watches_type_id updated</h2>\n";
    } else {
        echo "<h2>Problem updating watch type $watches_type_id</h2>\n";
    }
}
