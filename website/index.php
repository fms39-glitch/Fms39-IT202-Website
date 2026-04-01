<!--Faizan Shaikh, 2/25/26, IT202-002, CRUD Categories and Items, fms39@njit.edu-->
<?php
session_start();
require_once("watchtype.php");
require_once("watch.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Faizan's Watches</title>

    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- Links external CSS stylesheet -->
    <link rel="stylesheet" href="styles.css">
    <!-- Favicon for browser tab -->
    <link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>
    <header>
        <?php include("header.inc.php"); ?>
    </header>
    <section>
        <nav>
            <?php include("nav.inc.php"); ?>
        </nav>
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
    <footer>
        <?php include("footer.inc.php"); ?>
    </footer>
</body>

</html>