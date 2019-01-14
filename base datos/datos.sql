CREATE DATABASE info;
 
CREATE TABLE information (
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    user varchar(20),
    `message` varchar(150),
    `date` datetime
);
