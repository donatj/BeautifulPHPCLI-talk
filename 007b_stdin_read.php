#!/usr/bin/env php
<?php

while( $line = fgets( STDIN ) ) {
  fwrite( STDOUT, $line );
}