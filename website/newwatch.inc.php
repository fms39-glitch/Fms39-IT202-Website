<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->

<h2>Enter New Watch Information</h2>
<form name="newwatch" action="index.php" method="post">
    <table cellpadding="1" border="0">
        <tr>
            <td>watches_id:</td>
            <td><input type="text" name="watches_id" size="4"></td>
        </tr>
        <tr>
            <td>watches_code:</td>
            <td><input type="text" name="watches_code" size="20"></td>
        </tr>
        <tr>
            <td>watches_name:</td>
            <td><input type="text" name="watches_name" size="20"></td>
        </tr>
        <tr>
            <td>watches_description:</td>
            <td><input type="text" name="watches_description" size="40"></td>
        </tr>
        <tr>
            <td>watchesMaterial:</td>
            <td><input type="text" name="watchesMaterial" size="20"></td>
        </tr>
        <tr>
            <td>watchesWaterResistance:</td>
            <td><input type="text" name="watchesWaterResistance" size="20"></td>
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
                            echo "<option value=\"$watches_type_id\">$watchType</option>\n";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>watches_buy_price:</td>
            <td><input type="text" name="watches_buy_price" size="10"></td>
        </tr>
        <tr>
            <td>watches_sell_price:</td>
            <td><input type="text" name="watches_sell_price" size="10"></td>
        </tr>
    </table><br>
    <input type="submit" value="Submit New Watch">
    <input type="hidden" name="content" value="addwatch">
</form>