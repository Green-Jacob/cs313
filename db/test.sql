CREATE TABLE topic (
  id SERIAL NOT NULL PRIMARY KEY,
  name TEXT NOT NULL
  );

INSERT INTO topic VALUES('Faith');
INSERT INTO topic VALUES('Sacrifice');
INSERT INTO topic VALUES('Charity');

CREATE TABLE whatchamacallit (
  topic_id INT NOT NULL REFERENCES topic(id),
  scripture_id INT NOT NULL REFERENCES scripture(id)
  );
