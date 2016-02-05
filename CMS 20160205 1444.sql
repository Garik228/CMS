--
-- Скрипт сгенерирован Devart dbForge Studio for MySQL, Версия 6.3.358.0
-- Домашняя страница продукта: http://www.devart.com/ru/dbforge/mysql/studio
-- Дата скрипта: 05.02.2016 14:44:25
-- Версия сервера: 5.5.45
-- Версия клиента: 4.1
--


-- 
-- Отключение внешних ключей
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Установить режим SQL (SQL mode)
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 
-- Установка кодировки, с использованием которой клиент будет посылать запросы на сервер
--
SET NAMES 'utf8';

-- 
-- Установка базы данных по умолчанию
--
USE CMS;

--
-- Описание для таблицы articles
--
DROP TABLE IF EXISTS articles;
CREATE TABLE articles (
  id INT(11) NOT NULL AUTO_INCREMENT,
  title VARCHAR(255) DEFAULT NULL,
  date DATETIME DEFAULT NULL,
  content VARCHAR(255) DEFAULT NULL,
  categories_id INT(11) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 2
AVG_ROW_LENGTH = 16384
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы categories
--
DROP TABLE IF EXISTS categories;
CREATE TABLE categories (
  id INT(11) NOT NULL AUTO_INCREMENT,
  title VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 2
AVG_ROW_LENGTH = 16384
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы session
--
DROP TABLE IF EXISTS session;
CREATE TABLE session (
  id INT(11) NOT NULL AUTO_INCREMENT,
  user_id INT(11) DEFAULT NULL,
  sid VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 1
CHARACTER SET utf8
COLLATE utf8_general_ci;

--
-- Описание для таблицы users
--
DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id INT(11) NOT NULL,
  login VARCHAR(255) DEFAULT NULL,
  password VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AVG_ROW_LENGTH = 16384
CHARACTER SET utf8
COLLATE utf8_general_ci;

-- 
-- Вывод данных для таблицы articles
--
INSERT INTO articles VALUES
(1, 'Новость 1', '2016-02-11 00:00:00', '        цццйукйцу        ', 0);

-- 
-- Вывод данных для таблицы categories
--
INSERT INTO categories VALUES
(1, 'Новости');

-- 
-- Вывод данных для таблицы session
--

-- Таблица CMS.session не содержит данных

-- 
-- Вывод данных для таблицы users
--
INSERT INTO users VALUES
(1, 'log123', 'log123');

-- 
-- Восстановить предыдущий режим SQL (SQL mode)
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Включение внешних ключей
-- 
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;