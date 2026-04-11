<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->
<script language="javascript">
    function listbox_dblclick_type() {
        document.watchtypes.displaywatchtype.click()
    }

    function button_click_type(target) {
        var userConfirmed = true;
        if (target == 1) {
            userConfirmed = confirm("Are you sure you want to remove this watch type?");
        }
        if (userConfirmed) {
            if (target == 0) watchtypes.action = "index.php?content=displaywatchtype";
            if (target == 1) watchtypes.action = "index.php?content=removewatchtype";
            if (target == 2) watchtypes.action = "index.php?content=updatewatchtype";
        } else {
            alert("Action canceled.");
        }
    }
</script>
<?php
require_once("watchtype.php");
$watchTypes = WatchType::getWatchTypes();
if ($watchTypes) {
?>
    <h2>Select Watch Type</h2>
    <form name="watchtypes" method="post">
        <select ondblclick="listbox_dblclick_type()" name="watches_type_id" size="20">
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
        <br>
        <input type="submit" onClick="button_click_type(0)" name="displaywatchtype" value="View Watch Type">
        <input type="submit" onClick="button_click_type(1)" name="deletewatchtype" value="Delete Watch Type">
        <input type="submit" onClick="button_click_type(2)" name="updatewatchtype" value="Update Watch Type">
    </form>
<?php
} else {
    echo "<h2>No watch types found.</h2>";
}
?>