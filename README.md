# simplelogin
Simple all in one PHP login system with MySQL Database.

To setup the MySQL database table use the following query:
 CREATE TABLE `users` (
 `Id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(128) DEFAULT NULL,
 `password` varchar(128) DEFAULT NULL,
 `email` varchar(128) DEFAULT NULL,
 `privileges` int(11) DEFAULT '0',
 `createdate` datetime DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`Id`),
 UNIQUE KEY `users_UNIQUE` (`username`),
 UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
