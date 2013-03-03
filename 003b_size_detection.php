<?php

$rows = intval(`tput lines`);
$cols = intval(`tput cols`);
echo "Your terminal is {$rows}x{$cols}!";