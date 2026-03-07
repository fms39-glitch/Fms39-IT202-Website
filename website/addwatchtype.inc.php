<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->

<?php
require_once("watchtype.php");
if (isset($_SESSION['login'])) {
    $watches_type_id = $_POST['watches_type_id'];
    if ((trim($watches_type_id) == '') or (!is_numeric($watches_type_id))) {
        echo "<h2>Sorry, you must enter a valid watch type ID number</h2>\n";
    } else if (WatchType::findWatchType($watches_type_id)) {
        echo "<h2>Sorry, A watch type with the ID #$watches_type_id already exists</h2>\n";
    } else {
        $watches_type_code = $_POST['watches_type_code'];
        $watches_type_name = $_POST['watches_type_name'];
        $watches_ShelfNumber = $_POST['watches_ShelfNumber'];
        $watchType = new WatchType($watches_type_id, $watches_type_code, $watches_type_name, $watches_ShelfNumber);
        $result = $watchType->saveWatchType();
        if ($result) {
            echo "<h2>New Watch Type #$watches_type_id successfully added</h2>\n";
        } else {
            echo "<h2>Sorry, there was a problem adding that watch type</h2>\n";
        }
    }
} else {
    echo "<h2>Please log in first</h2>\n";
}
?>