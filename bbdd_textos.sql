USE Amason_db;

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

('hero_title', 'en', 'We move the engine of the digital economy.'),
('hero_subtitle', 'en', 'Your packages arrive fast, safe and hassle-free, wherever you want.'),
('hero_title', 'es', 'Movemos el motor de la economía digital.'),
('hero_subtitle', 'es', 'Tus paquetes llegan rápido, seguro y sin complicaciones, donde tú quieras.'),

('nav_features', 'en', 'Features'),
('nav_features', 'es', 'Características'),
('nav_about_us', 'en', 'About us'),
('nav_about_us', 'es', 'Sobre nosotros'),
('nav_contact_us', 'en', 'Contact us'),
('nav_contact_us', 'es', 'Contáctanos'),
('nav_developers', 'en', 'Developers'),
('nav_developers', 'es', 'Desarrollo'),

('see_our_features', 'en', 'Learn our features'),
('see_our_features', 'es', 'Aprende nuestras características'),

('features_title', 'en', 'Features'),
('features_title', 'es', 'Características'),
('features_text_1', 'en', 'Lorem ipsum'),
('features_text_1', 'es', 'Lorem ipsum'),
('features_text_2', 'en', 'Lorem ipsum'),
('features_text_2', 'es', 'Lorem ipsum'),

('about_us_title', 'en', 'About us'),
('about_us_title', 'es', 'Sobre nosotros'),

('about_us_text', 'en', '<strong>About Amason: Redefining Modern Delivery</strong><br><br>
    At Amason, we don’t just deliver packages; we power the engine of the digital economy. We were founded with a clear mission: to eliminate the barriers between what you desire and the moment you hold it in your hands.<br><br>
    Our logistical infrastructure combines cutting-edge technology with an intelligent distribution network, allowing us to reach every corner of the country in record time. In a world that never stops, Amason is the trusted partner that ensures your orders arrive safely, efficiently, and sustainably.<br><br>
    <strong>What drives us?</strong><br>
    <ul>
        <li><strong>Speed:</strong> We optimize routes in real-time to beat the clock.</li>
        <li><strong>Precision:</strong> A state-of-the-art tracking system so you always know exactly where your shipment is.</li>
        <li><strong>Commitment:</strong> We work day and night to ensure that the experience of receiving is just as satisfying as the experience of buying.</li>
    </ul>'),

('about_us_text', 'es', '    <strong>Sobre Amason: Redefiniendo la Entrega Moderna</strong><br><br>
    En Amason, no solo entregamos paquetes; movemos el motor de la economía digital. Nacimos con una misión clara: eliminar las barreras entre lo que deseas y el momento en que lo tienes en tus manos.<br><br>
    Nuestra infraestructura logística combina tecnología de vanguardia con una red de distribución inteligente que nos permite llegar a cada rincón del país en tiempo récord. En un mundo que no se detiene, Amason es el socio de confianza que garantiza que tus pedidos lleguen de forma segura, eficiente y sostenible.<br><br>
    <strong>¿Qué nos mueve?</strong><br>
    <ul>
        <li><strong>Velocidad:</strong> Optimizamos rutas en tiempo real para ganarle al reloj.</li>
        <li><strong>Precisión:</strong> Un sistema de seguimiento de última generación para que siempre sepas dónde está tu envío.</li>
        <li><strong>Compromiso:</strong> Trabajamos día y noche para que la experiencia de recibir sea tan satisfactoria como la de comprar.</li>
    </ul>'),

('contact_us_title', 'en', 'Contact us'),
('contact_us_title', 'es', 'Contáctanos'),

('developers_title', 'en', 'Developers'),
('developers_title', 'es', 'Desarrollo'),

('developers_text', 'en', 'This website was developed by the <strong>CigaSoft</strong> team,<br>consisting of <strong>José Porras</strong>, <strong>Ricardo Ebothemen</strong>, and <strong>Juan García</strong>.<br>Our goal is to provide high-quality digital experiences,<br>combining creativity and technology to deliver effective solutions to our users.'),
('developers_text', 'es', 'Esta página ha sido desarrollada por el <strong>equipo CigaSoft</strong>,<br>formado por <strong>José Porras</strong>, <strong>Ricardo Ebothemen</strong> y <strong>Juan García</strong>.<br>Nuestro objetivo es ofrecer experiencias digitales de alta calidad,<br>combinando creatividad y tecnología para brindar soluciones efectivas a nuestros usuarios.'),

('contact_name', 'en', 'Name'),
('contact_name', 'es', 'Nombre'),
('contact_name_placeholder', 'en', 'Your name'),
('contact_name_placeholder', 'es', 'Tu nombre'),
('contact_email', 'en', 'Email'),
('contact_email', 'es', 'Correo'),
('contact_email_placeholder', 'en', 'example@email.com'),
('contact_email_placeholder', 'es', 'ejemplo@email.com'),
('contact_message', 'en', 'Message'),
('contact_message', 'es', 'Mensaje'),
('contact_message_placeholder', 'en', 'Tell us...'),
('contact_message_placeholder', 'es', 'Cuéntanos'),
('contact_send', 'en', 'Send'),
('contact_send', 'es', 'Enviar');