<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->
<h2>Enter New Watch Type Information</h2>
<form name="newwatchtype" action="index.php" method="post">
    <table cellpadding="1" border="0">
        <tr>
            <td>watches_type_id:</td>
            <!-- type="number"  only numbers can be entered -->
            <!-- min/max sets allowed numeric range -->
            <!-- required:  field cannot be left blank -->
            <td><input type="number" name="watches_type_id" size="4" min="1" max="9999" required></td>
        </tr>
        <tr>
            <td>watches_type_code:</td>
            <!-- minlength/maxlength enforces character length limits -->
            <!-- required ensures field cannot be left blank -->
            <td><input type="text" name="watches_type_code" size="20" minlength="2" maxlength="10" required></td>
        </tr>
        <tr>
            <td>watches_type_name:</td>
            <!-- minlength of 10 ensures a meaningful name is entered -->
            <!-- maxlength of 100 matches database column limit -->
            <td><input type="text" name="watches_type_name" size="20" minlength="10" maxlength="100" required></td>
        </tr>
        <tr>
            <td>watches_ShelfNumber:</td>
            <!-- type="number" ensures only numbers can be entered for shelf -->
            <td><input type="number" name="watches_ShelfNumber" size="4" min="1" max="999" required></td>
        </tr>
    </table><br>
    <input type="submit" value="Submit New Watch Type">
    <input type="hidden" name="content" value="addwatchtype">
</form>