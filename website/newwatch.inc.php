<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->
<h2>Enter New Watch Information</h2>
<form name="newwatch" action="index.php" method="post">
    <table cellpadding="1" border="0">
        <tr>
            <td>watches_id:</td>
            <!-- number type, required, min/max range -->
            <td><input type="number" name="watches_id" min="1" max="9999" required></td>
        </tr>
        <tr>
            <td>watches_code:</td>
            <!-- required, min 2 max 10 characters -->
            <td><input type="text" name="watches_code" minlength="2" maxlength="10" required></td>
        </tr>
        <tr>
            <td>watches_name:</td>
            <!-- required, min 10 max 100 characters -->
            <td><input type="text" name="watches_name" minlength="10" maxlength="100" required></td>
        </tr>
        <tr>
            <td>watches_description:</td>
            <!-- required, min 100 max 255 characters -->
            <td><input type="text" name="watches_description" minlength="100" maxlength="255" required></td>
        </tr>
        <tr>
            <td>watchesMaterial:</td>
            <!-- required, min 2 max 50 characters matches VARCHAR(50) -->
            <td><input type="text" name="watchesMaterial" minlength="2" maxlength="50" required></td>
        </tr>
        <tr>
            <td>watchesWaterResistance:</td>
            <!-- required, min 2 max 60 characters matches VARCHAR(60) -->
            <td><input type="text" name="watchesWaterResistance" minlength="2" maxlength="60" required></td>
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
            <!-- number type, decimal allowed with step, min/max range -->
            <td><input type="number" name="watches_buy_price" min="0.01" max="999999.99" step="0.01" required></td>
        </tr>
        <tr>
            <td>watches_sell_price:</td>
            <!-- number type, decimal allowed with step, min/max range -->
            <td><input type="number" name="watches_sell_price" min="0.01" max="999999.99" step="0.01" required></td>
        </tr>
    </table><br>
    <input type="submit" value="Submit New Watch">
    <input type="hidden" name="content" value="addwatch">
</form>