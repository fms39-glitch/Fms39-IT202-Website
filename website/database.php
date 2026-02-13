<!--Faizan Shaikh, 2/13/26, IT202-002, Login-Logout assignment, fms39@njit.edu-->


<?php
function getDB($echo_mode = false)
{
    $host = 'localhost';
    $port = 3306;
    $dbname = 'watches';
    $username = 'faizan_shaikh_fms390';
    $password = 'audemars_piguet';
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try {
        $db = new mysqli($host, $username, $password, $dbname, $port);
        error_log("Database connection successful to " . $host);
        if ($echo_mode) echo "Database connection successful to " . $host;
        return $db;
    } catch (mysqli_sql_exception $e) {
        error_log("Database connection failed: " . $e->getMessage());
        if ($echo_mode) echo "Database connection failed: " . $e->getMessage();
    }
}
//getDB(true);
