DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) DEFAULT NULL,
  `content` LONGTEXT,
  PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;

INSERT INTO `articles` (`id`, `title`, `content`)
VALUES
    (1,'我是标题','<h3>我是内容呀~~</h3><p>我真的是内容，不信算了，哼~ O(∩_∩)O</p>'),
    (2,'我是标题','<h3>我是内容呀~~</h3><p>我真的是内容，不信算了，哼~ O(∩_∩)O</p>');

/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;