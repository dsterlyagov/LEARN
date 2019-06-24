<?php
$hash = password_hash("password", PASSWORD_BCRYPT);
$pass = "password";
if(password_verify($pass,$hash))
echo "OK";
?>