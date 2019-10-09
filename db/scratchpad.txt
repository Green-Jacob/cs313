CREATE TABLE gradebook (
    class varchar(80) references classes(name)
);

CREATE TABLE classes (
  name varchar(80) primary key
);

DROP TABLE "tablename";
INSERT INTO classes VALUES('7th Math');
INSERT INTO gradebook (class)
    VALUES (3);
SELECT * FROM ;
SELECT "columns" FROM ;
SELECT "expression" AS "column name" FROM "table";

ALTER TABLE "tablename" RENAME COLUMN "columnname" TO "newcolumnname";
