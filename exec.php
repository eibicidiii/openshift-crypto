<?php
$output = shell_exec('/opt/app-root/src/smartcrypto generateServerHello user pass');
echo "<pre>$output</pre>";
?>

