<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->
<?php
error_log('$_POST ' . print_r($_POST, true));
require_once("watchtype.php");
if (isset($_SESSION['login'])) {
    $watches_type_id = $_POST['watches_type_id'];
    if ((trim($watches_type_id) == '') or (!is_numeric($watches_type_id))) {
        echo "<h2>Sorry, you must enter a valid watches_type_id</h2>\n";
    } else if (!WatchType::findWatchType($watches_type_id)) {
        echo "<h2>Sorry, A watch type with ID #$watches_type_id does not exist</h2>\n";
    } else {
        $watches_type_id = $_POST['watches_type_id'];
        $watchType = WatchType::findWatchType($watches_type_id);
        $result = $watchType->removeWatchType();
        if ($result)
            echo "<h2>Watch Type $watches_type_id removed</h2>\n";
        else
            echo "<h2>Sorry, problem removing watch type $watches_type_id</h2>\n";
    }
} else {
    echo "<h2>Please login first</h2>\n";
}
?>