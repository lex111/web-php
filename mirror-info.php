<?php

// Define $MYSITE and $LAST_UPDATED variables
include_once "prepend.inc";

// Try to find out if local search is possible
unset($htsearch_prog);
if (file_exists("configuration.inc")) {
    include_once 'configuration.inc';
    $searchtype = 2;
}
if (isset($_SERVER['HTSEARCH_PROG'])) {
    $htsearch_prog = $_SERVER['HTSEARCH_PROG'];
    $searchtype = 1;
}
if (!is_executable($htsearch_prog)) {
    unset($htsearch_prog);
}
if (!isset($htsearch_prog)) {
    $searchtype = 0;
}

echo "$MYSITE|", phpversion(), "|$LAST_UPDATED|$searchtype";

?>