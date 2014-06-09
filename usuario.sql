CREATE TABLE IF NOT EXISTS usuario(
	id INT AUTO_INCREMENT  PRIMARY KEY ,
	nombre VARCHAR(50) NOT NULL,
	apellidoPaterno VARCHAR(50) NOT NULL,
	apellidoMaterno VARCHAR(50),
	ciudad VARCHAR(50),
	imagen VARCHAR(100)
);

INSERT INTO usuario VALUES(null,'Daniel','Brena','Aquino','Mexico','img1.png');
INSERT INTO usuario VALUES(null,'Mario','Ortega','Orozco','Guatemala','img3.png');
INSERT INTO usuario VALUES(null,'Rosalba','Rivera','','Argentina','img2.png');
INSERT INTO usuario VALUES(null,'Jorge','Hernadez','Juarez','Brazil','img4.png');
INSERT INTO usuario VALUES(null,'Luis','Garcia','Lopez','Colombia','img5.png');