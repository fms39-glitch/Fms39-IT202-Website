<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->
<?php
require_once("watchtype.php");
if (isset($_SESSION['login'])) {
    $watches_type_id = $_POST['watches_type_id'];
    if ((trim($watches_type_id) == '') or (!is_numeric($watches_type_id))) {
        echo "<h2>Sorry, you must enter a valid watch type ID</h2>\n";
    } else if (!WatchType::findWatchType($watches_type_id)) {
        echo "<h2>Sorry, A watch type with ID #$watches_type_id does not exist</h2>\n";
    } else {
        $answer = $_POST['answer'];
        if ($answer == "Update Watch Type") {
            $watchType = WatchType::findWatchType($watches_type_id);
            $watchType->watches_type_id = $_POST['watches_type_id'];
            $watchType->watches_type_code = htmlspecialchars($_POST['watches_type_code']);
            $watchType->watches_type_name = htmlspecialchars($_POST['watches_type_name']);
            $watchType->watches_ShelfNumber = $_POST['watches_ShelfNumber'];
            $result = $watchType->updateWatchType();
            if ($result) {
                echo "<h2>Watch Type $watches_type_id updated</h2>\n";
            } else {
                echo "<h2>Problem updating watch type $watches_type_id</h2>\n";
            }
        } else {
            echo "<h2>Update Canceled for watch type $watches_type_id</h2>\n";
        }
    }
} else {
    echo "<h2>Please login first</h2>\n";
}
?>