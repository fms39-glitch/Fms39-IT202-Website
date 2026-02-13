<!--Faizan Shaikh, 2/13/26, IT202-002, Login-Logout assignment, fms39@njit.edu-->


<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Inventory Helper</title>
</head>

<body>
    <section>
        <main>
            <?php
            if (isset($_REQUEST['content'])) {
                include($_REQUEST['content'] . ".inc.php");
            } else {
                include("main.inc.php");
            }
            ?>
        </main>
    </section>
</body>

</html>