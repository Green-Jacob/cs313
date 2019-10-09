/*
* The idea here is to create one schema per class.
* This will organize the data into sections that can be manipulated without
* affected data for another class.
*/

--seventh grade
CREATE SCHEMA IF NOT EXISTS seventh;

CREATE TABLE IF NOT EXISTS seventh.students(
  name varchar(30) PRIMARY KEY
  );

CREATE TABLE IF NOT EXISTS seventh.assignments(
  name varchar(30) PRIMARY KEY,
  total_score numeric
  );

CREATE TABLE IF NOT EXISTS seventh.gradebook(
  assignment varchar(30) references seventh.assignments(name),
  student varchar(30) references seventh.students(name),
  score numeric --this will be the score provided by user input divided by the total_score
  );

--seventh grade honors
CREATE SCHEMA IF NOT EXISTS seventh_honors;

CREATE TABLE IF NOT EXISTS seventh_honors.students(
  name varchar(30) PRIMARY KEY
  );

CREATE TABLE IF NOT EXISTS seventh_honors.assignments(
  name varchar(30) PRIMARY KEY,
  total_score numeric
  );

CREATE TABLE IF NOT EXISTS seventh_honors.gradebook(
  assignment varchar(30) references seventh_honors.assignments(name),
  student varchar(30) references seventh_honors.students(name),
  score numeric --this will be the score provided by user input divided by the total_score
  );
