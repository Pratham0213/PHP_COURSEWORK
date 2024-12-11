<?php

// Custom error handler function
function customErrorHandler($errno, $errstr, $errfile, $errline) {
    // Determine the error type
    switch ($errno) {
        case E_USER_ERROR:
            echo "<b>ERROR</b> [$errno] $errstr<br>";
            echo "  Fatal error on line $errline in file $errfile";
            echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br>";
            echo "Aborting...<br>";
            exit(1);
            

        case E_USER_WARNING:
            echo "<b>WARNING</b> [$errno] $errstr<br>";
            break;

        case E_USER_NOTICE:
            echo "<b>NOTICE</b> [$errno] $errstr<br>";
            break;

        default:
            echo "Unknown error type: [$errno] $errstr<br>";
            break;
    }

    return true;
}

set_error_handler("customErrorHandler");

trigger_error("This is a user notice.", E_USER_NOTICE);
trigger_error("This is a user warning.", E_USER_WARNING);
trigger_error("This is a user error.", E_USER_ERROR);

?>