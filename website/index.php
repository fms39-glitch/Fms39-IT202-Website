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
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <script src="realtime.js"></script>
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
        <?php if (isset($_SESSION['login'])) { ?>
            <aside>
                <?php include("aside.inc.php"); ?>
                <script>
                    getRealTime();
                    setInterval(getRealTime, 5000);
                </script>
            </aside>
        <?php } ?>
    </section>
    <footer>
        <?php include("footer.inc.php"); ?>
    </footer>
</body>

</html>