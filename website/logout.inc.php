<!--Faizan Shaikh, 2/13/26, IT202-002, Login-Logout assignment, fms39@njit.edu-->


<?php
if (isset($_SESSION['login'])) {
    unset($_SESSION['login']);
}
header("Location: index.php");
