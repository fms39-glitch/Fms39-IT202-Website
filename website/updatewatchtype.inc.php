<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->
<style>
    form[name="watchtype"] {
        display: grid;
        grid-template-columns: 175px 1fr;
        gap: 10px 5px;
        align-items: left;
        max-width: 400px;
        margin: 0px;
    }

    form[name="watchtype"] label {
        text-align: left;
        padding-right: 5px;
    }

    form[name="watchtype"] input[type="text"],
    form[name="watchtype"] input[type="number"] {
        width: 100%;
    }

    form[name="watchtype"] input[type="submit"] {
        grid-column: 2;
        justify-self: start;
    }
</style>
<?php
$watches_type_id = $_POST['watches_type_id'];
$watchType = WatchType::findWatchType($watches_type_id);
if ($watchType) {
?>
    <h2>Update Watch Type <?php echo $watches_type_id; ?></h2><br>
    <form name="watchtype" action="index.php" method="post">
        <label for="watches_type_code">watches_type_code:</label>
        <input type="text" name="watches_type_code" id="watches_type_code" minlength="2" maxlength="10" required value="<?php echo $watchType->watches_type_code; ?>">
        <label for="watches_type_name">watches_type_name:</label>
        <input type="text" name="watches_type_name" id="watches_type_name" minlength="10" maxlength="100" required value="<?php echo $watchType->watches_type_name; ?>">
        <label for="watches_ShelfNumber">watches_ShelfNumber:</label>
        <input type="number" name="watches_ShelfNumber" id="watches_ShelfNumber" min="1" max="999" required value="<?php echo $watchType->watches_ShelfNumber; ?>">
        <input type="submit" name="answer" value="Update Watch Type">
        <input type="submit" name="answer" value="Cancel">
        <input type="hidden" name="watches_type_id" value="<?php echo $watches_type_id; ?>">
        <input type="hidden" name="content" value="changewatchtype">
    </form>
<?php
} else {
?>
    <h2>Sorry, watch type <?php echo $watches_type_id; ?> not found</h2>
    <a href="index.php?content=listwatchestypes">List Watch Types</a>
<?php
}
?>
<script language="javascript">
    document.watchtype.watches_type_code.focus();
    document.watchtype.watches_type_code.select();
</script>