DROP TABLE IF EXISTS users;
CREATE TABLE users (
  id INT UNSIGNED NOT NULL PRIMARY KEY,
  username VARCHAR(32) DEFAULT NULL,
  email VARCHAR(32) DEFAULT NULL,
  password VARCHAR(16) DEFAULT NULL
);
INSERT INTO users VALUES
  (345, 'User1', 'user1@gmail.com', 'password1'),
  (568, 'User2', 'user2@gmail.com', 'password2'),
  (274, 'User3', 'user3@gmail.com', 'password3');
