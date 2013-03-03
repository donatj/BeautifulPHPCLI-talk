#!/usr/bin/env php
<?php

for($i = 0; $i <= 100; $i += 5) {
	fwrite( STDOUT, "{$i}% Complete" . PHP_EOL );
	usleep( 100000 );
}
