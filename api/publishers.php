<?php
require 'include/db.php';

$sql = "SELECT * FROM exampublishers";
$cmd = $db->prepare($sql);
$cmd->execute();
$publishers = $cmd->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($publishers);

$db = null;
?>