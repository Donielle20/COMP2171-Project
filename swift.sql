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

CREATE TABLE `Admins`(
    `First_Name` varchar(20) NOT NULL default '', 
    `Last_Name` varchar(20) NOT NULL default '',
    `Email` varchar(30) NOT NULL default '',
    `Pword` varchar(30) NOT NULL default '',
    `ID` int(5) NOT NULL auto_increment,
    PRIMARY KEY (`ID`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `Packages`(
    `Package_ID` int(7) NOT NULL default 0,
    `Package_Description` varchar(100) NOT NULL default '',
    `Name_On_Package` varchar(40) NOT NULL default '',
    `Stat` varchar(15) NOT NULL default '',
    `Date_Arrived` varchar(10) NOT NULL default '',
    `Package_Weight` int(7) NOT NULL default 0,
    `ID` int(5) NOT NULL auto_increment,
    PRIMARY KEY (`ID`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `Courier`(
    `Business_Name` varchar(40) NOT NULL default '',
    `Business_Address` varchar(40) NOT NULL default '',
    `Business_Number` int(11) NOT NULL default 0,
    `Email` varchar(30) NOT NULL default '',
    `Contact_Name` varchar(40) NOT NULL default '',
    `Contact_Number` int(11) NOT NULL default 0,
    `Registration_Number` int(20) NOT NULL default 0,
    `ID` int(5) NOT NULL auto_increment,
    PRIMARY KEY (`ID`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;