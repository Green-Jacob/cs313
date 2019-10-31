CREATE TABLE user_logins (
  user_id SEQUENTIAL NOT NULL,
  username TEXT NOT NULL UNIQUE,
  password TEXT NOT NULL
);
