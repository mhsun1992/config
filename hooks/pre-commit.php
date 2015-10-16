#!/usr/bin/php
<?php

$exit_status = 0;

exec("pwd", $path_list);

exec("phpalizer run {$path_list[0]}", $output_list);

while (($output = array_shift($output_list)) && substr($output, 0, 1) !='-');

foreach ($output_list as $output)
{
    if ($output != '' && $output != 'Done')
    {
        $exit_status = 1;
        echo $output, "\n";
    }
}

exit($exit_status);

