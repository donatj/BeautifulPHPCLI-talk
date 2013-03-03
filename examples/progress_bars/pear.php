<?php
require_once 'lib/PEAR/ProgressBar.php';

$bar = new Console_ProgressBar('- %fraction% [%bar%] %percent% ETA: %estimate%', '=>', '-', 78, 345);
for ($i = 0; $i <= 345; $i++) {
    $bar->update($i);
    usleep(30000);
}
print "\n";
