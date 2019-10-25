<?php

$awal = microtime(true);

usleep(1000);

$akhir = microtime(true);

$waktu = $akhir-$awal;

echo 'Page Rendered : ' . $waktu . ' seconds';

echo '<br>';

$memory = memory_get_usage();

echo $memory;