<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->

<?php
require_once('watch.php');
$watches_id = $_POST['watches_id'];
if ((trim($watches_id) == '') or (!is_numeric($watches_id))) {
    echo "<h2>Sorry, you must enter a valid watch ID number</h2>\n";
} else if (Watch::findWatch($watches_id)) {
    echo "<h2>Sorry, A watch with the ID #$watches_id already exists</h2>\n";
} else {
    $watches_code = $_POST['watches_code'];
    $watches_name = $_POST['watches_name'];
    $watches_description = $_POST['watches_description'];
    $watchesMaterial = $_POST['watchesMaterial'];
    $watchesWaterResistance = $_POST['watchesWaterResistance'];
    $watches_type_id = !empty($_POST['watches_type_id']) ? $_POST['watches_type_id'] : NULL;
    $watches_buy_price = $_POST['watches_buy_price'];
    $watches_sell_price = $_POST['watches_sell_price'];
    $watch = new Watch($watches_id, $watches_code, $watches_name, $watches_description, $watchesMaterial, $watchesWaterResistance, $watches_type_id, $watches_buy_price, $watches_sell_price);
    $result = $watch->saveWatch();
    if ($result) {
        echo "<h2>New Watch #$watches_id successfully added</h2>\n";
        echo "<h2>Watch ID: $watches_id</h2>\n";
        echo "<h2>$watches_code - $watches_name</h2>\n";
        echo "<h2>Description: $watches_description</h2>\n";
        echo "<h2>Material: $watchesMaterial - Water Resistance: $watchesWaterResistance</h2>\n";
        echo "<h2>Type ID: $watches_type_id</h2>\n";
        echo "<h2>Buy Price: $watches_buy_price - Sell Price: $watches_sell_price</h2>\n";
    } else {
        echo "<h2>Sorry, there was a problem adding that watch</h2>\n";
    }
}
