CREATE DATABASE IF NOT EXISTS teste CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE teste;

CREATE TABLE IF NOT EXISTS pessoas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

INSERT INTO pessoas (nome) VALUES ('João'), ('Maria'), ('Ana');
