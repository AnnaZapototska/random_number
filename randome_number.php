<?php
echo 'Random number: ' . ((crc32(microtime()) + intval(substr(md5(bin2hex('Hello World!')), 0, 9))) % 100 + 1). '';
?>
