DROP DATABASE stage IF EXISTS;
CREATE DATABASE stage;
SET NAMES utf8mb4;
USE stage;

CREATE TABLE mytologie (
    id INT AUTO_INCREMENT,
    nom VARCHAR(64),
    PRIMARY KEY(id),
);

CREATE TABLE groupe (
    id INT AUTO_INCREMENT,
    nom VARCHAR(64),

);
CREATE TABLE equipe (
    id INT AUTO_INCREMENT,
    nom VARCHAR(64),
    PRIMARY KEY (id)
);

CREATE TABLE personnages (
    id INT AUTO_INCREMENT,
    nom VARCHAR(64),
    face_id MEDIUMBLOB,
    rôle VARCHAR(64),
    mytologie_id INT,
    groupe_id INT,
    equipe_id int,
    PRIMARY KEY (id),
    FOREIGN KEY mytologie_id REFERENCES mytologie(id),
    FOREIGN KEY groupe_id REFERENCES groupe(id),
    FOREIGN KEY equipe_id REFERENCES equipe(id)
);




