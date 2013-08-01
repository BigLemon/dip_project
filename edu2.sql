-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 01 2013 г., 23:46
-- Версия сервера: 5.1.67-community-log
-- Версия PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `edu2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `id_author` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `name`, `desc`, `id_author`, `id_category`, `status`) VALUES
(1, 'Проектирование реляционных баз данных', '', 1, 2, 1),
(2, 'Язык программирования PHP', 'В курсе дана история развития языка, базовый синтаксис.языка', 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `coursescategors`
--

CREATE TABLE IF NOT EXISTS `coursescategors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `coursescategors`
--

INSERT INTO `coursescategors` (`id`, `name`) VALUES
(1, 'Программирование'),
(2, 'Базы данных'),
(3, 'Сети');

-- --------------------------------------------------------

--
-- Структура таблицы `exercises`
--

CREATE TABLE IF NOT EXISTS `exercises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lab_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `condition` text NOT NULL,
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `exercises`
--

INSERT INTO `exercises` (`id`, `lab_id`, `title`, `condition`, `answer`) VALUES
(1, 5, 'Циклы PHP', '<p>\n	Для выполнения задачи надо:</p>\n<ol>\n	<li>\n		Подключиться к базе данных, использую значения для подключения HOST, USER, PASSWORD.</li>\n	<li>\n		Создать таблицу (create) .</li>\n	<li>\n		Внести данные в таблицу (insert).</li>\n	<li>\n		Выбрать из таблицы (select).</li>\n</ol>\n', '<?$tempsql = mysql_pconnect(HOST, USER, PASSWORD);\nmysql_select_db(DBNAME, $tempsql);\nmysql_query("CREATE TABLE `lection` (`id` INT( 5 ) NOT NULL , `title` VARCHAR( 255 ) NOT NULL);");\nmysql_query("INSERT INTO `lection` VALUES (\\"1\\", \\"test1\\"),(\\"2\\", \\"test2\\");");\n$a = mysql_query("SELECT * FROM `lection`;");\n$test = mysql_fetch_row($a); \nprint_r($test);'),
(2, 1, 'Типы переменных', 'Создайте файл, содержащий 5 разных переменных, присвойте переменным значения разного типа. Используя gettype() выведите тип каждой переменной.', '0'),
(3, 3, 'Работа с базами данных', 'Вывести названия таблиц, существующих в базе.', '4'),
(4, 4, 'Строка в PHP ', 'Создайте файл, содержащий 2 переменные строкового типа. Инициализируйте переменные произвольным текстом. С помощью конкатенации объедините содержимое переменных и выведите результат.', '<?php $tempsql = mysql_pconnect(HOST, USER, PASSWORD);\r\nmysql_select_db(DBNAME, $tempsql);\r\n$a = mysql_query("SHOW tables;");\r\n$i=0;\r\nif(mysql_num_rows($a)) \r\n  { \r\n    while($result = mysql_fetch_array($a)) \r\n    { \r\n        echo "Таблица: ".$result[$i]."<br />"; \r\n    } \r\n    $i++;\r\n  } \r\n?>');

-- --------------------------------------------------------

--
-- Структура таблицы `labresults`
--

CREATE TABLE IF NOT EXISTS `labresults` (
  `id_user` int(11) NOT NULL,
  `id_lab` int(11) NOT NULL,
  `dt` date NOT NULL,
  `result` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `labresults`
--

INSERT INTO `labresults` (`id_user`, `id_lab`, `dt`, `result`) VALUES
(1, 4, '2013-06-13', 2),
(5, 3, '2013-06-22', 5),
(1, 3, '2013-06-22', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `labs`
--

CREATE TABLE IF NOT EXISTS `labs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `condition` text NOT NULL,
  `answer` text NOT NULL,
  `course_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `id_author` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `labs`
--

INSERT INTO `labs` (`id`, `condition`, `answer`, `course_id`, `title`, `id_author`) VALUES
(1, '<p>\r\n	Для выполнения задачи надо:</p>\r\n<ol>\r\n	<li>\r\n		Подключиться к базе данных, использую значения для подключения HOST, USER, PASSWORD.</li>\r\n	<li>\r\n		Создать таблицу (create) .</li>\r\n	<li>\r\n		Внести данные в таблицу (insert).</li>\r\n	<li>\r\n		Выбрать из таблицы (select).</li>\r\n</ol>\r\n', '$tempsql = mysql_pconnect(HOST, USER, PASSWORD);\r\nmysql_select_db(DBNAME, $tempsql);\r\nmysql_query("CREATE TABLE `lection` (`id` INT( 5 ) NOT NULL , `title` VARCHAR( 255 ) NOT NULL);");\r\nmysql_query("INSERT INTO `lection` VALUES (\\"1\\", \\"test1\\"),(\\"2\\", \\"test2\\");");\r\n$a = mysql_query("SELECT * FROM `lection`;");\r\n$test = mysql_fetch_row($a); \r\nprint_r($test);', 2, 'Циклы PHP', 1),
(3, 'Создайте файл, содержащий 5 разных переменных, присвойте переменным значения разного типа. Используя gettype() выведите тип каждой переменной.', '', 1, 'Регулярные выражения PHP', 1),
(4, 'Создайте файл, содержащий 2 переменные строкового типа. Инициализируйте переменные произвольным текстом. С помощью конкатенации объедините содержимое переменных и выведите результат.', '', 1, 'Базовый синтаксис PHP', 1),
(5, '<p>\n	Язык программирования PHP</p>\n', ' <? echo "Hello World";?>', 1, 'Добавление задачи #1', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `lections`
--

CREATE TABLE IF NOT EXISTS `lections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `txt` text NOT NULL,
  `queue` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `lab_id` int(11) DEFAULT NULL,
  `practice_id` int(11) DEFAULT NULL,
  `files` text,
  `points` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `lections`
--

