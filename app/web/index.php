<!DOCTYPE html>
<title>Ansible Workshop</title>

<?php
$db = new PDO('mysql:host=localhost;dbname=ws', 'root');

$result = $db->query('SELECT Message FROM Content');
foreach($result as $row) {
    print "<p>".$row['Message']."</p>";
}
?>
