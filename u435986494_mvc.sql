
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Час створення: Гру 06 2016 р., 15:02
-- Версія сервера: 10.0.20-MariaDB
-- Версія PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- БД: `u435986494_mvc`
--

-- --------------------------------------------------------

--
-- Структура таблиці `ad`
--

CREATE TABLE IF NOT EXISTS `ad` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `site` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `Side` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Дамп даних таблиці `ad`
--

INSERT INTO `ad` (`ad_id`, `name`, `price`, `site`, `Side`) VALUES
(1, 'Лижі', 500, 'https://www.ukr.net/', 'Left'),
(2, 'Сыр', 100, 'https://www.ukr.net/', 'Left'),
(3, 'Дом', 200000, 'https://www.ukr.net/', 'Left'),
(4, 'Вода', 20, 'https://www.ukr.net/', 'Left'),
(6, 'Такси', 20, 'https://www.ukr.net/', 'Right'),
(7, 'Штаны', 500, 'https://www.ukr.net/', 'Right'),
(8, 'Куртки', 1000, 'https://www.ukr.net/', 'Right'),
(9, 'Шаурма', 30, 'https://www.ukr.net/', 'Right');

-- --------------------------------------------------------

--
-- Структура таблиці `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL,
  `article_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=69 ;

--
-- Дамп даних таблиці `articles`
--

