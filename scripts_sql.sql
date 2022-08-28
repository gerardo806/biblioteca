CREATE DATABASE `biblioteca`

-- biblioteca.libros definition

CREATE TABLE `libros` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `imagenes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO biblioteca.libros (nombre,imagenes) VALUES
	 ('Aprende PHP','imagen.jpg'),
	 ('Aprende node','imagenNode.jpg'),
	 ('Aprende Java','imagenJava.jpg'),
	 ('Aprende Python','imagenPython.jpg'),
	 ('Aprende C#','imagenCSharp.jpg'),
	 ('Aprende Go','imagenGo.jpg'),
	 ('Aprende C++','imagenCPP.jpg'),
	 ('Aprende C','imagenC.jpg'),
	 ('Aprende TS','imagenTS.jpg'),
	 ('Aprende JS','imagenJS.jpg');
INSERT INTO biblioteca.libros (nombre,imagenes) VALUES
	 ('Aprende Rubí','imagenRubí.jpg'),
	 ('Aprende Kotlin','imagenKotlin.jpg');
