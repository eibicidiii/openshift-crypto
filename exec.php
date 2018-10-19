<?php
$output = shell_exec('smartcrypto generateServerHello user pass');
echo "<pre>$output</pre>";
?>
