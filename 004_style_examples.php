#!/usr/bin/env php
<?php

fwrite( STDOUT, "\033[31m"   . "Red Text"                . PHP_EOL );
fwrite( STDOUT, "\033[4m"    . "Red And Underlined Text" . PHP_EOL );
fwrite( STDOUT, "\033[0m"    . "Normal Text"             . PHP_EOL );
fwrite( STDOUT, "\033[31;4m" . "Red and Underlined Text" . PHP_EOL );
fwrite( STDOUT, PHP_EOL );