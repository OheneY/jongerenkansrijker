DROP DATABASE jongerenkansrijker;

CREATE DATABASE jongerenkansrijker;

CREATE TABLE activiteit(
    activiteitcode VARCHAR(3),
    activiteit VARCHAR(40),
    PRIMARY KEY (activiteitcode)
);

CREATE TABLE jongeren(
    jongerencode VARCHAR(5),
    roepnaam VARCHAR(20),
    tussenvoegsel VARCHAR(7),
    achternaam VARCHAR(25),
    inschrijfdatum DATE,
    PRIMARY KEY (jongerencode)
);

CREATE TABLE instituut(
    instituutcode VARCHAR(5),
    instituut VARCHAR(40),
    instituuttelefoon VARCHAR(11),
    PRIMARY KEY (instituutcode)
);

CREATE TABLE jongerenactiviteit(
    jongerencode VARCHAR(5),
    actiecode VARCHAR(3),
    startdatum DATE,
    afgerond TINYINT(1),
    FOREIGN KEY (jongerencode) REFERENCES jongeren(jongerencode)
);

CREATE TABLE jongereninstituut(
    jongerencode VARCHAR(5),
    instituutcode VARCHAR(5),
    startdatum DATE,
    FOREIGN KEY (jongerencode) REFERENCES jongeren(jongerencode),
    FOREIGN KEY (instituutcode) REFERENCES instituut(instituutcode)
);

CREATE TABLE medewerker(
    id int NOT NULL AUTO_INCREMENT,
    username VARCHAR(255),
    password VARCHAR(255),
    PRIMARY KEY (id)
);