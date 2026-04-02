<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->

<?php
if (isset($_SESSION['login'])) {
?>
    <div class="navigation" style="float: left; height: 100%; min-width: 175px; width: auto;">
        <table width="100%" cellpadding="3">
            <?php
            echo "<td><h3>Welcome, {$_SESSION['firstName']} {$_SESSION['lastName']}</h3></td>";
            ?>
            <tr>
                <td><a href="index.php"><strong>Home</strong></a></td>
            </tr>
            <tr>
                <td><strong>Watch Types</strong></td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listwatchestypes">
                        <strong>List Watch Types</strong></a></td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newwatchtype">
                        <strong>Add New Watch Type</strong></a></td>
            </tr>
            <tr>
                <td><strong>Watches</strong></td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listwatches">
                        <strong>List Watches</strong></a></td>
            </tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newwatch">
                        <strong>Add New Watch</strong></a></td>
            </tr>
            <tr>
                <td>
                    <hr />
                </td>
            </tr>
            <tr>
                <td><a href="index.php?content=logout">
                        <strong>Logout</strong></a></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <form action="index.php" method="post">
                        <label>Search for Watch:</label><br>
                        <input type="text" name="watches_id" size="14" />
                        <input type="submit" value="find" />
                        <input type="hidden" name="content" value="updatewatch" />
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    <form action="index.php" method="post">
                        <label>Search for Watch Type:</label><br>
                        <input type="text" name="watches_type_id" size="14" />
                        <input type="submit" value="find" />
                        <input type="hidden" name="content" value="displaywatchtype" />
                    </form>
                </td>
            </tr>
        </table>
    </div>
<?php
}
?>