INSERT INTO `articles` (`article_id`, `title`, `description`, `photo`, `article_date`, `category_id`, `views`) VALUES
(1, 'Заявление Луценко может повредить взаимодействию', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'https://www.rbc.ua/static/img/_/k/_kos4652_12_650x410.jpg', '2016-12-02 12:29:11', 1, 5),
(2, 'В случае снятия санкций с РФ изменятся границы не только Украины, — Огрызко', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://s2.hvylya.net/wp-content/uploads/2014/12/Vladimir-Ogryizko.jpg', '2016-12-02 12:30:50', 1, 3),
(3, 'Генштаб отчитался об успешном завершении ракетных стрельб', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'https://focus.ua/modules/thumb.php?u=../files/%3D108.jpg&m=c_large', '2016-12-02 12:32:34', 1, 5),
(4, 'Калинчук не призначатимуть на посаду, – заступник міністра', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'https://imagecdn1.luxnet.ua/tv24/resources/photos/news/610x344_DIR/201612/755818.jpg?201612143232', '2016-12-02 12:33:12', 1, 105),
(5, 'Україна і Польща підписали угоду про співпрацю в сфері оборони', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://www.unn.com.ua/uploads/news/2016/12/02/893f084b6d6c7e5c47058a6fba284ad2f146cd98.jpg', '2016-12-02 12:52:59', 1, 8),
(6, 'УКРАИНА И ПОЛЬША ШОКИРОВАНЫ РЕШЕНИЕМ ЕК ПО ГАЗОПРОВОДУ OPAL', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://img1.ubr.ua/article/660x371/1mdk6.jpg', '2016-12-02 13:00:20', 2, 2),
(7, 'У Мінекономрозвитку прорахують порушення в держзакупівлях', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://www.unn.com.ua/uploads/news/2016/12/02/f4ce8f3ac017acb117d3ddfed86807f2e0f6a154.jpg', '2016-12-02 13:00:20', 2, 0),
(8, 'Украина сократила на четверть производство соли перед запретом поставок в РФ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://xcook.info/sites/default/files/resize/products/12/opisanie-300x254.jpg', '2016-12-02 13:00:20', 2, 0),
(9, 'ЧЕРЕЗ ВЕЛИЧЕЗНІ БОРГИ ПРИПИНЕНО ЕЛЕКТРОПОСТАЧАННЯ ВОДОКАНАЛУ, ЩО ПОДАВАВ ВОДУ У "ДНР"', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://tut-cikavo.com/images/Uncategorised/voda/maxresdefault.jpg', '2016-12-02 13:00:20', 2, 4),
(10, 'Eustream обеспечит еще 2,8 млн куб. м дополнительной мощности для выдачи газа в Украину на I кв. 2017г', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://images.interfax.com.ua/img/2609_155157.jpg', '2016-12-02 13:00:20', 2, 0),
(11, 'В Китае заработали «пылесосы» для очистки воздуха', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://newsyou.info/wp-content/uploads/2016/12/00002.jpg', '2016-12-02 13:05:19', 8, 0),
(12, 'До биткоина добрались налоговики', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://psm7.com/wp-content/uploads/2016/12/us-tracks-tax-evaders-in-bitcoin.jpg', '2016-12-02 13:05:19', 8, 1),
(13, 'Старейшая из сохранившихся камер Nikon продана на аукционе за €384 000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://toneto.net/upload/wysiwyg/parsuk/12-16/58412b815deaa_1480665985.jpg', '2016-12-02 13:05:19', 8, 0),
(14, 'В ФСБ заявили о подготовке иностранными спецслужбами масштабных кибератак с целью дестабилизации финансовой системы РФ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://internetua.com/upload/content/27/60/ib_413043_index.jpg', '2016-12-02 13:05:19', 8, 2),
(15, 'Айфони рятуватимуть життя', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://static.gazeta.ua/img/cache/preview/738/738492_w_300.jpg', '2016-12-02 13:05:19', 8, 0),
(16, 'В УКРАИНЕ ИЗМЕНЯТ ПРАВИЛА ДЛЯ ВСЕХ УЧАСТНИКОВ ДОРОЖНОГО ДВИЖЕНИЯ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'https://avtoblog.ua/Media/files/filemanager/18%20%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8FNew%20folder/New%20folder/19%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8F/20%20%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8FNew%20folder/New%20folder/21%20%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8FNew%20folder/22%20%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8FNew%20folder/New%20folder/23%20%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8FNew%20folder/New%20folder/24%20%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8FNew%20folder/New%20folder/25%20%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8FNew%20folder/New%20folder/New%20folder/New%20folder/28%20%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8FNew%20folder/New%20folder/29%20%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8FNew%20folder/New%20folder/30%20%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8FNew%20folder/New%20folder/1%20%D0%B4%D0%B5%D0%BA%D0%B0%D0%B1%D1%80%D1%8FNew%20folder/New%20folder/2%20%D0%B4%D0%B5%D0%BA%D0%B0%D0%B1%D1%80%D1%8FNew%20folder/446433_original.jpg', '2016-12-02 13:10:25', 9, 0),
(17, 'NIKOLA MOTOR ПРОДЕМОНСТРИРОВАЛА ВОДОРОДНЫЙ ТЯГАЧ ONE', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://img.tsn.ua/originals/18/c5/c7d2f8c695ef0a906e194cc13c11c518.jpg', '2016-12-02 13:10:25', 9, 0),
(18, '«Мерседес» разработал фары-проекторы с двумя миллионами зеркал', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://i.infocar.ua/img/news-/111158/big_111158.jpg', '2016-12-02 13:10:25', 9, 0),
(19, 'Разбитая трасса Кривой Рог-Днепр – видео не для слабонервных', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://www.moytambov.ru/sites/moytambov.ru/files/styles/medium/public/%D0%94%D0%98%D0%A1/pp.jpg', '2016-12-02 13:10:25', 9, 0),
(20, 'Dodge в последний раз запустит продажи «Вайпера»', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://i.infocar.ua/img/news-/111157/big_111157.jpg', '2016-12-02 13:10:25', 9, 1),
(21, 'Страховая медицина, семейные врачи и госпитальные округа. Что изменится в системе здравоохранения после реформы?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://gordonua.com/img/article/1616/54_tn.jpg', '2016-12-02 13:15:24', 11, 0),
(22, 'Как похудеть к Новому году без усилий и вреда для здоровья', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://feelgood.ua/media/content/dieta2.thumbnail_500.jpg', '2016-12-02 13:15:24', 11, 0),
(23, 'Где живут самые счастливые дети на свете', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://informat.com.ua/wp-content/uploads/2016/12/Deti1.jpg', '2016-12-02 13:15:24', 11, 3),
(24, '3 ДОКАЗАТЕЛЬСТВА, ЧТО С ЦЕЛЛЮЛИТОМ БОРОТЬСЯ БЕССМЫСЛЕННО', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://4mama.ua/uploads/files/files/food5.jpg', '2016-12-02 13:15:24', 11, 0),
(25, 'Худеем без диет: 5 советов психолога', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://my.goodhouse.com.ua/i/600_400/publications/3011/hudeem-bez-diet-5-sovetov-psihologa-1036-67144.jpg', '2016-12-02 13:15:24', 11, 0),
(26, 'Гоша Куценко спивается без работы', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://kinoafisha.ua/upload/2016/12/news/n2b/92/57609/1480662947gosha-kucenko-spivaetsya-bez-rabot.jpg', '2016-12-02 13:21:03', 12, 5),
(27, 'ВТРЕНДЕ Селена Гомес стала самой популярной звездой Instagram-2016', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'https://storage.realist.online/uploads/public/584/16a/3d7/58416a3d73a97477589729.jpg', '2016-12-02 13:21:03', 12, 2),
(28, 'СМИ: Дженнифер Лоуренс окольцевали', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://movie-advisor.net/uploads/posts/2016-12/1480677353_1119-min-1.jpeg', '2016-12-02 13:21:03', 12, 0),
(29, 'АЛЕССАНДРА АМБРОСИО ВПЕЧАТЛИЛА НАРЯДОМ НА ВЕЧЕРИНКЕ VICTORIA''S SECRET', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://img.tsn.ua/thumbs/585xX/8c/be/2a0feab04677d2d0d491b50bc985be8c.jpg', '2016-12-02 13:21:03', 12, 0),
(30, 'Потап развелся с жено', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deleniti dignissimos doloremque doloribus ducimus enim error id illum in ipsum libero molestias perferendis perspiciatis praesentium repellendus sapiente sint sit ullam!', 'http://toneto.net/upload/wysiwyg/parsuk/12-16/58413b34eca11_1480670004.jpg', '2016-12-02 13:21:03', 12, 4),
(67, 'Адвокат: Онищенко пошел на сделку по "газовому делу" с США, чтобы избежать преследования', 'Идти на сделку с США для избежания преследования – это выбор и право народного депутата из группы "Воля народа" Александра Онищенко, заявил его адвокат Андрей Цыганков.', 'http://gordonua.com/img/article/1622/50_tn.jpg', '2016-12-04 18:14:45', 1, 5),
(68, '"Нужно отходить от практики проводить расследования в прямых эфирах или в Facebook", - Шкиряк', 'Советник главы МВД Зорян Шкиряк, комментируя трагедию с перестрелкой в Княжичах, высказался за прекращение практики расследования в прямых эфирах и соцсетях.\r\n\r\n\r\nОб этом он заявил в эфире телеканала "112 Украина", передает Цензор.НЕТ.\r\n\r\n"Я думаю, что нужно отходить от практики проводить расследования в прямых эфирах или в Facebook и Twitter. Я думаю, в сегодня МВД как никто заинтересовано в том, чтобы этой ужасной трагедии было дана соответствующая оценка. В первую очередь должно быть проведено объективное расследование, на что мы сегодня настроены и требуем, чтобы был сделан детальный анализ этого события и сделаны соответствующие выводы об ответственности", - сказал Шкиряк.\r\n\r\nЧитайте на "Цензор.НЕТ": Тела погибших в Княжичах полицейских отдадут родным после судмедэкспертизы, - Геращенко\r\n\r\nНапомним, в ночь на воскресенье в поселке Княжичи Киевской области в результате перестрелки погибли 5 правоохранителей.\r\n\r\nДвое сотрудников принадлежали к госслужбе охраны, двое были полицейскими разведчиками и еще один - сотрудником спецподразделения КОРД.\r\n\r\nПо сообщению народного депутата Украины Антона Геращенко, перестрелка произошла случайно, из-за недоразумения в ходе выполнения операции по задержанию преступников.\r\n\r\nПрокуратура Киевской области осуществляет досудебное расследование инцидента. Исполняющий обязанности председателя Нацполиции Вадим Троян сообщил о связи с правоохранительными органами преступной группировки.', 'http://telegraf.com.ua/files/2016/06/shkiryak.jpg', '2016-12-05 22:27:20', 1, 10);

-- --------------------------------------------------------

--
-- Структура таблиці `article_and_tag`
--

CREATE TABLE IF NOT EXISTS `article_and_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Дамп даних таблиці `article_and_tag`
--

INSERT INTO `article_and_tag` (`id`, `article_id`, `tag_id`) VALUES
(1, 4, 1),
(2, 4, 2),
(3, 4, 3),
(4, 4, 4),
(5, 4, 5),
(7, 66, 6),
(8, 66, 1),
(9, 66, 12),
(10, 67, 16),
(11, 67, 1),
(12, 68, 1),
(13, 68, 17);

-- --------------------------------------------------------

--
-- Структура таблиці `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `category_name` (`category_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Дамп даних таблиці `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Політика'),
(2, 'Економіка'),
(8, 'Наука'),
(9, 'Авто'),
(11, 'Здоров''я'),
(12, 'Шоу-бізнес');

-- --------------------------------------------------------

--
-- Структура таблиці `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `is_admin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Дамп даних таблиці `login`
--

INSERT INTO `login` (`id`, `login`, `password`, `email`, `is_admin`) VALUES
(1, 'admin', '1234', 'versun13@gmail.com', 1),
(2, 'admin2', '12345', 'versun@gmail.com', 1),
(3, 'vasya', '123455', 'vasya@kon.ua', 0),
(4, 'petya1234', '12345', 'petya1234@mail.ru', 0);

-- --------------------------------------------------------

--
-- Структура таблиці `mail_send`
--

CREATE TABLE IF NOT EXISTS `mail_send` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп даних таблиці `mail_send`
--

INSERT INTO `mail_send` (`user_id`, `name`, `surname`, `email`) VALUES
(2, 'Олег', 'Терлецкий', 'versun13@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблиці `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `response_to` int(11) NOT NULL,
  `message_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_agreed` int(11) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Дамп даних таблиці `messages`
--

INSERT INTO `messages` (`message_id`, `message`, `user_id`, `news_id`, `rating`, `response_to`, `message_time`, `is_agreed`) VALUES
(1, 'Хорошая новость', 1, 5, 0, 0, '2016-12-02 19:22:18', 1),
(2, 'Да, не плоха', 1, 4, 1, 0, '2016-12-02 19:44:00', 1),
(3, 'Круто', 2, 4, 2, 2, '2016-12-02 20:11:40', 1),
(4, 'Все ок(Ясно)', 1, 4, 1, 2, '2016-12-02 21:46:40', 1),
(5, 'Хорошая статья', 1, 4, 2, 0, '2016-12-02 21:57:02', 1),
(8, 'Годно', 1, 68, 0, 0, '2016-12-05 22:27:40', 1),
(6, '++++++++!!!!', 1, 4, 0, 0, '2016-12-05 21:49:39', 1),
(7, '+++++""""', 1, 4, 1, 0, '2016-12-05 21:49:53', 1),
(9, 'хороший комментарий', 1, 68, 0, 0, '2016-12-05 22:31:40', 0),
(10, 'Вода.', 1, 9, 0, 0, '2016-12-06 01:33:26', 0);

-- --------------------------------------------------------

--
-- Структура таблиці `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`tag_id`),
  UNIQUE KEY `tag_name` (`tag_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Дамп даних таблиці `tags`
--

INSERT INTO `tags` (`tag_id`, `tag_name`) VALUES
(1, 'Политика'),
(2, 'Министр'),
(3, 'Экономика'),
(4, 'Калинчук'),
(5, 'Назаначения'),
(6, 'Коты'),
(7, 'Собаки'),
(8, 'Свиньи'),
(9, 'Кони'),
(13, 'Корабли'),
(12, 'Самолеты'),
(14, 'Авто'),
(17, 'Шкиряк'),
(16, 'Онищенко');

-- --------------------------------------------------------

--
-- Структура таблиці `voted`
--

CREATE TABLE IF NOT EXISTS `voted` (
  `voted_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  PRIMARY KEY (`voted_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Дамп даних таблиці `voted`
--

INSERT INTO `voted` (`voted_id`, `user_id`, `message_id`) VALUES
(2, 5, 4),
(3, 5, 4),
(4, 5, 2),
(5, 1, 2),
(6, 1, 5),
(7, 1, 6),
(8, 1, 7),
(9, 1, 2),
(10, 1, 5),
(11, 1, 3),
(12, 1, 3),
(13, 1, 5),
(14, 1, 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
