-- For mysql
CREATE table if not EXISTS Usuario (
    id int not null AUTO_INCREMENT,
    nombre varchar(255) not NULL,
    descripcion varchar(255),
    correo varchar(255) not NULL,
    contrasenia varchar(255) not NULL,
    PRIMARY KEY (id) 
);

CREATE table if not EXISTS Categoria (
    id int not null AUTO_INCREMENT,
    nombre varchar(255) not NULL,
    PRIMARY KEY (id)
);
CREATE table if not EXISTS Evento (
    id int not null AUTO_INCREMENT,
    nombre varchar(255) not NULL,
    ubicacion varchar(255),
    descripcion varchar(1023),
    fecha datetime DEFAULT CURRENT_TIMESTAMP,
    categoriaId int,
    usuarioId int, 
    PRIMARY KEY (id),
    FOREIGN KEY (categoriaId) REFERENCES Categoria(id),
    FOREIGN KEY (usuarioId) REFERENCES Usuario(id)
);

-- Insertar categorias
INSERT INTO Categoria
(nombre)
values
('Entetenimiento'),
('Arte'),
('Musica'),
('Tecnología');

INSERT INTO Usuario
(nombre, descripcion, correo, contrasenia)
VALUES('Robert Moreno', 'Estudiante de Ciencias Computacionales', 'rodemore@espol.edu.ec', '123456789');


-- Insertar evento
Insert into Evento (nombre, ubicacion, descripcion,categoriaid, usuarioid)
values('GYETECH: Clojure la ciencia de lo simple','https://www.google.com.ec/maps/place/Empresa+P%C3%BAblica+Municipal+para+la+Gesti%C3%B3n+y+Competitividad,+EP/@-2.1799578,-79.9041721,17.81z/data=!4m5!3m4!1s0x902d6dddfb13de27:0x1d87127e7b585246!8m2!3d-2.1800664!4d-79.9031316?hl=es' ,
'tercera charla del la iniciativa GYE TECH', 3, 1);

    