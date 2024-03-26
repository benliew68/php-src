--TEST--
error_log with message_type=3 headers= uses default 0666 file permissions
--SKIPIF--
<?php 
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    die("skip this test on windows");
}
?>
--INI--
error_log=error_permissions_test.log
error_log_mode=0600
--FILE--
<?php

const LOG_FILENAME='error_permissions_test.log';

try {
    if (file_exists(LOG_FILENAME)) {
        unlink(LOG_FILENAME);
    }
    $oldMask = umask(0000);

    error_log("hello world", 3, LOG_FILENAME);

    assert(file_exists(LOG_FILENAME));

    printf("got permissions=%o\n", fileperms(LOG_FILENAME) & 0777);
    printf("errorlog contents\n%s", file_get_contents(LOG_FILENAME));
    
    umask($oldMask);
} finally {
    unlink(LOG_FILENAME);
}
?>
--EXPECTF--
got permissions=666
errorlog contents
hello world
