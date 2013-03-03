#!/usr/bin/env php
<?php

$shortopts  = "r:";  // Required value
$shortopts .= "o::"; // Optional value
$shortopts .= "a"; // These options do not accept values

$longopts   = array(
    "reqval:",     // Has a value
    "optval::",    // Optional value
    "noval",        // No value
);
$options = getopt($shortopts, $longopts);
var_dump($options);