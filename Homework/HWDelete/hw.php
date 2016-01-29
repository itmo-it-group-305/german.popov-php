<?php
/**
 * Created by PhpStorm.
 * User: gerch
 * Date: 22.01.16
 * Time: 14:23
 */
ini_set('display_errors',1);
error_reporting(E_ALL);


//rmdir('/home/gerch/PhpstormProjects/php/HWDelete/1/2/3/4');

function deleteDir() {
    $dir = '/home/gerch/PhpstormProjects/php/HWDelete/';
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while ( ($file = readdir($dh)) !== false) {
                echo "файл : $file, тип: " . filetype($dir . $file) . "<br>";
            }
            //closedir($dh);
        }

    }
}
deleteDir();
