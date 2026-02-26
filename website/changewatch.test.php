<?php
require_once("watch.php");
$watches_id = $_POST['watches_id'];
if ((trim($watches_id) == '') or (!is_numeric($watches_id))) {
    echo "<h2>Sorry, you must enter a valid watch ID</h2>\n";
} else if (!Watch::findWatch($watches_id)) {
    echo "<h2>Sorry, A watch with ID #$watches_id does not exist</h2>\n";
} else {
    $watch = Watch::findWatch($watches_id);
    $watch->watches_id = $_POST['watches_id'];
    $watch->watches_code = $_POST['watches_code'];
    $watch->watches_name = $_POST['watches_name'];
    $watch->watches_description = $_POST['watches_description'];
    $watch->watchesMaterial = $_POST['watchesMaterial'];
    $watch->watchesWaterResistance = $_POST['watchesWaterResistance'];
    $watch->watches_type_id = !empty($_POST['watches_type_id']) ? $_POST['watches_type_id'] : NULL;
    $watch->watches_buy_price = $_POST['watches_buy_price'];
    $watch->watches_sell_price = $_POST['watches_sell_price'];
    $result = $watch->updateWatch();
    if ($result) {
        echo "<h2>Watch $watches_id updated</h2>\n";
    } else {
        echo "<h2>Problem updating watch $watches_id</h2>\n";
    }
}
