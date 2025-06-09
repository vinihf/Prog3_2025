<?php
$email1 = "email@email.com";
$email2 = "(email@email.com)";
echo filter_var($email1, FILTER_VALIDATE_EMAIL);
echo "<br>";
echo filter_var($email2, FILTER_VALIDATE_EMAIL);