CREATE DATABASE IF NOT EXISTS ktce;
DROP TABLE IF EXISTS ktce.main;
CREATE TABLE ktce.main (
  time TIMESTAMP,
  data VARCHAR(1024)
);
CREATE INDEX pi on ktce.main (time) using btree
