SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone="+00:00";

CREATE TABLE IF NOT EXISTS 'information' (
	`USER_ID` int(4) NOT NULL AUTO_INCREMENT,
	`NAME` varchar(50) DEFAULT NULL,
	`ADDRESS` varchar(50) DEFAULT NULL,
	`EMAIL` varchar(50) DEFAULT NULL,
	`CONTACT` varchar(50) DEFAULT NULL,
	PRIMARY KEY (`USER_ID`)
) ENGINE_InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;