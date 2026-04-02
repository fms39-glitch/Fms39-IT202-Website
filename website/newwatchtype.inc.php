<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->
<h2>Enter New Watch Type Information</h2>
<form name="newwatchtype" action="index.php" method="post">
    <table cellpadding="1" border="0">
        <tr>
            <td>watches_type_id:</td>
            <!-- number type, required, min/max range -->
            <td><input type="number" name="watches_type_id" min="1" max="9999" required></td>
        </tr>
        <tr>
            <td>watches_type_code:</td>
            <!-- required, min 2 max 10 characters -->
            <td><input type="text" name="watches_type_code" minlength="2" maxlength="10" required></td>
        </tr>
        <tr>
            <td>watches_type_name:</td>
            <!-- required, min 10 max 100 characters -->
            <td><input type="text" name="watches_type_name" minlength="10" maxlength="100" required></td>
        </tr>
        <tr>
            <td>watches_ShelfNumber:</td>
            <!-- number type, required, min/max range -->
            <td><input type="number" name="watches_ShelfNumber" min="1" max="999" required></td>
        </tr>
    </table><br>
    <input type="submit" value="Submit New Watch Type">
    <input type="hidden" name="content" value="addwatchtype">
</form>