INSERT INTO `lections` (`id`, `course_id`, `topic`, `txt`, `queue`, `test_id`, `lab_id`, `practice_id`, `files`, `points`) VALUES
(1, 1, 'История PHP', '<p>\n	В 1995 г., коrда независимый проrраммист&nbsp; Расмус Лердорф (Rasmus Lerdorf) написал сценарий Perl/CGI для подсчета количества посетителей сайта, прочитавших его онлайн-резюме. Из-за низкой производительности он переписал сценарий на языке Си, после этого исходники были выложены на всеобщее обозрение для исправления ошибок и дополнений.</p>\n<p>\n	Пользователи сервера заинтересовались этим проектом и вскоре вышла первая версия продукта Personal Home Page Tools (средства для персональной домашней страницы). Средства эти были более чем скромными: анализатор кода, понимающий всего лишь несколько специальных команд, и набор утилит, полезных для создания гостевой книги, счетчика посещений, чата и т.п.</p>\n<p>\n	К середине 1995 года после основательной переработки появилась вторая версия продукта, названная PHP/FI (Personal Home Page / Forms Interpreter &ndash; персональная домашняя страница/ интерпретатор форм). Она включала набор базовых возможностей сегодняшнего PHP, возможность автоматически обрабатывать html-формы и встраиваться в html-коды.</p>\n<p>\n	В 1997 вышла вторая версия Cи-реализации PHP &ndash; PHP/FI 2.0. К тому моменту PHP использовали уже несколько тысяч человек по всему миру, примерно с 50 тыс. доменов, что составляло около 1% всего числа доменов Internet.</p>\n<p>\n	Число разработчиков PHP увеличилось до нескольких человек, но, несмотря на это, PHP/FI 2.0 все еще оставался крупным проектом одного человека. Официально PHP/FI 2.0 вышел только в ноябре 1997 года, просуществовав до этого в основном в бета-версиях. Вскоре после выхода его заменили альфа-версии PHP 3.0.</p>\n<p>\n	&nbsp;</p>\n<p>\n	PHP 3.0 была первой версией, напоминающей PHP, каким мы знаем его сегодня. Он очень сильно отличался от PHP/FI 2.0 и появился опять же как инструмент для решения конкретной прикладной задачи. Его создатели, Энди Гутманс (Andi Gutmans) и Зив Сураски (Zeev Suraski), в 1997 году переписали заново код PHP/FI, поскольку он показался им непригодным для разработки приложения электронной коммерции, над которым они работали.</p>\n<p>\n	Одной из сильных сторон PHP 3.0 была возможность расширения ядра, что привлекло внимание множества разработчиков, желающих добавить свой модуль расширения. Кроме того, PHP 3.0 предоставляла широкие возможности для взаимодействия с базами данных, различными протоколами и API. Немаловажным шагом к успеху оказалась разработка нового, намного более мощного и полного синтаксиса с поддержкой ООП. С момента появления PHP 3.0 изменилась не только функциональность и внутреннее устройство языка, но и его название. В аббревиатуре PHP больше не было упоминания о персональном использовании, PHP стало сокращением (рекурсивным акронимом) от PHP: Hypertext Preprocessor, что значит &laquo;PHP: препроцессор гипертекста&raquo;.</p>\n<p>\n	&nbsp;</p>\n<p>\n	Официально PHP 3.0 вышел в июне 1998 года, после 9 месяцев публичного тестирования. А уже к зиме Энди Гутманс и Зив Сураски начали переработку ядра PHP. В их задачи входило увеличение производительности работы сложных приложений и улучшение модульности кода, лежащего в основе PHP.</p>\n<p>\n	Новое ядро было названо &laquo;Zend Engine&raquo; (от имен создателей: Zeev и Andi) и впервые представлено в середине 1999 года.</p>\n<p>\n	PHP 4.0, основанный на этом ядре и принесший с собой набор дополнительных функций, официально вышел в мае 2000 года, почти через два года после своего предшественника, PHP 3.0. Помимо улучшения производительности, PHP 4.0 имел еще несколько ключевых нововведений, таких как поддержка сессий, буферизация вывода, более безопасные способы обработки вводимой пользователем информации и несколько новых языковых конструкций.</p>\n<p>\n	В настоящее время ведутся работы по улучшению Zend Engine и внедрению нововведений в PHP 5.0, первые бета-версии которого уже вышли в свет. Одно из существенных изменений произошло в объектной модели языка, ее основательно подлатали и добавили много новых возможностей.</p>\n<p>\n	Сегодня PHP используется сотнями тысяч разработчиков. Несколько миллионов сайтов написаны на PHP, что составляет более 20% доменов Internet.</p>\n', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 3, 'sdfs', '<p>\n	sdfsdf</p>\n', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 4, 'Введение в PHP', '<p>\n	&nbsp;</p>\n<h3 style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	История PHP</h3>\n<p id="id_1" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Язык&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;был разработан как инструмент для решения чисто практических задач. Его создатель,&nbsp;<span class="keyword" style="font-style: oblique; ">Расмус Лердорф</span>, хотел знать, сколько человек читают его online-резюме, и написал для этого простенькую&nbsp;<span class="keyword" style="font-style: oblique; ">CGI</span>&nbsp;-оболочку на языке Perl, т.е. это был набор Perl-&nbsp;<span class="keyword" style="font-style: oblique; ">скриптов</span>, предназначенных исключительно для определенной цели &ndash; сбора статистики посещений.</p>\n<div class="lecture_mark" id="mark_1" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_2" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	<b>Для справки</b>.&nbsp;<a name="keyword-context.1" style="color: rgb(51, 0, 102); text-decoration: underline; "></a><span class="keyword_def" style="font-style: oblique; font-weight: bold; ">CGI</span>&nbsp;(<span class="keyword" style="font-style: oblique; ">Common Gateway Interface</span>&nbsp;&ndash; общий интерфейс шлюзов) является стандартом, который предназначен для создания серверных приложений, работающих по протоколу HTTP. Такие приложения (их называют шлюзами или&nbsp;<span class="keyword" style="font-style: oblique; ">CGI</span>-&nbsp;<span class="keyword" style="font-style: oblique; ">программами</span>&nbsp;) запускаются&nbsp;<span class="keyword" style="font-style: oblique; ">сервером</span>&nbsp;в режиме реального времени.&nbsp;<span class="keyword" style="font-style: oblique; ">Сервер</span>передает запросы пользователя&nbsp;<span class="keyword" style="font-style: oblique; ">CGI</span>&nbsp;-&nbsp;<span class="keyword" style="font-style: oblique; ">программе</span>, которая их обрабатывает и возвращает результат своей работы на экран пользователя. Таким образом, посетитель получает динамическую информацию, которая может изменяться в результате влияния различных факторов. Сам шлюз (&nbsp;<span class="keyword" style="font-style: oblique; ">скрипт&nbsp;</span><span class="keyword" style="font-style: oblique; ">CGI</span>&nbsp;) может быть написан на различных языках программирования &ndash; Cи/C++, Fortran, Perl,&nbsp;<span class="keyword" style="font-style: oblique; ">TCL</span>, UNIX Shell, Visual Basic, Python и др.</p>\n<div class="lecture_mark" id="mark_2" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_3" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Вскоре выяснилось, что оболочка обладает небольшой производительностью, и пришлось переписать ее заново, но уже на языке Си. После этого&nbsp;<span class="keyword" style="font-style: oblique; ">исходники</span>&nbsp;были выложены на всеобщее обозрение для исправления ошибок и дополнения. Пользователи&nbsp;<span class="keyword" style="font-style: oblique; ">сервера</span>, где располагался сайт с первой версией&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>, заинтересовались инструментом, появились желающие его использовать. Так что скоро&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;превратился в самостоятельный проект, и в начале 1995 года вышла первая известная версия продукта, называвшаяся&nbsp;<span class="keyword" style="font-style: oblique; ">Personal Home Page Tools</span>&nbsp;(средства для персональной домашней страницы). Средства эти были более чем скромными: анализатор кода, понимающий всего лишь несколько специальных команд, и набор утилит, полезных для создания гостевой книги, счетчика посещений, чата и т.п.</p>\n<div class="lecture_mark" id="mark_3" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_4" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	<a name="keyword-context.2" style="color: rgb(51, 0, 102); text-decoration: underline; "></a>К середине 1995 года после основательной переработки появилась вторая версия продукта, названная&nbsp;<span class="keyword_def" style="font-style: oblique; font-weight: bold; ">PHP/FI</span>&nbsp;(Personal Home Page / Forms&nbsp;<span class="keyword" style="font-style: oblique; ">Interpreter</span>&nbsp;&ndash; персональная домашняя страница/&nbsp;<span class="keyword" style="font-style: oblique; ">интерпретатор</span>&nbsp;форм). Она включала набор базовых возможностей сегодняшнего&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>, возможность автоматически обрабатывать<span class="keyword" style="font-style: oblique; ">html-формы</span>&nbsp;и&nbsp;<span class="keyword" style="font-style: oblique; ">встраиваться в html-коды</span>. Синтаксис&nbsp;<span class="keyword" style="font-style: oblique; ">PHP/FI</span>&nbsp;сильно напоминал синтаксис Perl, но был более простым.</p>\n<div class="lecture_mark" id="mark_4" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_5" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	В 1997 вышла вторая версия Cи-реализации&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;&ndash;&nbsp;<span class="keyword" style="font-style: oblique; ">PHP/FI 2.0</span>. К тому моменту&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;использовали уже несколько тысяч человек по всему миру, примерно с 50 тыс. доменов, что составляло около 1% всего числа доменов Internet. Число разработчиков&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;увеличилось до нескольких человек, но, несмотря на это,&nbsp;<span class="keyword" style="font-style: oblique; ">PHP/FI 2.0</span>&nbsp;все еще оставался крупным проектом одного человека. Официально&nbsp;<span class="keyword" style="font-style: oblique; ">PHP/FI 2.0</span>&nbsp;вышел только в ноябре 1997 года, просуществовав до этого в основном в бета-версиях. Вскоре после выхода его заменили альфа-версии&nbsp;<span class="keyword" style="font-style: oblique; ">PHP 3.0</span>.</p>\n<div class="lecture_mark" id="mark_5" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_6" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	<a name="keyword-context.3" style="color: rgb(51, 0, 102); text-decoration: underline; "></a><span class="keyword_def" style="font-style: oblique; font-weight: bold; ">PHP 3.0</span>&nbsp;была первой версией, напоминающей&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>, каким мы знаем его сегодня. Он очень сильно отличался от&nbsp;<span class="keyword" style="font-style: oblique; ">PHP/FI</span>&nbsp;2.0 и появился опять же как инструмент для решения конкретной прикладной задачи. Его создатели,&nbsp;<span class="keyword" style="font-style: oblique; ">Энди Гутманс (Andi Gutmans)</span>&nbsp;и&nbsp;<span class="keyword" style="font-style: oblique; ">Зив Сураски (Zeev Suraski)</span>, в 1997 году переписали заново код&nbsp;<span class="keyword" style="font-style: oblique; ">PHP/FI</span>, поскольку он показался им непригодным для разработки приложения&nbsp;<span class="keyword" style="font-style: oblique; ">электронной коммерции</span>, над которым они работали. Для того чтобы получить помощь в реализации проекта от разработчиков&nbsp;<span class="keyword" style="font-style: oblique; ">PHP/FI</span>,&nbsp;<span class="keyword" style="font-style: oblique; ">Гутманс</span>&nbsp;и&nbsp;<span class="keyword" style="font-style: oblique; ">Сураски</span>&nbsp;решили объединиться с ними и объявить&nbsp;<span class="keyword" style="font-style: oblique; ">PHP3</span>&nbsp;официальным преемником&nbsp;<span class="keyword" style="font-style: oblique; ">PHP/FI</span>. После объединения разработка&nbsp;<span class="keyword" style="font-style: oblique; ">PHP/FI</span>&nbsp;была полностью прекращена.</p>\n<div class="lecture_mark" id="mark_6" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_7" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Одной из сильных сторон&nbsp;<span class="keyword" style="font-style: oblique; ">PHP 3.0</span>&nbsp;была возможность расширения ядра. Именно свойство расширяемости&nbsp;<span class="keyword" style="font-style: oblique; ">PHP 3.0</span>&nbsp;привлекло внимание множества разработчиков, желающих добавить свой модуль расширения. Кроме того,&nbsp;<span class="keyword" style="font-style: oblique; ">PHP 3.0</span>&nbsp;предоставляла широкие возможности для взаимодействия с базами данных, различными протоколами и API. Немаловажным шагом к успеху оказалась разработка нового, намного более мощного и полного синтаксиса с поддержкой&nbsp;<span class="keyword" style="font-style: oblique; ">ООП</span>. С момента появления&nbsp;<span class="keyword" style="font-style: oblique; ">PHP 3.0</span>&nbsp;изменилась не только функциональность и внутреннее устройство языка, но и его название. В аббревиатуре&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;больше не было упоминания о персональном использовании,&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;стало сокращением (рекурсивным акронимом) от&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>: Hypertext&nbsp;<span class="keyword" style="font-style: oblique; ">Preprocessor</span>, что значит &quot;&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>:&nbsp;<span class="keyword" style="font-style: oblique; ">препроцессор гипертекста</span>&nbsp;&quot;.</p>\n<div class="lecture_mark" id="mark_7" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_8" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	К концу 1998 года число пользователей&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;возросло до десятков тысяч. Сотни тысяч web-сайтов сообщали о том, что они работают с использованием этого языка. Почти на 10%&nbsp;<span class="keyword" style="font-style: oblique; ">серверов</span>&nbsp;Internet был&nbsp;<span class="keyword" style="font-style: oblique; ">установлен</span>&nbsp;<span class="keyword" style="font-style: oblique; ">PHP 3.0</span>.</p>\n<div class="lecture_mark" id="mark_8" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_9" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Официально&nbsp;<span class="keyword" style="font-style: oblique; ">PHP 3.0</span>&nbsp;вышел в июне 1998 года, после 9 месяцев публичного тестирования. А уже к зиме&nbsp;<span class="keyword" style="font-style: oblique; ">Энди Гутманс</span>&nbsp;и&nbsp;<span class="keyword" style="font-style: oblique; ">Зив Сураски</span>&nbsp;начали переработку ядра&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>. В их задачи входило&nbsp;<span class="keyword" style="font-style: oblique; ">увеличение производительности</span>&nbsp;работы сложных приложений и улучшение модульности кода, лежащего в основе&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>.</p>\n<div class="lecture_mark" id="mark_9" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_10" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	<a name="keyword-context.4" style="color: rgb(51, 0, 102); text-decoration: underline; "></a><a name="keyword-context.5" style="color: rgb(51, 0, 102); text-decoration: underline; "></a>Новое ядро было названо &quot;&nbsp;<span class="keyword_def" style="font-style: oblique; font-weight: bold; ">Zend Engine</span>&nbsp;&quot; (от имен создателей: Zeev и Andi) и впервые представлено в середине 1999 года.&nbsp;<span class="keyword_def" style="font-style: oblique; font-weight: bold; ">PHP 4.0</span>, основанный на этом ядре и принесший с собой набор дополнительных функций, официально вышел в мае 2000 года, почти через два года после своего предшественника,&nbsp;<span class="keyword" style="font-style: oblique; ">PHP 3.0</span>. Помимо улучшения производительности,&nbsp;<span class="keyword" style="font-style: oblique; ">PHP 4.0</span>&nbsp;имел еще несколько ключевых нововведений, таких как поддержка сессий, буферизация вывода, более безопасные способы обработки вводимой пользователем информации и несколько новых языковых конструкций.</p>\n<div class="lecture_mark" id="mark_10" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_11" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	В настоящее время ведутся работы по улучшению&nbsp;<span class="keyword" style="font-style: oblique; ">Zend Engine</span>&nbsp;и внедрению нововведений в&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;5.0, первые бета-версии которого уже вышли в свет. Одно из существенных изменений произошло в объектной модели языка, ее основательно подлатали и добавили много новых возможностей. (Комментарий пользователя: Пятая версия PHP была выпущена разработчиками 13 июля 2004 года. Изменения включают обновление ядра Zend (Zend Engine 2), что существенно увеличило эффективность интерпретатора. Введена поддержка языка разметки XML. Полностью переработаны функции ООП, которые стали во многом схожи с моделью, используемой в Java. В частности, введён деструктор, открытые, закрытые и защищённые члены и методы, окончательные члены и методы, интерфейсы и клонирование объектов. В последующих версиях также были введены пространства имён, замыкания и целый ряд достаточно серьёзных изменений, количественно и качественно сравнимых с теми, которые появились при переходе на PHP 5.0. Шестая версия PHP разрабатывалась с октября 2006 года. Было сделано множество нововведений, как, например, исключение из ядра регулярных выражений POSIX и &quot;длинных&quot; суперглобальных массивов, удаление директив safe_mode, magic_quotes_gpc и register_globals из конфигурационного файла php.ini. Одним из основных новшеств должна была стать поддержка Юникода. Однако в марте 2010 года разработка PHP6 была признана бесперспективной из-за сложностей с поддержкой Юникода. Исходный код PHP6 перемещён на ветвь, а основной линией разработки стала версия 5.4.)</p>\n<div class="lecture_mark" id="mark_11" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_12" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Сегодня&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;используется сотнями тысяч разработчиков. Несколько миллионов сайтов написаны на&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>, что составляет более 20% доменов Internet.</p>\n<div class="lecture_mark" id="mark_12" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p>\n	<a name="sect2" style="color: rgb(51, 0, 102); text-decoration: underline; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; background-color: rgb(255, 255, 255); "></a></p>\n<h3 style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Возможности PHP</h3>\n<p id="id_13" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	<a name="keyword-context.6" style="color: rgb(51, 0, 102); text-decoration: underline; "></a>&quot;&nbsp;<span class="keyword_def" style="font-style: oblique; font-weight: bold; ">PHP</span>&nbsp;может все&quot;, &ndash; заявляют его создатели. В первую очередь&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;используется для создания&nbsp;<span class="keyword" style="font-style: oblique; ">скриптов</span>, работающих на стороне&nbsp;<span class="keyword" style="font-style: oblique; ">сервера</span>, для этого его, собственно, и придумали.&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;способен решать те же задачи, что и любые другие&nbsp;<span class="keyword" style="font-style: oblique; ">CGI</span>&nbsp;-&nbsp;<span class="keyword" style="font-style: oblique; ">скрипты</span>, в том числе обрабатывать данные html-форм, динамически генерировать html страницы и т.п. Но есть и другие области, где может использоваться&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;. Всего выделяют три основные области применения&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>.</p>\n<div class="lecture_mark" id="mark_13" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<ul id="id_14" style="list-style-position: outside; padding-left: 2em; color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	<li>\n		Первая область, как уже говорилось, &ndash; это создание приложений (&nbsp;<span class="keyword" style="font-style: oblique; ">скриптов</span>&nbsp;), которые исполняются на стороне&nbsp;<span class="keyword" style="font-style: oblique; ">сервера</span>.&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;наиболее широко используется именно для создания такого рода&nbsp;<span class="keyword" style="font-style: oblique; ">скриптов</span>. Для того чтобы работать таким образом, понадобится&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;-<span class="keyword" style="font-style: oblique; ">парсер</span>&nbsp;(т.е. обработчик&nbsp;<span class="keyword" style="font-style: oblique; ">php</span>&nbsp;-&nbsp;<span class="keyword" style="font-style: oblique; ">скриптов</span>&nbsp;) и&nbsp;<span class="keyword" style="font-style: oblique; ">web-сервер</span>для обработки&nbsp;<span class="keyword" style="font-style: oblique; ">скрипта</span>, браузер для просмотра результатов работы&nbsp;<span class="keyword" style="font-style: oblique; ">скрипта</span>, ну, и, конечно, какой-либо текстовый редактор для написания самого&nbsp;<span class="keyword" style="font-style: oblique; ">php</span>&nbsp;-кода.<span class="keyword" style="font-style: oblique; ">Парсер</span>&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;распространяется в виде&nbsp;<span class="keyword" style="font-style: oblique; ">CGI</span>&nbsp;-&nbsp;<span class="keyword" style="font-style: oblique; ">программы</span>&nbsp;или серверного модуля. Как&nbsp;<span class="keyword" style="font-style: oblique; ">установить</span>&nbsp;его и&nbsp;<span class="keyword" style="font-style: oblique; ">web-сервер</span>&nbsp;на свой компьютер, мы рассмотрим немного позднее. В этом курсе мы будем обсуждать, как правило, создание именно серверных приложений, как пример использования языка&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>.</li>\n	<li>\n		Вторая область &ndash; это создание&nbsp;<span class="keyword" style="font-style: oblique; ">скриптов</span>,&nbsp;<span class="keyword" style="font-style: oblique; ">выполняющихся в командной строке</span>. То есть с помощью&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;можно создавать такие&nbsp;<span class="keyword" style="font-style: oblique; ">скрипты</span>, которые будут исполняться, вне зависимости от&nbsp;<span class="keyword" style="font-style: oblique; ">web-сервера</span>&nbsp;и браузера, на конкретной машине. Для такой работы потребуется лишь&nbsp;<span class="keyword" style="font-style: oblique; ">парсер</span>&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;(в этом случае его называют<span class="keyword" style="font-style: oblique; ">интерпретатором</span>&nbsp;командной строки (<span class="keyword" style="font-style: oblique; ">cli</span>, command line&nbsp;<span class="keyword" style="font-style: oblique; ">interpreter</span>)). Этот способ работы подходит, например, для&nbsp;<span class="keyword" style="font-style: oblique; ">скриптов</span>, которые должны выполняться регулярно с помощью различных&nbsp;<span class="keyword" style="font-style: oblique; ">планировщиков задач</span>&nbsp;или для решения задач простой обработки текста.</li>\n	<li>\n		И последняя область &ndash; это создание&nbsp;<span class="keyword" style="font-style: oblique; ">GUI</span>&nbsp;-приложений (графических интерфейсов), выполняющихся на стороне клиента. В принципе это не самый лучший способ использовать&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>, особенно для начинающих, но если вы уже досконально изучили&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>, то такие возможности языка могут оказаться весьма полезны. Для применения&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;в этой области потребуется специальный инструмент &ndash;&nbsp;<span class="keyword" style="font-style: oblique; ">PHP-GTK</span>, который является расширением&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>.</li>\n</ul>\n<div class="lecture_mark" id="mark_14" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_18" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Итак, область применения&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;достаточно обширна и разнообразна. Тем не менее существует множество других языков программирования, способных решать похожие задачи. Почему стоит изучать&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>? Что это нам дает? Во-первых,&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;очень прост в изучении. Достаточно ознакомиться лишь с основными правилами синтаксиса и принципами его работы, и можно начинать писать собственные&nbsp;<span class="keyword" style="font-style: oblique; ">программы</span>, причем браться за такие задачи, решение которых на другом языке требовало бы серьезной подготовки.</p>\n<div class="lecture_mark" id="mark_18" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_19" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Во-вторых,&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;поддерживается почти на всех известных платформах, почти во всех операционных системах и на самых разных&nbsp;<span class="keyword" style="font-style: oblique; ">серверах</span>. Это тоже очень важно. Вряд ли кому-то захочется переходить, например, от работы под Windows к работе под Linux или от&nbsp;<span class="keyword" style="font-style: oblique; ">сервера</span>&nbsp;IIS к&nbsp;<span class="keyword" style="font-style: oblique; ">серверу&nbsp;</span><span class="keyword" style="font-style: oblique; ">Apache</span>&nbsp;только для того, чтобы изучить еще один язык программирования.</p>\n<div class="lecture_mark" id="mark_19" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_20" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	В&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;сочетаются две самые популярные&nbsp;<span class="keyword" style="font-style: oblique; ">парадигмы программирования</span>&nbsp;&ndash; объектная и процедурная. В&nbsp;<span class="keyword" style="font-style: oblique; ">PHP4</span>&nbsp;более полно поддерживается&nbsp;<span class="keyword" style="font-style: oblique; ">процедурное программирование</span>, но есть возможность писать&nbsp;<span class="keyword" style="font-style: oblique; ">программы</span>&nbsp;и в объектном стиле. Уже в первых пробных версиях&nbsp;<span class="keyword" style="font-style: oblique; ">PHP5</span>&nbsp;большинство недочетов в реализации объектно-ориентированной модели языка, существующих в&nbsp;<span class="keyword" style="font-style: oblique; ">PHP4</span>, устранены. Таким образом, можно выбрать наиболее привычный стиль работы.</p>\n<div class="lecture_mark" id="mark_20" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_21" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Если говорить о возможностях сегодняшнего&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>, то они выходят далеко за рамки тех, что были реализованы в его первых версиях. С помощью&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;можно создавать изображения,&nbsp;<span class="keyword" style="font-style: oblique; ">PDF</span>&nbsp;-файлы, флэш-ролики, в него включена поддержка большого числа современных баз данных, встроены функции для работы с текстовыми данными любых форматов, включая&nbsp;<span class="keyword" style="font-style: oblique; ">XML</span>, и функции для работы с файловой системой.&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;поддерживает взаимодействие с различными сервисами посредством соответствующих протоколов, таких как&nbsp;<span class="keyword" style="font-style: oblique; ">протокол управления</span>&nbsp;доступом к директориям&nbsp;<span class="keyword" style="font-style: oblique; ">LDAP</span>, протокол работы с сетевым оборудованием&nbsp;<span class="keyword" style="font-style: oblique; ">SNMP</span>, протоколы передачи сообщений&nbsp;<span class="keyword" style="font-style: oblique; ">IMAP</span>,&nbsp;<span class="keyword" style="font-style: oblique; ">NNTP</span>&nbsp;и&nbsp;<span class="keyword" style="font-style: oblique; ">POP3</span>,&nbsp;<span class="keyword" style="font-style: oblique; ">протокол передачи гипертекста</span>&nbsp;HTTP и т.д.</p>\n<div class="lecture_mark" id="mark_21" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_22" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Обращая внимание на взаимодействие между различными языками, следует упомянуть о поддержке объектов Java и возможности их использования в качестве объектов&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>. Для доступа к удаленным объектам можно использовать расширение&nbsp;<span class="keyword" style="font-style: oblique; ">CORBA</span>.</p>\n<div class="lecture_mark" id="mark_22" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_23" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Для работы с текстовой информацией&nbsp;<span class="keyword" style="font-style: oblique; ">PHP</span>&nbsp;унаследовал (с небольшими изменениями) механизмы работы с регулярными выражениями из языка Perl и UNIX-систем. Для обработки&nbsp;<span class="keyword" style="font-style: oblique; ">XML</span>&nbsp;-документов можно использовать как стандарты&nbsp;<span class="keyword" style="font-style: oblique; ">DOM</span>&nbsp;и&nbsp;<span class="keyword" style="font-style: oblique; ">SAX</span>, так и API для&nbsp;<span class="keyword" style="font-style: oblique; ">XSLT</span>&nbsp;-трансформаций.</p>\n<div class="lecture_mark" id="mark_23" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_24" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Для создания приложений&nbsp;<span class="keyword" style="font-style: oblique; ">электронной коммерции</span>&nbsp;существует ряд полезных функций, таких как функции осуществления платежей&nbsp;<span class="keyword" style="font-style: oblique; ">Cybercash</span>,&nbsp;<span class="keyword" style="font-style: oblique; ">CyberMUT</span>,&nbsp;<span class="keyword" style="font-style: oblique; ">VeriSign Payflow Pro</span>&nbsp;и&nbsp;<span class="keyword" style="font-style: oblique; ">CCVS</span>.</p>\n', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `lections` (`id`, `course_id`, `topic`, `txt`, `queue`, `test_id`, `lab_id`, `practice_id`, `files`, `points`) VALUES
(4, 4, 'Основы синтаксиса', '<p>\n	&nbsp;</p>\n<p id="id_1" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Мы приступаем к изучению&nbsp;<span class="keyword" style="font-style: oblique; ">основных элементов синтаксиса</span>&nbsp;языка PHP. Рассмотрим способы&nbsp;<span class="keyword" style="font-style: oblique; ">разделения инструкций</span>&nbsp;и создания&nbsp;<span class="keyword" style="font-style: oblique; ">комментариев</span>,&nbsp;<span class="keyword" style="font-style: oblique; ">переменные</span>,&nbsp;<span class="keyword" style="font-style: oblique; ">константы</span>, типы данных и&nbsp;<span class="keyword" style="font-style: oblique; ">операторы</span>.</p>\n<div class="lecture_mark" id="mark_1" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_2" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	В качестве примера решим задачу&nbsp;<span class="keyword" style="font-style: oblique; ">создания заготовки электронного письма</span>. Ее смысл заключается в следующем.</p>\n<div class="lecture_mark" id="mark_2" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_3" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Допустим, у вас есть какое-то объявление и несколько разных людей, которым нужно это объявление отправить. Для этого вы делаете заготовку с содержанием объявления, внутри которого есть ряд изменяющихся (в зависимости от потенциального получателя) параметров.</p>\n<div class="lecture_mark" id="mark_3" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p>\n	<a name="sect2" style="color: rgb(51, 0, 102); text-decoration: underline; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; background-color: rgb(255, 255, 255); "></a></p>\n<h3 style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Основной синтаксис</h3>\n<p id="id_4" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Первое, что нужно знать относительно синтаксиса PHP, &ndash; это то, как он встраивается в HTML-код, как интерпретатор узнает, что это код на языке PHP. В предыдущей лекции мы уже говорили об этом. Повторяться не будем, отметим только, что в примерах мы чаще всего будем использовать вариант&nbsp;<span class="texample" style="color: rgb(139, 0, 0); font-family: monospace; ">&lt;?php ?&gt;</span>, и иногда сокращенный вариант&nbsp;<span class="texample" style="color: rgb(139, 0, 0); font-family: monospace; ">&lt;? ?&gt;</span>.</p>\n<div class="lecture_mark" id="mark_4" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p>\n	<a name="sect3" style="color: rgb(51, 0, 102); text-decoration: underline; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; background-color: rgb(255, 255, 255); "></a></p>\n<h3 style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Разделение инструкций</h3>\n<p id="id_7" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Программа на PHP (да и на любом другом языке программирования) &ndash; это набор команд (инструкций). Обработчику программы (<span class="keyword" style="font-style: oblique; ">парсеру</span>) необходимо как-то отличать одну команду от другой. Для этого используются специальные символы &ndash; разделители. В PHP инструкции разделяются так же, как и в Cи или Perl, &ndash; каждое выражение заканчивается точкой с запятой.</p>\n<div class="lecture_mark" id="mark_7" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p id="id_8" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Закрывающий тег &quot;&nbsp;<span class="texample" style="color: rgb(139, 0, 0); font-family: monospace; ">?&gt;</span>&nbsp;&quot; также подразумевает конец инструкции, поэтому перед ним точку с запятой не ставят. Например, следующие фрагменты кода эквивалентны:</p>\n<div class="lecture_mark" id="mark_8" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<div class="example" id="id_10" style="margin-left: 10px; color: rgb(139, 0, 0); font-family: monospace; font-size: 13px; ">\n	<pre>\n&lt;?php\necho &quot;Hello, world!&quot;; // точка с запятой\n                      // в конце команды\n                      // обязательна\n?&gt;\n&lt;?php\necho &quot;Hello, world!&quot; ?&gt;\n&lt;!-- точка с запятой \n    опускается из-за &quot;?&gt;&quot; --&gt;</pre>\n</div>\n<div class="lecture_mark" id="mark_10" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p>\n	<a name="sect4" style="color: rgb(51, 0, 102); text-decoration: underline; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; background-color: rgb(255, 255, 255); "></a></p>\n<h3 style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	Комментарии</h3>\n<p id="id_11" style="margin-top: 0px; color: rgb(0, 0, 0); font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif; ">\n	<a name="keyword-context.1" style="color: rgb(51, 0, 102); text-decoration: underline; "></a>Часто при написании программ возникает необходимость делать какие-либо&nbsp;<span class="keyword_def" style="font-style: oblique; font-weight: bold; ">комментарии</span>&nbsp;к коду, которые никак не влияют на сам код, а только поясняют его. Это важно при создании больших программ и в случае, если несколько человек работают над одной программой. При наличии&nbsp;<span class="keyword" style="font-style: oblique; ">комментариев</span>&nbsp;в программе в ее коде разобраться гораздо проще. Кроме того, если решать задачу по частям, недоделанные части решения также удобно&nbsp;<span class="keyword" style="font-style: oblique; ">комментировать</span>, чтобы не забыть о них в дальнейшем. Во всех языках программирования предусмотрена возможность включать&nbsp;<span class="keyword" style="font-style: oblique; ">комментарии</span>&nbsp;в код программы. PHP поддерживает несколько видов<span class="keyword" style="font-style: oblique; ">комментариев</span>: в стиле Cи, C++ и оболочки Unix. Символы&nbsp;<span class="texample" style="color: rgb(139, 0, 0); font-family: monospace; ">//</span>&nbsp;и&nbsp;<span class="texample" style="color: rgb(139, 0, 0); font-family: monospace; ">#</span>&nbsp;обозначают начало однострочных&nbsp;<span class="keyword" style="font-style: oblique; ">комментариев</span>,&nbsp;<span class="texample" style="color: rgb(139, 0, 0); font-family: monospace; ">/*</span>&nbsp;и&nbsp;<span class="texample" style="color: rgb(139, 0, 0); font-family: monospace; ">*/</span>&nbsp;&ndash; соответственно начало и конец многострочных&nbsp;<span class="keyword" style="font-style: oblique; ">комментариев</span>.</p>\n<div class="lecture_mark" id="mark_11" style="color: rgb(0, 0, 0); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; ">\n	&nbsp;</div>\n<p>\n	<a name="example.2.1" style="color: rgb(51, 0, 102); text-decoration: underline; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; background-color: rgb(255, 255, 255); "></a></p>\n<div class="example" id="id_16" style="margin-left: 10px; color: rgb(139, 0, 0); font-family: monospace; font-size: 13px; ">\n	<pre>\n&lt;?php\necho &quot;Меня зовут Вася&quot;;\n  // Это однострочный комментарий \n  // в стиле С++\necho &quot;Фамилия моя Петров&quot;; \n/* Это многострочный комментарий.\nЗдесь можно написать несколько строк. \nПри исполнении программы все, что\nнаходится здесь (закомментировано),\nбудет игнорировано. */\necho &quot;Я изучаю PHP в INTUIT.ru&quot;;\n  # Это комментарий в стиле \n  # оболочки Unix\n?&gt;</pre>\n	<span class="objectName" style="color: rgb(51, 0, 102); font-weight: bold; font-size: 8pt; ">Пример 2.1. Использование комментариев в PHP (<a class="objectName" href="http://www.intuit.ru/department/pl/plphp/class/free/2/example.2.1.htm" style="color: rgb(51, 0, 102); font-size: 8pt; " target="_blank">html</a>,&nbsp;<a class="objectName" href="http://www.intuit.ru/department/pl/plphp/class/free/2/example.2.1.txt" style="color: rgb(51, 0, 102); font-size: 8pt; " target="_blank">txt</a>)</span></div>\n<p>\n	&nbsp;</p>\n', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 1, 'Базовый синтаксис ', '<p>\r\n	PHP &mdash; это рекурсивный акроним аббревиатуры PHP Hypertext Preprocessor. Команды на языке PHP обрамляются специальными дескрипторами &mdash; тэгами языка PHP. Все, что находится вне этих тегов, игнорируется интерпретатором. Поддерживаются следующие стили написания тэгов:</p>\r\n<ul>\r\n	<li>\r\n		&nbsp;XML-стиль (рекомендуемый);</li>\r\n</ul>\r\n<p>\r\n	&nbsp;<span style="color:#ff0000;">&lt;?php</span> код на PHP <span style="color:#ff0000;">?&gt;</span></p>\r\n<ul>\r\n	<li>\r\n		l&nbsp; HTML-стиль;</li>\r\n</ul>\r\n<p>\r\n	&nbsp; <span style="color:#40e0d0;">&lt;script</span> language=&quot;php&quot;&gt; код на PHP <span style="color:#40e0d0;">&lt;/script&gt;</span></p>\r\n<ul>\r\n	<li>\r\n		l&nbsp; Краткий стиль;</li>\r\n</ul>\r\n<div>\r\n	&nbsp; <span style="color:#ff0000;"><!--?</span-->&nbsp;&lt;?&nbsp;<span style="color:#ff0000;"><!--?</span--><span id="cke_bm_84S" style="display: none; ">&nbsp;</span><span id="cke_bm_85S" style="display: none; ">&nbsp;</span>код на PHP<span id="cke_bm_84E" style="display: none; ">&nbsp;</span> <span id="cke_bm_85E" style="display: none; ">&nbsp;</span><span style="color:#ff0000;">?&gt;</span></span></span></div>\r\n<ul>\r\n	<li>\r\n		&nbsp;ASP-стиль.</li>\r\n</ul>\r\n<div>\r\n	<span style="color:#ff0000;">&nbsp; &lt;% </span>код на PHP <span style="color:#ff0000;">%&gt;</span></div>\r\n<div>\r\n	&nbsp;</div>\r\n<div>\r\n	Существует ряд требований, которые необходимо соблюдать при программировании на PHP:</div>\r\n<div>\r\n	l&nbsp; Каждая команда заканчивается точкой с запятой (;);</div>\r\n<div>\r\n	l&nbsp; Одну команду можно записывать в несколько строк или несколько команд в одну строку;</div>\r\n<div>\r\n	l&nbsp; PHP чувствителен к регистру символов в именах переменных и функций;</div>\r\n<div>\r\n	<!--?<br /--><!--?php<br /--><!--?php<br /-->&nbsp; $index = 10;<br />\r\n	&nbsp; print($Index);&nbsp; // Ошибка<br />\r\n	?&gt;</div>\r\n<div>\r\n	<div>\r\n		l&nbsp; PHP нечувствителен в отношении ключевых слов, к пробелам, переводам строки, знакам табуляции.</div>\r\n	<p>\r\n		<br />\r\n		Этот код полностью корректен:<br />\r\n		<br />\r\n		<!--?php</p--></p>\r\n	<p>\r\n		&nbsp; $index = 10;<br />\r\n		&nbsp; $index = 10 + 20;<br />\r\n		&nbsp; $index = 10+10;<br />\r\n		&nbsp; $index =<br />\r\n		&nbsp; 10<br />\r\n		&nbsp; +<br />\r\n		&nbsp; 10;<br />\r\n		?&gt;</p>\r\n	<p>\r\n		&nbsp;</p>\r\n	<p>\r\n		PHP поддерживает три вида комментариев: один многострочный и два однострочных. PHP-парсер никак не анализирует комментарии, они просто игнорируются.&nbsp;</p>\r\n</div>\r\n<div>\r\n	<p>\r\n		<span style="color:#ff0000;"><!--?php</span--></span></p>\r\n	<p>\r\n		&nbsp; /*</p>\r\n	<p>\r\n		&nbsp; Первый</p>\r\n	<p>\r\n		&nbsp; вид</p>\r\n	<p>\r\n		&nbsp; комментария</p>\r\n	<p>\r\n		&nbsp; &nbsp;*/</p>\r\n	<p>\r\n		&nbsp;</p>\r\n	<p>\r\n		&nbsp; //&nbsp; Второй</p>\r\n	<p>\r\n		&nbsp;</p>\r\n	<p>\r\n		&nbsp; #&nbsp; Третий</p>\r\n	<p>\r\n		<span style="color:#ff0000;">?&gt;</span></p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n<div>\r\n	&bull;&nbsp; Все имена переменных должны начинаться со знака доллара ($);</div>\r\n<div>\r\n	&bull;&nbsp; Объявления не являются обязательными. Переменная начинает существовать с момента присвоения ей значения или с момента первого использования. Если использование начинается раньше присвоения, то переменная будет содержать значение по умолчанию;</div>\r\n<div>\r\n	&bull;&nbsp; Переменной не назначается определенный тип. Тип определяется хранящимся значением и текущей операцией.</div>\r\n<div>\r\n	<p>\r\n		Первым символом после $ должна быть буква или символ подчеркивания. Далее в имени переменной могут присутствовать буквы, цифры и символ подчеркивания.</p>\r\n	<p>\r\n		<span style="color: rgb(255, 0, 0); "><!--?php</span--></span></p>\r\n	<p>\r\n		&nbsp; <span style="color:#8b4513;">$I;&nbsp;</span> <span style="color:#808080;">// Допустимо</span></p>\r\n	<p>\r\n		&nbsp; $1;&nbsp; <span style="color:#808080;">// Недопустимо</span></p>\r\n	<p>\r\n		&nbsp; <span style="color:#800000;">$_1</span>;&nbsp; <span style="color:#808080;">// Допустимо</span></p>\r\n	<p>\r\n		<span style="color:#b22222;">&nbsp; $firstName;&nbsp;</span> <span style="color:#808080;">// Допустимо</span></p>\r\n	<p>\r\n		&nbsp; $7Lucky;&nbsp; <span style="color:#808080;">// Недопустимо</span></p>\r\n	<p>\r\n		&nbsp; $~password;&nbsp;<span style="color:#808080;"> // Недопустимо</span></p>\r\n	<p>\r\n		&nbsp; $Last!Visit;&nbsp; <span style="color:#808080;">// Недопустимо</span></p>\r\n	<p>\r\n		&nbsp; $Compute-Mean&nbsp; ;&nbsp; <span style="color:#808080;">// Недопустимо</span></p>\r\n	<p>\r\n		<span style="color:#ff0000;">?&gt;</span></p>\r\n</div>\r\n<p>\r\n	&nbsp;</p>\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 2, 'История PHP', '<p>\n	В 1995 г., коrда независимый проrраммист&nbsp; Расмус Лердорф (Rasmus Lerdorf) написал сценарий Perl/CGI для подсчета количества посетителей сайта, прочитавших его онлайн-резюме. Из-за низкой производительности он переписал сценарий на языке Си, после этого исходники были выложены на всеобщее обозрение для исправления ошибок и дополнений.</p>\n<p>\n	Пользователи сервера заинтересовались этим проектом и вскоре вышла первая версия продукта Personal Home Page Tools (средства для персональной домашней страницы). Средства эти были более чем скромными: анализатор кода, понимающий всего лишь несколько специальных команд, и набор утилит, полезных для создания гостевой книги, счетчика посещений, чата и т.п.</p>\n<p>\n	К середине 1995 года после основательной переработки появилась вторая версия продукта, названная PHP/FI (Personal Home Page / Forms Interpreter &ndash; персональная домашняя страница/ интерпретатор форм). Она включала набор базовых возможностей сегодняшнего PHP, возможность автоматически обрабатывать html-формы и встраиваться в html-коды.</p>\n<p>\n	В 1997 вышла вторая версия Cи-реализации PHP &ndash; PHP/FI 2.0. К тому моменту PHP использовали уже несколько тысяч человек по всему миру, примерно с 50 тыс. доменов, что составляло около 1% всего числа доменов Internet.</p>\n<p>\n	Число разработчиков PHP увеличилось до нескольких человек, но, несмотря на это, PHP/FI 2.0 все еще оставался крупным проектом одного человека. Официально PHP/FI 2.0 вышел только в ноябре 1997 года, просуществовав до этого в основном в бета-версиях. Вскоре после выхода его заменили альфа-версии PHP 3.0.</p>\n<p>\n	&nbsp;</p>\n<p>\n	PHP 3.0 была первой версией, напоминающей PHP, каким мы знаем его сегодня. Он очень сильно отличался от PHP/FI 2.0 и появился опять же как инструмент для решения конкретной прикладной задачи. Его создатели, Энди Гутманс (Andi Gutmans) и Зив Сураски (Zeev Suraski), в 1997 году переписали заново код PHP/FI, поскольку он показался им непригодным для разработки приложения электронной коммерции, над которым они работали.</p>\n<p>\n	Одной из сильных сторон PHP 3.0 была возможность расширения ядра, что привлекло внимание множества разработчиков, желающих добавить свой модуль расширения. Кроме того, PHP 3.0 предоставляла широкие возможности для взаимодействия с базами данных, различными протоколами и API. Немаловажным шагом к успеху оказалась разработка нового, намного более мощного и полного синтаксиса с поддержкой ООП. С момента появления PHP 3.0 изменилась не только функциональность и внутреннее устройство языка, но и его название. В аббревиатуре PHP больше не было упоминания о персональном использовании, PHP стало сокращением (рекурсивным акронимом) от PHP: Hypertext Preprocessor, что значит &laquo;PHP: препроцессор гипертекста&raquo;.</p>\n<p>\n	&nbsp;</p>\n<p>\n	Официально PHP 3.0 вышел в июне 1998 года, после 9 месяцев публичного тестирования. А уже к зиме Энди Гутманс и Зив Сураски начали переработку ядра PHP. В их задачи входило увеличение производительности работы сложных приложений и улучшение модульности кода, лежащего в основе PHP.</p>\n<p>\n	Новое ядро было названо &laquo;Zend Engine&raquo; (от имен создателей: Zeev и Andi) и впервые представлено в середине 1999 года.</p>\n<p>\n	PHP 4.0, основанный на этом ядре и принесший с собой набор дополнительных функций, официально вышел в мае 2000 года, почти через два года после своего предшественника, PHP 3.0. Помимо улучшения производительности, PHP 4.0 имел еще несколько ключевых нововведений, таких как поддержка сессий, буферизация вывода, более безопасные способы обработки вводимой пользователем информации и несколько новых языковых конструкций.</p>\n<p>\n	В настоящее время ведутся работы по улучшению Zend Engine и внедрению нововведений в PHP 5.0, первые бета-версии которого уже вышли в свет. Одно из существенных изменений произошло в объектной модели языка, ее основательно подлатали и добавили много новых возможностей.</p>\n<p>\n	Сегодня PHP используется сотнями тысяч разработчиков. Несколько миллионов сайтов написаны на PHP, что составляет более 20% доменов Internet.</p>\n', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 2, 'Базовый синтаксис', '<p>\n	PHP &mdash; это рекурсивный акроним аббревиатуры PHP Hypertext Preprocessor. Команды на языке PHP обрамляются специальными дескрипторами &mdash; тэгами языка PHP. Все, что находится вне этих тегов, игнорируется интерпретатором. Поддерживаются следующие стили написания тэгов:</p>\n<ul>\n	<li>\n		&nbsp;XML-стиль (рекомендуемый);</li>\n</ul>\n<p>\n	&nbsp;<span style="color:#ff0000;">&lt;?php</span> код на PHP <span style="color:#ff0000;">?&gt;</span></p>\n<ul>\n	<li>\n		l&nbsp; HTML-стиль;</li>\n</ul>\n<p>\n	&nbsp; <span style="color:#40e0d0;">&lt;script</span> language=&quot;php&quot;&gt; код на PHP <span style="color:#40e0d0;">&lt;/script&gt;</span></p>\n<ul>\n	<li>\n		l&nbsp; Краткий стиль;</li>\n</ul>\n<div>\n	&nbsp; <span style="color:#ff0000;"><!--?</span-->&nbsp;&lt;?&nbsp;<span style="color:#ff0000;"><!--?</span--><span id="cke_bm_84S" style="display: none; ">&nbsp;</span><span id="cke_bm_85S" style="display: none; ">&nbsp;</span>код на PHP<span id="cke_bm_84E" style="display: none; ">&nbsp;</span> <span id="cke_bm_85E" style="display: none; ">&nbsp;</span><span style="color:#ff0000;">?&gt;</span></span></span></div>\n<ul>\n	<li>\n		&nbsp;ASP-стиль.</li>\n</ul>\n<div>\n	<span style="color:#ff0000;">&nbsp; &lt;% </span>код на PHP <span style="color:#ff0000;">%&gt;</span></div>\n<div>\n	&nbsp;</div>\n<div>\n	Существует ряд требований, которые необходимо соблюдать при программировании на PHP:</div>\n<div>\n	l&nbsp; Каждая команда заканчивается точкой с запятой (;);</div>\n<div>\n	l&nbsp; Одну команду можно записывать в несколько строк или несколько команд в одну строку;</div>\n<div>\n	l&nbsp; PHP чувствителен к регистру символов в именах переменных и функций;</div>\n<div>\n	<!--?<br /--><!--?php<br /--><!--?php<br /-->&nbsp; $index = 10;<br />\n	&nbsp; print($Index);&nbsp; // Ошибка<br />\n	?&gt;</div>\n<div>\n	<div>\n		l&nbsp; PHP нечувствителен в отношении ключевых слов, к пробелам, переводам строки, знакам табуляции.</div>\n	<p>\n		<br />\n		Этот код полностью корректен:<br />\n		<br />\n		<!--?php</p--></p>\n	<p>\n		&nbsp; $index = 10;<br />\n		&nbsp; $index = 10 + 20;<br />\n		&nbsp; $index = 10+10;<br />\n		&nbsp; $index =<br />\n		&nbsp; 10<br />\n		&nbsp; +<br />\n		&nbsp; 10;<br />\n		?&gt;</p>\n	<p>\n		&nbsp;</p>\n	<p>\n		PHP поддерживает три вида комментариев: один многострочный и два однострочных. PHP-парсер никак не анализирует комментарии, они просто игнорируются.&nbsp;</p>\n</div>\n<div>\n	<p>\n		<span style="color:#ff0000;"><!--?php</span--></span></p>\n	<p>\n		&nbsp; /*</p>\n	<p>\n		&nbsp; Первый</p>\n	<p>\n		&nbsp; вид</p>\n	<p>\n		&nbsp; комментария</p>\n	<p>\n		&nbsp; &nbsp;*/</p>\n	<p>\n		&nbsp;</p>\n	<p>\n		&nbsp; //&nbsp; Второй</p>\n	<p>\n		&nbsp;</p>\n	<p>\n		&nbsp; #&nbsp; Третий</p>\n	<p>\n		<span style="color:#ff0000;">?&gt;</span></p>\n</div>\n<p>\n	&nbsp;</p>\n<div>\n	&bull;&nbsp; Все имена переменных должны начинаться со знака доллара ($);</div>\n<div>\n	&bull;&nbsp; Объявления не являются обязательными. Переменная начинает существовать с момента присвоения ей значения или с момента первого использования. Если использование начинается раньше присвоения, то переменная будет содержать значение по умолчанию;</div>\n<div>\n	&bull;&nbsp; Переменной не назначается определенный тип. Тип определяется хранящимся значением и текущей операцией.</div>\n<div>\n	<p>\n		Первым символом после $ должна быть буква или символ подчеркивания. Далее в имени переменной могут присутствовать буквы, цифры и символ подчеркивания.</p>\n	<p>\n		<span style="color: rgb(255, 0, 0); "><!--?php</span--></span></p>\n	<p>\n		&nbsp; <span style="color:#8b4513;">$I;&nbsp;</span> <span style="color:#808080;">// Допустимо</span></p>\n	<p>\n		&nbsp; $1;&nbsp; <span style="color:#808080;">// Недопустимо</span></p>\n	<p>\n		&nbsp; <span style="color:#800000;">$_1</span>;&nbsp; <span style="color:#808080;">// Допустимо</span></p>\n	<p>\n		<span style="color:#b22222;">&nbsp; $firstName;&nbsp;</span> <span style="color:#808080;">// Допустимо</span></p>\n	<p>\n		&nbsp; $7Lucky;&nbsp; <span style="color:#808080;">// Недопустимо</span></p>\n	<p>\n		&nbsp; $~password;&nbsp;<span style="color:#808080;"> // Недопустимо</span></p>\n	<p>\n		&nbsp; $Last!Visit;&nbsp; <span style="color:#808080;">// Недопустимо</span></p>\n	<p>\n		&nbsp; $Compute-Mean&nbsp; ;&nbsp; <span style="color:#808080;">// Недопустимо</span></p>\n	<p>\n		<span style="color:#ff0000;">?&gt;</span></p>\n</div>\n<p>\n	&nbsp;</p>\n', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 1, 'Функции для работы со строками', 'вкеарфыкерфык', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 1, 'Математические функции', 'йвуакйук', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 3, 'Базовый синтаксис', '<p>\n	ф4ук еу34&nbsp;</p>\n', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `txt` text NOT NULL,
  `dt` datetime NOT NULL,
  `read` tinyint(4) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `files` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `from_id`, `to_id`, `topic`, `txt`, `dt`, `read`, `parent_id`, `files`) VALUES
(1, 1, 2, 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci ve', 'кеке', '2013-01-31 12:25:01', 0, NULL, NULL),
(2, 3, 2, 'Проверка', 'ывкпыкпыцкц', '2013-02-10 08:24:40', 0, NULL, NULL),
(3, 1, 3, 'Помощь!', 'Подскажи, пожалуйста, как сделать 2 лабораторную??', '2013-04-18 15:34:28', 0, NULL, NULL),
(4, 1, 3, 'Lorem ipsum ', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. ', '2013-04-18 15:36:49', 0, NULL, NULL),
(5, 3, 1, 'Я пришел к тебе с приветом!', 'Я пришел к тебе с приветом,\nРассказать, что солнце встало,\nЧто оно горячим светом\nПо листам затрепетало;\n\nРассказать, что лес проснулся,\nВесь проснулся, веткой каждой,\nКаждой птицей встрепенулся\nИ весенней полон жаждой;\n\nРассказать, что с той же страстью,\nКак вчера, пришел я снова,\nЧто душа все так же счастью\nИ тебе служить готова;\n\nРассказать, что отовсюду\nНа меня весельем веет,\nЧто не знаю сам, что буду\nПеть - но только песня зреет.', '2013-05-25 13:51:43', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `short` text NOT NULL,
  `fulltext` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `dt` datetime NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `short`, `fulltext`, `author_id`, `dt`, `status`) VALUES
(1, 'Samsung GALAXY S 4 официально представлен в России', '<p>\r\nВ Камерном зале Московского Международного Дома музыки компания Samsung Electronics провела презентацию четвертого поколения флагманского смартфона — Samsung GALAXY S4, самого ожидаемого устройства года.</p>', '<p>В Камерном зале Московского Международного Дома музыки компания Samsung Electronics провела презентацию четвертого поколения флагманского смартфона — Samsung GALAXY S4, самого ожидаемого устройства года. Новинка объединила в себе все, что только может понадобиться современному человеку в его повседневных делах, позволяя поддерживать активный ритм жизни и решать сложные задачи. На мероприятии в центре столицы в ходе интерактивной презентации были представлены основные особенности Samsung GALAXY S4.\r\n\r\nSamsung GALAXY S4 работает на базе платформы Android 4.2.2 «из коробки». Также в наличии есть обновленный интерфейс TouchWiz Nature UX. Новый смартфон обзавелся множеством уникальных и полезных нововведений, которые призваны упростить жизнь его обладателя, а также привнести яркие и незабываемые впечатления от использования устройства в повседневной жизни.\r\n\r\nФункциональность камер смартфона была расширена благодаря внедрению множества новых возможностей. К примеру, «Двусторонняя съемка» позволяет делать фотографии, задействовав одновременно обе камеры. Функция «Фото со звуком» позволяет сделать фото, вместе с которым сохранится и звуковое сопровождение, а функция «Фото движения» дает возможность снять серию фотографий подряд и объединить их в одно изображение. Также следует отметить режим камеры «Живое фото», благодаря которому можно создавать анимированный GIF-файл из выбранного фрагмента отснятого материала.</p>', 1, '2013-04-18 15:26:54', 0),
(2, 'argaer', '<p>\n	aergaegr</p>\n', '<p>\n	aergaer</p>\n', 1, '2013-04-15 01:50:19', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `txt` text NOT NULL,
  `url` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `qanswers`
--

CREATE TABLE IF NOT EXISTS `qanswers` (
  `question_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  `right` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=102 ;

--
-- Дамп данных таблицы `qanswers`
--

INSERT INTO `qanswers` (`question_id`, `id`, `value`, `right`) VALUES
(1, 1, 'session_id()', '0'),
(1, 2, 'session_name()', '1'),
(1, 3, 'session_register()', '0'),
(1, 4, 'session()', '0'),
(2, 5, 't', '1'),
(2, 6, 't', '1'),
(2, 7, 't', '0'),
(2, 8, 't', '0'),
(3, 9, 'wer', '1'),
(3, 10, 'wer', '1'),
(3, 11, 'wer', '0'),
(3, 12, 'wer', '0'),
(5, 17, 'с помощью тега ''<?php ?>''', '1'),
(5, 18, 'с помощью тега ''<? ?>''', '1'),
(5, 19, 'конструкцией <script language="php"> код на PHP </script>''', '1'),
(5, 20, 'с помощью тега ''<%  %>''', '0'),
(6, 21, '12', '1'),
(6, 22, '23', '0'),
(6, 23, '34', '0'),
(6, 24, '45', '0'),
(7, 25, 'q', '1'),
(7, 26, 'q', '1'),
(7, 27, 'q', '0'),
(7, 28, 'q', '0'),
(8, 29, 'z', '1'),
(8, 30, 'z', '0'),
(8, 31, 'z', '0'),
(8, 32, 'z', '0'),
(9, 33, 'ggg', '0'),
(9, 34, 'f', '0'),
(9, 35, 'f', '0'),
(9, 36, 'f', '0'),
(11, 41, '1', '0'),
(11, 42, '2', '0'),
(11, 43, '3', '0'),
(11, 44, '4', '0'),
(13, 49, '1', '0'),
(13, 50, '2', '0'),
(13, 51, '3', '0'),
(13, 52, '4', '0'),
(14, 53, 'с помощью символа пробела', '0'),
(14, 54, 'с помощью символа ''#''', '0'),
(14, 55, 'с помощью символа '';''', '1'),
(14, 56, 'с помощью символа ''<?''', '0'),
(15, 57, '$arr ("0"=> "a");', '1'),
(15, 58, '$arr["a","b","c"] = "q";', '0'),
(15, 59, '$arr[0] = "a";', '1'),
(15, 60, '$arr = array("a","b","c");', '1'),
(59, 85, '', 'Ответ на вопрос в ви'),
(60, 86, '1', '1'),
(60, 87, '2', '1'),
(60, 88, '3', '0'),
(61, 89, '1', '1'),
(61, 90, '2', '1'),
(61, 91, '3', '1'),
(62, 92, '1', '1'),
(62, 93, '2', '0'),
(62, 94, '3', '0'),
(62, 95, '4', '1'),
(62, 96, '5', '0'),
(62, 97, '7', '1'),
(62, 98, '9', '0'),
(62, 99, '10', '0'),
(62, 100, '11', '0'),
(62, 101, '12', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `id_test` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `title`, `type`, `id_test`) VALUES
(1, 'Какая функция возвращает имя сессии?', 'radio', 1),
(2, 'ититттт', 'checkbox', 2),
(3, 'wer', 'radio', 3),
(5, 'Как встраивается PHP в HTML-код?', 'checkbox', 1),
(6, 'qweqweq', 'checkbox', 4),
(7, 'qqqqq', 'checkbox', 4),
(8, 'zzzzz', 'radio', 4),
(9, 'fffff', 'radio', 4),
(11, 'nnnn', 'radio', 4),
(13, 'VVVVVVVV', 'radio', 4),
(14, 'Как разделяются инструкции в языке PHP?', 'radio', 1),
(15, 'Как можно задать массив в языке PHP?', 'checkbox', 1),
(59, 'Ввод слова', 'text', 1),
(60, 'Много вариантов ответа', 'checkbox', 1),
(61, 'Один вариант ответа', 'radio', 1),
(62, 'Очень много вопросов', 'checkbox', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.'),
(3, 'tutor', 'Tutor privileges');

-- --------------------------------------------------------

--
-- Структура таблицы `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(1, 1),
(3, 1),
(4, 1),
(5, 1),
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `testresults`
--

CREATE TABLE IF NOT EXISTS `testresults` (
  `id_user` int(11) unsigned NOT NULL,
  `id_test` int(11) NOT NULL,
  `dt` date NOT NULL,
  `result` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `testresults`
--

INSERT INTO `testresults` (`id_user`, `id_test`, `dt`, `result`) VALUES
(1, 1, '2013-01-31', 63),
(3, 1, '2013-02-10', 43),
(1, 2, '2013-02-27', 100),
(1, 3, '2013-02-27', 0),
(1, 4, '2013-04-14', 67),
(5, 1, '2013-06-22', 88);

-- --------------------------------------------------------

--
-- Структура таблицы `tests`
--

CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` int(3) NOT NULL,
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `tests`
--

INSERT INTO `tests` (`id`, `course_id`, `name`, `time`, `type`) VALUES
(1, 1, 'Основы PHP', 60, 0),
(2, 1, 'Циклы PHP', 55, 1),
(3, 1, 'Функции PHP', 44, 1),
(4, 1, 'Работа с файлами', 12, 1),
(5, 2, 'a@z9.ru', 44, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `usercourses`
--

CREATE TABLE IF NOT EXISTS `usercourses` (
  `student_id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `usercourses`
--

INSERT INTO `usercourses` (`student_id`, `course_id`, `status`) VALUES
(2, 1, 1),
(3, 1, 1),
(1, 4, 1),
(1, 2, 1),
(1, 1, 1),
(5, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `otch` varchar(50) DEFAULT NULL,
  `sex` tinyint(1) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  `avatar` text,
  `icq` varchar(12) DEFAULT NULL,
  `skype` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `firstname`, `lastname`, `otch`, `sex`, `logins`, `last_login`, `avatar`, `icq`, `skype`) VALUES
(1, 'a@z9.ru', 'admin', '960fae2031f2719125792fe717bf857613151a48a535e8aa90d852254f438b33', 'Анна', 'Раченкова', 'Александровна', 2, 62, 1371898146, '1_1366316525', '558700797', '787878'),
(3, 'daria@ya.ru', 'Daria', '960fae2031f2719125792fe717bf857613151a48a535e8aa90d852254f438b33', 'Дарья', 'Стёпкина', 'Тимуровна', 2, 5, 1371896890, NULL, '123', '123'),
(4, 'm@m.ru', 'Маша', '2d695696f3b824178be7dfcb46bf3d5ed50e4ad52b6c3f46552e0fc9a7c33977', 'Маша', 'Хромова', NULL, 2, 1, 1362496992, NULL, NULL, NULL),
(5, 'a@9.ru', 'Nicolai', '960fae2031f2719125792fe717bf857613151a48a535e8aa90d852254f438b33', 'Николай', 'Раченков', NULL, 1, 3, 1371898093, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
