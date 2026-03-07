<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->

<h2>Enter New Watch Type Information</h2>
<form name="newwatchtype" action="index.php" method="post">
    <table cellpadding="1" border="0">
        <tr>
            <td>watches_type_id:</td>
            <td><input type="text" name="watches_type_id" size="4"></td>
        </tr>
        <tr>
            <td>watches_type_code:</td>
            <td><input type="text" name="watches_type_code" size="20"></td>
        </tr>
        <tr>
            <td>watches_type_name:</td>
            <td><input type="text" name="watches_type_name" size="20"></td>
        </tr>
        <tr>
            <td>watches_ShelfNumber:</td>
            <td><input type="text" name="watches_ShelfNumber" size="4"></td>
        </tr>
    </table><br>
    <input type="submit" value="Submit New Watch Type">
    <input type="hidden" name="content" value="addwatchtype">
</form>