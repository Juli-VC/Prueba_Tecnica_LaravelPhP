drop database sensive_prueba_tecnica_laravel;
CREATE DATABASE sensive_prueba_tecnica_laravel;
USE sensive_prueba_tecnica_laravel;

CREATE TABLE contactos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    address VARCHAR(255),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Terminal de VSC --> php artisan migrate
-- Se creará autamaticamente las tablas necesarias para los Auth.




