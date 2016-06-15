<?php

/**
 * Роутер для разработки проектов на битрикс используя встроенный в PHP сервер
 * Для запуска сервера используйте команду php -S localhost:9998 devrouter.php
 * Автор: yriyant@gmail.com / yuriyant.com
 */

if (strtok($_SERVER["REQUEST_URI"], '?') == '/') {
    if (is_file(strtok($_SERVER['DOCUMENT_ROOT'] . $_SERVER["REQUEST_URI"],'?').'index.php')){
        return false;
    }
}
if (is_file(strtok($_SERVER['DOCUMENT_ROOT'] . $_SERVER["REQUEST_URI"], '?'))) {
    return false;
}
if (is_dir(strtok($_SERVER['DOCUMENT_ROOT'] . $_SERVER["REQUEST_URI"], '?'))) {
    return false;
}
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js|font|ttf|ico|icon|swf|map|js\?.*|css\?.*|woff\?.*)$/', $_SERVER["REQUEST_URI"])) {
    return false;
} else {
    include "bitrix/urlrewrite.php";
}
?>