DROP DATABASE IF EXISTS FAS;

CREATE DATABASE FAS;
USE FAS;

DROP USER IF EXISTS calvin@'127.0.0.1';
CREATE USER calvin@'127.0.0.1' IDENTIFIED BY 'mdp';

GRANT ALL PRIVILEGES ON FAS.*to calvin@'127.0.0.1';

-- user
CREATE TABLE `user` (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  admin BOOLEAN,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL,
  first_name VARCHAR(255),
  last_name VARCHAR(255)
);

INSERT INTO user (id, admin, username, password, email, first_name, last_name) VALUES (1, 1, "admin", "admin", 'admin@mail.com', 'calvin', 'serbes');
INSERT INTO user (id, admin, username, password, email, first_name, last_name) VALUES (2, 0, "calvin", "serbes", "calvin@gmail.com", "calvin", "serbes");

-- shop
CREATE TABLE `product` (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  description MEDIUMTEXT,
  image TEXT,
  price FLOAT
);

CREATE TABLE `order` (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_client INT,
  FOREIGN KEY (id_client) REFERENCES `user` (id)
);

CREATE TABLE `ligne_co` (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_prod INT,
  id_order INT,
  qt INT,
  FOREIGN KEY (id_prod) REFERENCES `product` (id),
  FOREIGN KEY (id_order) REFERENCES `order` (id)
)

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/1.png', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Abysse', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/2.png', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/3.jpeg', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/4.jpeg', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/5.jpeg', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/6.png', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/7.jpg', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/8.jpg', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/9.png', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/1.png', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/2.png', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Marteau', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/5.jpeg', 10);


-- Quiz

CREATE TABLE Quiz (
  id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(255)
);

CREATE TABLE Question (
  id INT PRIMARY KEY AUTO_INCREMENT,
  quiz_id INT,
  question_label TEXT,
  bonne_reponse TEXT,
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
INSERT INTO Question (quiz_id, question_label, bonne_reponse) VALUES (@quiz_id, 'Quel est le plus grand requin du monde?', ' Requin baleine');
SET @question_id1 = LAST_INSERT_ID();
INSERT INTO Reponse (question_id, label) VALUES (@question_id1, ' Requin-taureau');
INSERT INTO Reponse (question_id, label) VALUES (@question_id1, ' Requin-marteau');
INSERT INTO Reponse (question_id, label) VALUES (@question_id1, ' Grand requin blanc');
INSERT INTO Reponse (question_id, label) VALUES (@question_id1, ' Requin baleine');

-- Question 2
INSERT INTO Question (quiz_id, question_label, bonne_reponse) VALUES (@quiz_id, 'Quel requin est connu pour son apparence aplatie?', ' Requin-marteau');
SET @question_id2 = LAST_INSERT_ID();
INSERT INTO Reponse (question_id, label) VALUES (@question_id2, ' Requin-taureau');
INSERT INTO Reponse (question_id, label) VALUES (@question_id2, ' Requin-marteau');
INSERT INTO Reponse (question_id, label) VALUES (@question_id2, ' Grand requin blanc');
INSERT INTO Reponse (question_id, label) VALUES (@question_id2, ' Requin baleine');

-- Question 3
INSERT INTO Question (quiz_id, question_label, bonne_reponse) VALUES (@quiz_id, 'Quel requin est connu pour être le plus grand prédateur des océans?', ' Grand requin blanc');
SET @question_id3 = LAST_INSERT_ID();
INSERT INTO Reponse (question_id, label) VALUES (@question_id3, ' Requin-taureau');
INSERT INTO Reponse (question_id, label) VALUES (@question_id3, ' Requin-marteau');
INSERT INTO Reponse (question_id, label) VALUES (@question_id3, ' Grand requin blanc');
INSERT INTO Reponse (question_id, label) VALUES (@question_id3, ' Requin baleine');

-- Question 4
INSERT INTO Question (quiz_id, question_label, bonne_reponse) VALUES (@quiz_id, 'Quel requin est connu pour sa taille massive et sa couleur grise?', ' Requin-taureau');
SET @question_id4 = LAST_INSERT_ID();
INSERT INTO Reponse (question_id, label) VALUES (@question_id4, ' Requin-taureau');
INSERT INTO Reponse (question_id, label) VALUES (@question_id4, ' Requin-marteau');
INSERT INTO Reponse (question_id, label) VALUES (@question_id4, ' Grand requin blanc');
INSERT INTO Reponse (question_id, label) VALUES (@question_id4, ' Requin baba');





