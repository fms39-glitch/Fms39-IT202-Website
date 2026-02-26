<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->

<?php
require_once("watch.php");
$watches = Watch::getWatches();
if ($watches) {
    foreach ($watches as $watch) {
        $watches_id = $watch->watches_id;
        $watches_name = $watch->watches_name;
        $watches_buy_price = $watch->watches_buy_price;
        $watches_sell_price = $watch->watches_sell_price;
        $option = $watches_id . " - " . $watches_name . " - Buy: " . $watches_buy_price . " - Sell: " . $watches_sell_price;
        echo "$option<br>";
    }
} else {
    echo "<h2>No watches found.</h2>";
}
