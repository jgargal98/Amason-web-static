CREATE DATABASE IF NOT EXISTS amason_web
CHARACTER SET utf8mb4;

USE amason_web;

CREATE TABLE IF NOT EXISTS textos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    clave VARCHAR(100) NOT NULL,
    idioma CHAR(2) NOT NULL,
    contenido TEXT NOT NULL,
    UNIQUE (clave, idioma)
);

CREATE TABLE IF NOT EXISTS mensajes_contacto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mensaje TEXT NOT NULL,
    fecha_envio DATETIME NOT NULL
);

INSERT INTO textos (clave, idioma, contenido) VALUES
('titulo_site', 'en', 'Amason'),
('titulo_site', 'es', 'Amason'),
('nav_features', 'en', 'Features'),
('nav_features', 'es', 'Características'),
('nav_about_us', 'en', 'About us'),
('nav_about_us', 'es', 'Sobre nosotros'),
('nav_contact_us', 'en', 'Contact us'),
('nav_contact_us', 'es', 'Contáctanos'),
('see_our_features', 'en', 'See our features'),
('see_our_features', 'es', 'Ver nuestras características'),
('features_title', 'en', 'Features'),
('features_title', 'es', 'Características'),
('features_text_1', 'en', 'Lorem ipsum'),
('features_text_1', 'es', 'Lorem ipsum'),
('features_text_2', 'en', 'Lorem ipsum'),
('features_text_2', 'es', 'Lorem ipsum'),
('about_us_title', 'en', 'About us'),
('about_us_title', 'es', 'Sobre nosotros'),
('about_us_text', 'en', 'Lorem ipsum placeholder'),
('about_us_text', 'es', 'Lorem ipsum placeholder'),
('contact_us_title', 'en', 'Contact us'),
('contact_us_title', 'es', 'Contáctanos'),
('contact_name', 'en', 'Name'),
('contact_name', 'es', 'Nombre'),
('contact_name_placeholder', 'en', 'Lorem ipsum'),
('contact_name_placeholder', 'es', 'Lorem ipsum'),
('contact_email', 'en', 'Email'),
('contact_email', 'es', 'Correo'),
('contact_email_placeholder', 'en', 'Lorem ipsum'),
('contact_email_placeholder', 'es', 'Lorem ipsum'),
('contact_message', 'en', 'Message'),
('contact_message', 'es', 'Mensaje'),
('contact_message_placeholder', 'en', 'Lorem ipsum'),
('contact_message_placeholder', 'es', 'Lorem ipsum'),
('contact_send', 'en', 'Send'),
('contact_send', 'es', 'Enviar');
