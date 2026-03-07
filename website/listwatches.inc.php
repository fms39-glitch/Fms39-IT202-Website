<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->

<?php
require_once("watch.php");
$watches = Watch::getWatches();
if ($watches) {
?>
    <h2>Select Watch</h2>
    <form name="watches" method="post">
        <select name="watches_id" size="20">
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
    </form>
<?php
} else {
    echo "<h2>No watches found.</h2>";
}
?>