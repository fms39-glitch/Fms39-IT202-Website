<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->
<h2>Enter New Watch Information</h2>
<form name="newwatch" action="index.php" method="post">
    <table cellpadding="1" border="0">
        <tr>
            <td>watches_id:</td>
            <!-- type="number" ensures only numbers, min/max sets range, required prevents blank -->
            <td><input type="number" name="watches_id" size="4" min="1" max="9999" required></td>
        </tr>
        <tr>
            <td>watches_code:</td>
            <!-- minlength/maxlength enforces code length, required prevents blank -->
            <td><input type="text" name="watches_code" size="20" minlength="2" maxlength="10" required></td>
        </tr>
        <tr>
            <td>watches_name:</td>
            <!-- maxlength matches database column VARCHAR(255) limit -->
            <td><input type="text" name="watches_name" size="20" minlength="2" maxlength="255" required></td>
        </tr>
        <tr>
            <td>watches_description:</td>
            <!-- minlength of 10 ensures a meaningful description is entered -->
            <td><input type="text" name="watches_description" size="40" minlength="10" maxlength="1000" required></td>
        </tr>
        <tr>
            <td>watchesMaterial:</td>
            <!-- maxlength of 50 matches database column VARCHAR(50) limit -->
            <td><input type="text" name="watchesMaterial" size="20" minlength="2" maxlength="50" required></td>
        </tr>
        <tr>
            <td>watchesWaterResistance:</td>
            <!-- maxlength of 60 matches database column VARCHAR(60) limit -->
            <td><input type="text" name="watchesWaterResistance" size="20" minlength="2" maxlength="60" required></td>
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
            <!-- type="number" with step="0.01" allows decimal prices, min prevents negative values -->
            <td><input type="number" name="watches_buy_price" size="10" min="0.01" max="999999.99" step="0.01" required></td>
        </tr>
        <tr>
            <td>watches_sell_price:</td>
            <!-- step="0.01" allows cents, max sets reasonable price ceiling -->
            <td><input type="number" name="watches_sell_price" size="10" min="0.01" max="999999.99" step="0.01" required></td>
        </tr>
    </table><br>
    <input type="submit" value="Submit New Watch">
    <input type="hidden" name="content" value="addwatch">
</form>