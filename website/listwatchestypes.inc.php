<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->

<?php
require_once("watchtype.php");
$watchTypes = WatchType::getWatchTypes();
if ($watchTypes) {
?>
    <h2>Select Watch Type</h2>
    <form name="watchtypes" method="post">
        <select name="watches_type_id" size="20">
            <?php
            $first = true;
            foreach ($watchTypes as $watchType) {
                $watches_type_id = $watchType->watches_type_id;
                $name = $watches_type_id . " - " . $watchType->watches_type_code . ", " . $watchType->watches_type_name . ", Shelf: " . $watchType->watches_ShelfNumber;
                if ($first) {
                    echo "<option value=\"$watches_type_id\" selected>$name</option>\n";
                    $first = false;
                } else {
                    echo "<option value=\"$watches_type_id\">$name</option>\n";
                }
            }
            ?>
        </select>
    </form>
<?php
} else {
    echo "<h2>No watch types found.</h2>";
}
?>