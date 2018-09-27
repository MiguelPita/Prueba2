CREATE SCHEMA IF NOT EXISTS cookbook;
USE cookbook;

CREATE TABLE recipes(
  name VARCHAR(255) NOT NULL,
  ingredients VARCHAR(255) NOT NULL,
  instructions VARCHAR(255) NOT NULL,
  time DATETIME DEFAULT NULL
) ENGINE=InnoDb;

INSERT INTO recipes (name,ingredients,instructions) VALUES
  ("Tortilla patata","Huevos, patatas","Freir todo"),
  ("Bacalao salsa","Bacalao","Concion lenta"),
  ("Raxo patatas","Solomillo, patatas,aceite","Freir todo"),
  ("Pimientos padron","Pimientos, sal","Saltear, horno 5 min"),
  ("Pulpo a feira","Pulpo,pimenton,sal","Trocear,salpimentar,aceite");


