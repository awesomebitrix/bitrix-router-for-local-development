# README #

Роутер для разработки проектов на CMS Битрикс используя встроенный в PHP сервер.
Нет необходимости настраивать Apach/Nginx под каждый проект.

### Установка  ###

* Скопируйте devrouter.php в корневую папку проекта.
* Находясь в корневой папке проекта запустите в консоли команду 

```
#!bash
php -S localhost:9998 devrouter.php

```


* Если php не настроен под Битрикс, то можно запускать командой

```
#!bash
php -S localhost:9998 -dshort_open_tag=On -ddisplay_errors=On -dmbstring.internal_encoding=UTF-8 -dmbstring.func_overload=2 devrouter.php
```

* Перейдите в браузере по ссылке https://localhost:9998

### Связаться с автором ###

* yuriyant@gmail.com
* yuriyant.com