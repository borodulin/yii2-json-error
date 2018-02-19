CREATE TABLE json_table(
  id INTEGER PRIMARY KEY,
  data JSONB
);

INSERT INTO json_table (id, data)
VALUES (1, '{"foo":"bar"}');