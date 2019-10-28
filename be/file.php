<?php

$file = fopen("yuhu.txt","r");

echo fgets($file);

fclose($file);