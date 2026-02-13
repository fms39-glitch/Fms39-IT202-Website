<!--Faizan Shaikh, 2/13/26, IT202-002, Login-Logout assignment, fms39@njit.edu-->
<?php
if (!isset($_SESSION['login'])) {
?>
    <h2>Please Login to the Watches Inventory Website</h2><br>
    <form name="login" action="index.php" method="post">
        <label>Email:</label>
        <input type="text" name="email_address" size="20">
        <br>
        <br>
        <label>Password:</label>
        <input type="password" name="password" size="20">
        <br>
        <br>
        <input type="submit" value="Login">
        <input type="hidden" name="content" value="validate">
    </form>
<?php
} else {
    echo "<h1>Welcome to Watches Inventory Helper</h1> <br> <h2>Welcome {$_SESSION['firstName']} {$_SESSION['lastName']} ({$_SESSION['pronouns']})</h2>";
?>
    <br><br>

    <a href="index.php?content=logout"><strong>Logout</strong></a>
<?php
}
?>