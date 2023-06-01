DROP DATABASE IF EXISTS stage;

CREATE DATABASE stage;

SET
    NAMES utf8mb4;

USE stage;

CREATE TABLE mytologie (
    id INT AUTO_INCREMENT,
    nom VARCHAR(64),
    PRIMARY KEY(id)
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
    is_admin BOOLEAN,
    mytologie_id INT,
    equipe_id INT,
    PRIMARY KEY (id),
    FOREIGN KEY (mytologie_id) REFERENCES mytologie(id),
    FOREIGN KEY (equipe_id) REFERENCES equipe(id)
);