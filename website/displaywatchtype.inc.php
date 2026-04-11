<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->
<?php
if (!isset($_REQUEST['watches_type_id']) or (!is_numeric($_REQUEST['watches_type_id']))) {
?>
    <h2>You did not select a valid watches_type_id to view.</h2>
    <a href="index.php?content=listwatchestypes">List Watch Types</a>
    <?php
} else {
    $watches_type_id = $_REQUEST['watches_type_id'];
    $watchType = WatchType::findWatchType($watches_type_id);
    if ($watchType) {
        echo $watchType;
        $watches = Watch::getWatchesByType($watches_type_id);
        if ($watches) {
    ?>
            <br><br>
            <b>Watches:</b><br>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Buy Price</th>
                    <th>Sell Price</th>
                </tr>
                <?php
                $total = 0;
                foreach ($watches as $watch) {
                ?>
                    <tr>
                        <td><?php echo $watch->watches_id; ?></td>
                        <td><?php echo $watch->watches_code; ?></td>
                        <td><?php echo $watch->watches_name; ?></td>
                        <td><?php echo '$' . number_format($watch->watches_buy_price, 2); ?></td>
                        <td><?php echo '$' . number_format($watch->watches_sell_price, 2); ?></td>
                    </tr>
                <?php
                    $total = $total + $watch->watches_sell_price;
                }
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total</td>
                    <td></td>
                    <td><?php echo '$' . number_format($total, 2); ?></td>
                </tr>
            </table>
<?php
        } else {
            echo "<h2>There are no watches for this watch type</h2>\n";
        }
    } else {
        echo "<h2>Sorry, watch type $watches_type_id not found</h2>\n";
    }
}
?>