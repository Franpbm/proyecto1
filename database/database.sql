CREATE DATABASE info;

CREATE TABLE info.`user` (
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    name varchar(20) NOT NULL,
    surnames varchar(50) NOT NULL,
    username varchar(20) NOT NULL,
    birthdate date NOT NULL,
    password varchar(100) NOT NULL,
    email varchar(100) NOT NULL
);

INSERT INTO info.`user` VALUES (
    NULL, "Juan", "Hernandez", "Juanaso", "1997-12-02", password("raton"), "juanito@gmail.com"),
    (NULL, "Maria", "Hernandez", "Maria", "1997-12-02", password("rata"), "maria@gmail.com"
);

CREATE TABLE info.`message`(
    id int(11) PRIMARY KEY AUTO_INCREMENT,
    userId int(11),
    msg varchar(250) NOT NULL,
    timestamp datetime NOT NULL,
    FOREIGN KEY (userId) REFERENCES `user`(id) ON UPDATE CASCADE
);

INSERT INTO info.`message` VALUES 
    (NULL, 1, "Que risaaaa....", "2019-01-16 10:24:12"),
    (NULL, 1, "xd", "2019-01-16 01:12:00"),
    (NULL, 2, "relajense señores que la estan armando", "2019-01-16 00:48:31"),
    (NULL, 1, "Que risa tio....", "2019-01-14 21:32:06"),
    (NULL, 2, "Que risa....", "2018-12-16 12:32:42"),
    (NULL, 1, "Este es mi primer tweet tambien", "2018-12-15 15:24:32"),
    (NULL, 1, "Buenas, este es mi primer tweet", "2018-12-14 02:41:02"),
    (NULL, 1, "Ohh, que pasa señores", "2018-12-12 17:26:13"
);
