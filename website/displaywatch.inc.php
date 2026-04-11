<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->
<?php
if (!isset($_REQUEST['watches_id']) or (!is_numeric($_REQUEST['watches_id']))) {
?>
    <h2>You did not select a valid watches_id to view.</h2>
    <a href="index.php?content=listwatches">List Watches</a>
    <?php
} else {
    $watches_id = $_REQUEST['watches_id'];
    $watch = Watch::findWatch($watches_id);
    if ($watch) {
    ?>
        <h2>Watch Details</h2>
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>watches_id</td>
                <td><?php echo $watch->watches_id; ?></td>
            </tr>
            <tr>
                <td>watches_code</td>
                <td><?php echo $watch->watches_code; ?></td>
            </tr>
            <tr>
                <td>watches_name</td>
                <td><?php echo $watch->watches_name; ?></td>
            </tr>
            <tr>
                <td>watches_description</td>
                <td><?php echo $watch->watches_description; ?></td>
            </tr>
            <tr>
                <td>watchesMaterial</td>
                <td><?php echo $watch->watchesMaterial; ?></td>
            </tr>
            <tr>
                <td>watchesWaterResistance</td>
                <td><?php echo $watch->watchesWaterResistance; ?></td>
            </tr>
            <tr>
                <td>watches_type_id</td>
                <td><?php echo $watch->watches_type_id; ?></td>
            </tr>
            <tr>
                <td>watches_buy_price</td>
                <td><?php echo '$' . number_format($watch->watches_buy_price, 2); ?></td>
            </tr>
            <tr>
                <td>watches_sell_price</td>
                <td><?php echo '$' . number_format($watch->watches_sell_price, 2); ?></td>
            </tr>
        </table>
        <br>
        <a href="index.php?content=listwatches">List Watches</a>
    <?php
    } else {
    ?>
        <h2>Sorry, watch <?php echo $watches_id; ?> not found</h2>
        <a href="index.php?content=listwatches">List Watches</a>
<?php
    }
}
?>