DROP DATABASE IF EXISTS FAS;

CREATE DATABASE FAS;
USE FAS;

DROP USER IF EXISTS calvin@'127.0.0.1';
CREATE USER calvin@'127.0.0.1' IDENTIFIED BY 'mdp';

GRANT ALL PRIVILEGES ON FAS.*to calvin@'127.0.0.1';

-- shop
CREATE TABLE `product` (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  description MEDIUMTEXT,
  image TEXT,
  price FLOAT
);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', 'https://www.laposte.fr/ecom/occ/ecommerce/medias/sys_master/productsmedias/hf2/ha4/9927565770782/mp-500490574_media/mp-500490574_media.jpg_450Wx450H', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Abysse', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', 'https://peluchecenter.com/cdn/shop/products/peluche-requin-lezard___19.jpg?v=1678887512', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', 'https://www.laposte.fr/ecom/occ/ecommerce/medias/sys_master/productsmedias/hf2/ha4/9927565770782/mp-500490574_media/mp-500490574_media.jpg_450Wx450H', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', 'https://www.laposte.fr/ecom/occ/ecommerce/medias/sys_master/productsmedias/hf2/ha4/9927565770782/mp-500490574_media/mp-500490574_media.jpg_450Wx450H', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', 'https://www.laposte.fr/ecom/occ/ecommerce/medias/sys_master/productsmedias/hf2/ha4/9927565770782/mp-500490574_media/mp-500490574_media.jpg_450Wx450H', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', 'https://www.laposte.fr/ecom/occ/ecommerce/medias/sys_master/productsmedias/hf2/ha4/9927565770782/mp-500490574_media/mp-500490574_media.jpg_450Wx450H', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', 'https://www.laposte.fr/ecom/occ/ecommerce/medias/sys_master/productsmedias/hf2/ha4/9927565770782/mp-500490574_media/mp-500490574_media.jpg_450Wx450H', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', 'https://www.laposte.fr/ecom/occ/ecommerce/medias/sys_master/productsmedias/hf2/ha4/9927565770782/mp-500490574_media/mp-500490574_media.jpg_450Wx450H', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', 'https://www.laposte.fr/ecom/occ/ecommerce/medias/sys_master/productsmedias/hf2/ha4/9927565770782/mp-500490574_media/mp-500490574_media.jpg_450Wx450H', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', 'https://www.laposte.fr/ecom/occ/ecommerce/medias/sys_master/productsmedias/hf2/ha4/9927565770782/mp-500490574_media/mp-500490574_media.jpg_450Wx450H', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', 'https://www.laposte.fr/ecom/occ/ecommerce/medias/sys_master/productsmedias/hf2/ha4/9927565770782/mp-500490574_media/mp-500490574_media.jpg_450Wx450H', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', 'https://www.laposte.fr/ecom/occ/ecommerce/medias/sys_master/productsmedias/hf2/ha4/9927565770782/mp-500490574_media/mp-500490574_media.jpg_450Wx450H', 10);


-- Quiz

CREATE TABLE Quiz (
  id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255)
);

CREATE TABLE Question (
  id INT PRIMARY KEY AUTO_INCREMENT,
  quiz_id INT,
  question_label TEXT,
  reponse_label TEXT,
  image TEXT,
  FOREIGN KEY (quiz_id) REFERENCES Quiz (id)
);

CREATE TABLE Reponse (
  id INT PRIMARY KEY AUTO_INCREMENT,
  question_id INT,
  label TEXT,
  FOREIGN KEY (question_id) REFERENCES Question (id)
);

CREATE TABLE UserReponse (
  id INT PRIMARY KEY AUTO_INCREMENT,
  user_id INT,
  question_id INT,
  user_reponse TEXT,
  FOREIGN KEY (question_id) REFERENCES Question (id)
);


-- WAAAAW
-- Créer un nouvel enregistrement dans la table Quiz
INSERT INTO Quiz (title) VALUES ('Quiz sur les requins');
-- Récupérer l'ID du quiz que nous venons de créer
SET @quiz_id = LAST_INSERT_ID();

-- Insérer les questions et réponses du quiz sur les requins
-- Question 1
INSERT INTO Question (quiz_id, question_label, reponse_label) VALUES (@quiz_id, 'Quel est le plus grand requin du monde?', 'D) Requin baleine');
SET @question_id1 = LAST_INSERT_ID();
INSERT INTO Reponse (question_id, label) VALUES (@question_id1, 'A) Requin-taureau');
INSERT INTO Reponse (question_id, label) VALUES (@question_id1, 'B) Requin-marteau');
INSERT INTO Reponse (question_id, label) VALUES (@question_id1, 'C) Grand requin blanc');
INSERT INTO Reponse (question_id, label) VALUES (@question_id1, 'D) Requin baleine');

-- Question 2
INSERT INTO Question (quiz_id, question_label, reponse_label) VALUES (@quiz_id, 'Quel requin est connu pour son apparence aplatie?', 'B) Requin-marteau');
SET @question_id2 = LAST_INSERT_ID();
INSERT INTO Reponse (question_id, label) VALUES (@question_id2, 'A) Requin-taureau');
INSERT INTO Reponse (question_id, label) VALUES (@question_id2, 'B) Requin-marteau');
INSERT INTO Reponse (question_id, label) VALUES (@question_id2, 'C) Grand requin blanc');
INSERT INTO Reponse (question_id, label) VALUES (@question_id2, 'D) Requin baleine');

-- Question 3
INSERT INTO Question (quiz_id, question_label, reponse_label) VALUES (@quiz_id, 'Quel requin est connu pour être le plus grand prédateur des océans?', 'C) Grand requin blanc');
SET @question_id3 = LAST_INSERT_ID();
INSERT INTO Reponse (question_id, label) VALUES (@question_id3, 'A) Requin-taureau');
INSERT INTO Reponse (question_id, label) VALUES (@question_id3, 'B) Requin-marteau');
INSERT INTO Reponse (question_id, label) VALUES (@question_id3, 'C) Grand requin blanc');
INSERT INTO Reponse (question_id, label) VALUES (@question_id3, 'D) Requin baleine');

-- Question 4
INSERT INTO Question (quiz_id, question_label, reponse_label) VALUES (@quiz_id, 'Quel requin est connu pour sa taille massive et sa couleur grise?', 'A) Requin-taureau');
SET @question_id4 = LAST_INSERT_ID();
INSERT INTO Reponse (question_id, label) VALUES (@question_id4, 'A) Requin-taureau');
INSERT INTO Reponse (question_id, label) VALUES (@question_id4, 'B) Requin-marteau');
INSERT INTO Reponse (question_id, label) VALUES (@question_id4, 'C) Grand requin blanc');
INSERT INTO Reponse (question_id, label) VALUES (@question_id4, 'D) Requin baleine');





