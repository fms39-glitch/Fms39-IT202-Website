<!--Faizan Shaikh, 2/13/26, IT202-002, Login-Logout assignment, fms39@njit.edu-->


<?php
error_log('$_POST ' . print_r($_POST, true));
require_once('database.php');
$emailAddress = $_POST['email_address']; //should be the name from the forms in index.html
$password = $_POST['password'];
$query = "SELECT email_address, first_name, last_name, pronouns, phone_number 
          FROM watches_users 
          WHERE email_address = ? AND password = SHA2(?,256)";

$db = getDB();
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $emailAddress, $password);
$stmt->execute();
$stmt->bind_result($email, $firstName, $lastName, $pronouns, $phone);
$fetched = $stmt->fetch();
$db->close();

if ($fetched) {
    $_SESSION['login'] = true;
    $_SESSION['emailAddress'] = $email;
    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;
    $_SESSION['pronouns'] = $pronouns;
    $_SESSION['phoneNumber'] = $phone;

    header("Location: index.php");
} else {
    echo "<h2>Sorry, login incorrect for Watches Inventory</h2>\n";
    echo "<a href=\"index.php\">Please try again</a>\n";
}
