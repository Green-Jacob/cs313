CREATE TABLE note_user(
  name varchar(80) primary key,
  id_num integer
  );

CREATE TABLE user(
  name varchar(30) primary key
);

CREATE TABLE conference(
  name varchar(20) primary key
  );

CREATE TABLE note(
  note_user varchar(80) references note_user(name),
  note varchar(500),
  conference varchar(20) references conference(name),
  speaker varchar(30) references speakers(name)
  );

INSERT INTO speakers VALUE('Dallin H. Oaks');

INSERT INTO note (note_user, note, conference, speaker)
  VALUES('Jake 1', 'Trust the Lord', 'Oct 2019', 'President Dallin H. Oaks');
