DROP DATABASE IF EXISTS FAS;

CREATE DATABASE FAS;
USE FAS;

DROP USER IF EXISTS calvin@'127.0.0.1';
CREATE USER calvin@'127.0.0.1' IDENTIFIED BY 'mdp';

GRANT ALL PRIVILEGES ON FAS.*to calvin@'127.0.0.1';


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



