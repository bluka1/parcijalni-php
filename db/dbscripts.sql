CREATE DATABASE IF NOT EXISTS tododb;

USE tododb;

CREATE TABLE IF NOT EXISTS todos (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  naslov VARCHAR(255) NOT NULL,
  opis TEXT DEFAULT NULL,
  status enum('undone', 'done') NOT NULL DEFAULT 'done',
  createdAt TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO todos (naslov, opis)
VALUES
('Poloziti ispit', 'Moram ponoviti sve za ispit i uspjesno ga poloziti.'),
('Napraviti svoju aplikaciju', 'Moram napraviti svoju aplikaciju kroz koju cu provjezbati sve do sad nauceno.');
SELECT * FROM todos;