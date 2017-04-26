## Курсовой проект на тему:
###  Создание и введение базы данных проката автомобилей


> Версия 0.4.1 Бета

## Возможности
- Админ панель
- Заполнение таблиц
- Редактирование таблиц
- Удаление записей
- Аутентификаци
- Разграничение прав
- Просматривать точки на геокарте
- Заказывать машины
- Просмотр своего профиля и заказов
- Просмотр статистики в Админ панели
## Интсрументы
- Bootstrap 3
- Smarty
- MariaDB
- Apache 2
- [Yandex Map](https://tech.yandex.ru/maps/)
- [AIR DATEPICKER](http://t1m0n.name/air-datepicker/docs/index-ru.html)
- [Chart.js](http://www.chartjs.org/)

## Установка 
> Нужно создать файл с именем *project.config.php* в папку *application/configs/* и записать в него следующее:
```php
<?php
/**
 * @author BigTows
 * @version 1.0
 */

/**
 * @var string switch debug mode. (true == on, false == off);
 */
const DEBUG_MODE = true;
$DBName = "DataBase Name"; //Data Base name
$DBUser = "User"; // Name user in Data Base
$DBPassword = "Password"; // User password
$DBHost = "localhost"; // Host Data Base
$DBDriver = "mysql"; //Driver

/**
 * Then there is the function
 */
$DBDns = $DBDriver.":host=".$DBHost.";dbname=".$DBName;

```
## ToDo лист
- Оптимизация кода