CREATE DATABASE prueba;

CREATE TABLE `user` (
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    name varchar(20) NOT NULL,
    surnames varchar(50) NOT NULL,
    username varchar(20) NOT NULL,
    birthdate date NOT NULL,
    password varchar(100) NOT NULL,
    passwordVerificate varchar(100) NOT NULL,
    email varchar(100) NOT NULL
);

CREATE TABLE `prueba.test`(
	  id int(11) PRIMARY KEY AUTO_INCREMENT,
    message_id int(11),
    name varchar(20) NOT NULL,
    msg varchar(250) NOT NULL,
    datetime datetime NOT NULL,
    FOREIGN KEY (message_id) REFERENCES `user`(id) ON UPDATE CASCADE
);

INSERT INTO test (name, msg, datetime) VALUES 
    ("Juan", "Que risaaaa....", "2019-01-16 10:24:12"),
    ("Pedrito", "xd", "2019-01-16 01:12:00"),
    ("Maria", "relajense señores que la estan armando", "2019-01-16 00:48:31"),
    ("Juan", "Que risa tio....", "2019-01-14 21:32:06"),
    ("Juan", "Que risa....", "2018-12-16 12:32:42"),
    ("Pedrito", "Este es mi primer tweet tambien", "2018-12-15 15:24:32"),
    ("Maria", "Buenas, este es mi primer tweet", "2018-12-14 02:41:02"),
    ("Pedrito", "Ohh, que pasa señores", "2018-12-12 17:26:13"
);