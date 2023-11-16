DROP DATABASE IF EXISTS FAS;
CREATE DATABASE FAS;
USE FAS;
DROP USER IF EXISTS calvin@'127.0.0.1';
CREATE USER calvin@'127.0.0.1' IDENTIFIED BY 'mdp';
GRANT ALL PRIVILEGES ON FAS.*to calvin@'127.0.0.1';

-- user
CREATE TABLE user (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  admin BOOLEAN,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL,
  first_name VARCHAR(255),
  last_name VARCHAR(255)
);
-- shop
CREATE TABLE product (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(255),
  description MEDIUMTEXT,
  image TEXT,
  price FLOAT
);

CREATE TABLE orders (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_client INT,
  etat ENUM("Commande en préparation", "Commande expédié", "Commande reçu"),
  FOREIGN KEY (id_client) REFERENCES user (id)
);

CREATE TABLE ligne_co (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_prod INT,
  id_order INT,
  qt INT,
  FOREIGN KEY (id_prod) REFERENCES product (id),
  FOREIGN KEY (id_order) REFERENCES orders (id)
);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Baleine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/1.png', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Blanc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/2.png', 10);

INSERT INTO product (name, description, image, price)
VALUES('Bracelet Requin Baleine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/3.jpeg', 10);

INSERT INTO product (name, description, image, price)
VALUES('Bracelet Requin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/4.jpeg', 10);

INSERT INTO product (name, description, image, price)
VALUES('Mug Requin Blanc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/5.jpeg', 10);

INSERT INTO product (name, description, image, price)
VALUES('Poster Grand Blanc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/6.png', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche White', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/7.jpg', 10);

INSERT INTO product (name, description, image, price)
VALUES('Affiche "les requins"', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/8.jpg', 10);

INSERT INTO product (name, description, image, price)
VALUES('Mug Shark Cookies', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/9.png', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Baleine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/1.png', 10);

INSERT INTO product (name, description, image, price)
VALUES('Peluche Requin Blanc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/2.png', 10);

INSERT INTO product (name, description, image, price)
VALUES('Mug Shark', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum luctus accumsan aliquet. Nullam eget malesuada ex, eu fermentum arcu. Nunc viverra porta suscipit. Donec non.', '../VIEW/assets/images/product/5.jpeg', 10);

-- Article
CREATE TABLE article (
  id INT PRIMARY KEY AUTO_INCREMENT,
  a_title VARCHAR(255),
  a_image TEXT,
  a_text TEXT
);

INSERT INTO article (a_title, a_image, a_text)
VALUES('The Great White Shark', 'https://i.guim.co.uk/img/media/3aab545d0cd5f6831942707f170c9f8e7dd76d07/0_214_5254_3153/master/5254.jpg?width=700&quality=85&auto=format&fit=max&s=6423bb0f4c27e7b61be5d627686943ce', 'freestarfreestar Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean gravida arcu nibh, at mattis lorem tincidunt ac. Praesent scelerisque porttitor risus sit amet tempor. Integer in cursus quam. Cras sit amet felis ac ante pulvinar sollicitudin. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent nec mi nulla. Cras vel tincidunt lorem. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer felis augue, porta porta libero sed, suscipit accumsan lacus. Sed id ante non eros ullamcorper egestas. Proin nec lorem a sem iaculis pulvinar id et dui. Morbi mollis leo eu eros mattis, eu sagittis lorem pellentesque. Nulla sapien tellus, lacinia sed lorem a, ornare semper neque. Donec eget ante nisi. Aenean pretium lorem sed pretium auctor. Nulla porta congue tempus. Aenean at mollis felis, in tristique ante. Maecenas euismod, metus non sollicitudin porttitor, leo neque mattis massa, nec cursus libero justo vitae magna. Nam accumsan erat a lorem interdum, sit amet dictum purus interdum.');

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





