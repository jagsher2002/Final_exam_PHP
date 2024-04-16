<?php
require 'include/auth.php';

// if the user is authenticated
if (empty($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

require 'include/db.php';

$sql = "DELETE FROM examgames";
$cmd = $db->prepare($sql);
$cmd->execute();

$db = null;

header('Location: games.php');
exit();
?>
