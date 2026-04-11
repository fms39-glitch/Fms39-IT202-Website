<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->
<script language="javascript">
    function listbox_dblclick_watch() {
        document.watches.displaywatch.click()
    }

    function button_click_watch(target) {
        var userConfirmed = true;
        if (target == 1) {
            userConfirmed = confirm("Are you sure you want to remove this watch?");
        }
        if (userConfirmed) {
            if (target == 0) watches.action = "index.php?content=displaywatch";
            if (target == 1) watches.action = "index.php?content=removewatch";
            if (target == 2) watches.action = "index.php?content=updatewatch";
        } else {
            alert("Action canceled.");
        }
    }
</script>
<?php
require_once("watch.php");
$watches = Watch::getWatches();
if ($watches) {
?>
    <h2>Select Watch</h2>
    <form name="watches" method="post">
        <select ondblclick="listbox_dblclick_watch()" name="watches_id" size="20">
            <?php
            $first = true;
            foreach ($watches as $watch) {
                $watches_id = $watch->watches_id;
                $watches_name = $watch->watches_name;
                $watches_sell_price = $watch->watches_sell_price;
                $option = $watches_id . " - " . $watches_name . " - " . number_format($watches_sell_price, 2);
                if ($first) {
                    echo "<option value=\"$watches_id\" selected>$option</option>\n";
                    $first = false;
                } else {
                    echo "<option value=\"$watches_id\">$option</option>\n";
                }
            }
            ?>
        </select>
        <br>
        <input type="submit" onClick="button_click_watch(0)" name="displaywatch" value="View Watch">
        <input type="submit" onClick="button_click_watch(1)" name="deletewatch" value="Delete Watch">
        <input type="submit" onClick="button_click_watch(2)" name="updatewatchsubmit" value="Update Watch">
    </form>
<?php
} else {
    echo "<h2>No watches found.</h2>";
}
?>