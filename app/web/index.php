<!DOCTYPE html>
<title>Ansible Workshop</title>

<?php
$db = new PDO('mysql:host={{ hostvars["vm-db"]["ansible_ssh_host"] }};dbname=ws', 'ws');

$result = $db->query('SELECT Message FROM Content');
foreach($result as $row) {
    print "<p>".$row['Message']."</p>";
}
?>
