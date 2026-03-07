<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->

<?php
if (!isset($_POST['watches_id']) or (!is_numeric($_POST['watches_id']))) {
?>
    <h2>You did not select a valid watches_id value</h2>
    <a href="index.php?content=listwatches">List Watches</a>
    <?php
} else {
    $watches_id = $_POST['watches_id'];
    $watch = Watch::findWatch($watches_id);
    if ($watch) {
    ?>
        <h2>Update Watch <?php echo $watch->watches_id; ?></h2><br>
        <form name="watches" action="index.php" method="post">
            <table>
                <tr>
                    <td>watches_id</td>
                    <td><?php echo $watch->watches_id; ?></td>
                </tr>
                <tr>
                    <td>watches_code</td>
                    <td><input type="text" name="watches_code" value="<?php echo $watch->watches_code; ?>"></td>
                </tr>
                <tr>
                    <td>watches_name</td>
                    <td><input type="text" name="watches_name" value="<?php echo $watch->watches_name; ?>"></td>
                </tr>
                <tr>
                    <td>watches_description</td>
                    <td><input type="text" name="watches_description" value="<?php echo $watch->watches_description; ?>"></td>
                </tr>
                <tr>
                    <td>watchesMaterial</td>
                    <td><input type="text" name="watchesMaterial" value="<?php echo $watch->watchesMaterial; ?>"></td>
                </tr>
                <tr>
                    <td>watchesWaterResistance</td>
                    <td><input type="text" name="watchesWaterResistance" value="<?php echo $watch->watchesWaterResistance; ?>"></td>
                </tr>
                <tr>
                    <td>Watch Type:</td>
                    <td><select name="watches_type_id">
                            <?php
                            echo "<option value=\"0\">Select a Watch Type</option>\n";
                            $watchTypes = WatchType::getWatchTypes();
                            if ($watchTypes)
                                foreach ($watchTypes as $watchType) {
                                    $watches_type_id = $watchType->watches_type_id;
                                    $selected = $watches_type_id == $watch->watches_type_id ? "selected" : "";
                                    echo "<option value=\"$watches_type_id\" $selected>$watchType</option>\n";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>watches_buy_price</td>
                    <td><input type="text" name="watches_buy_price" value="<?php echo $watch->watches_buy_price; ?>"></td>
                </tr>
                <tr>
                    <td>watches_sell_price</td>
                    <td><input type="text" name="watches_sell_price" value="<?php echo $watch->watches_sell_price; ?>"></td>
                </tr>
            </table><br><br>
            <input type="submit" name="answer" value="Update Watch">
            <input type="submit" name="answer" value="Cancel">
            <input type="hidden" name="watches_id" value="<?php echo $watches_id; ?>">
            <input type="hidden" name="content" value="changewatch">
        </form>
    <?php
    } else {
    ?>
        <h2>Sorry, watch <?php echo $watches_id; ?> not found</h2>
        <a href="index.php?content=listwatches">List Watches</a>
<?php
    }
}
?>