<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->
<?php
error_log('$_POST ' . print_r($_POST, true));
require_once("watch.php");
if (isset($_SESSION['login'])) {
    $watches_id = $_POST['watches_id'];
    if ((trim($watches_id) == '') or (!is_numeric($watches_id))) {
        echo "<h2>Sorry, you must enter a valid watches_id</h2>\n";
    } else if (!Watch::findWatch($watches_id)) {
        echo "<h2>Sorry, A watch with ID #$watches_id does not exist</h2>\n";
    } else {
        $watches_id = $_POST['watches_id'];
        $watch = Watch::findWatch($watches_id);
        $result = $watch->removeWatch();
        if ($result)
            echo "<h2>Watch $watches_id removed</h2>\n";
        else
            echo "<h2>Sorry, problem removing watch $watches_id</h2>\n";
    }
} else {
    echo "<h2>Please login first</h2>\n";
}
?>