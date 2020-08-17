create database bookmarks;
use bookmarks;

create table users  (
  username varchar(16) not null primary key,
  passwd char(40) not null,
  email varchar(100) not null
);

create table bookmark (
  username varchar(16) not null,
  bm_URL varchar(255) not null,
  INDEX username (username),
  INDEX bm_URL (bm_URL),
  primary key(username, bm_URL)
);


CREATE USER 'bm_user'@'localhost' INDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON bookmarks.* TO 'bm_user'@'localhost';

