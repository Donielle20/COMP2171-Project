DROP DATABASE IF EXISTS SwiftDB;
CREATE DATABASE SwiftDB;
USE SwiftDB;

CREATE TABLE `Customers`(
    `First_Name` varchar(20) NOT NULL default '', 
    `Last_Name` varchar(20) NOT NULL default '',
    `Email` varchar(30) NOT NULL default '',
    `Pword` varchar(30) NOT NULL default '',
    `Home` varchar(40) NOT NULL default '',
    `Parish` varchar(20) NOT NULL default '',
    `Phone_Number` int(13) NOT NULL default 0,
    `ID` int(5) NOT NULL auto_increment,
    PRIMARY KEY (`ID`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;