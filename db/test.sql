CREATE TABLE test(
  number real,
  id SERIAL NOT NULL
  );

CREATE TABLE test1(
  number real
  );

INSERT INTO test VALUES(1);

INSERT INTO test1 VALUES(
  (SELECT number FROM test WHERE id = 1) *3
  );
