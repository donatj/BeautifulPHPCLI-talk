#!/usr/bin/env php
<?php

$colors = max(8, intval(`tput colors`));
fwrite( STDOUT, "Terminal supports {$colors} colors!" );
fwrite( STDOUT, PHP_EOL );