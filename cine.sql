CREATE TABLE Multiplex (
  idMultiplex INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre_multiplex VARCHAR(45) NOT NULL);

CREATE TABLE Sala (
  idSala INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  idMultiplex INT NOT NULL,
  Cantidadfilas INT NOT NULL,
  CantidadColumnas INT NOT NULL,
  nombre_sala VARCHAR(45) NOT NULL,
  foreign key (idMultiplex) references Multiplex (idMultiplex) on delete cascade on update cascade);

CREATE TABLE Silla (
  idSillas INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  idSala INT NOT NULL,
  UbicacionColumna VARCHAR(45) NOT NULL,
  UbicacionFila VARCHAR(45) NOT NULL,
  Estado INT NOT NULL,
  tipo_silla VARCHAR(45) NOT NULL,
  precio_silla INT NOT NULL,
foreign key (idSala) references Sala (idSala) on delete cascade on update cascade);

CREATE TABLE Cliente (
  idCliente INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  NumDocumento INT NOT NULL,
  Nombres VARCHAR(45) NOT NULL,
  Telefono INT NOT NULL,
  direccion VARCHAR(45) NOT NULL);
  
CREATE TABLE Comida (
  idComida INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre_comida VARCHAR(45) NOT NULL,
  tipo_comida VARCHAR(45) NOT NULL,
  precio_comida INT NOT NULL);

CREATE TABLE Factura (
  idFactura INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  idCliente INT NOT NULL,
  idSillas INT NOT NULL,
  idComida INT NOT NULL,
  CantidadSillas INT NOT NULL,
  CantidadComida INT NOT NULL,
  foreign key (idCliente) references Cliente (idCliente) on delete cascade on update cascade,
  foreign key (idSillas) references Silla (idSillas) on delete cascade on update cascade,
  foreign key (idComida) references Comida (idComida) on delete cascade on update cascade);

CREATE TABLE  Empleado (
  idEmpleado INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  idMultiplex INT NOT NULL,
  nombre_empleado VARCHAR(45) NOT NULL,
  numero_telefono INT NOT NULL,
  fecha_Contrato DATE NOT NULL,
  salario INT NOT NULL,
foreign key (idMultiplex) references Multiplex (idMultiplex) on delete cascade on update cascade);

CREATE TABLE Puntos (
  idPuntos INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  idFactura INT NOT NULL,
  idCliente INT NOT NULL,
  TotalPuntos INT NOT NULL,
foreign key (idFactura) references Factura ( idFactura) on delete cascade on update cascade,
foreign key (idCliente) references Cliente (idCliente) on delete cascade on update cascade);
 
INSERT INTO Multiplex (idMultiplex, nombre_multiplex) VALUES ('1','Titan');
INSERT INTO Multiplex (idMultiplex, nombre_multiplex) VALUES ('2','Unicentro');
INSERT INTO Multiplex (idMultiplex, nombre_multiplex) VALUES ('3','Plaza Central');
INSERT INTO Multiplex (idMultiplex, nombre_multiplex) VALUES ('4','Gran Estacion');
INSERT INTO Multiplex (idMultiplex, nombre_multiplex) VALUES ('5','Embajador');
INSERT INTO Multiplex (idMultiplex, nombre_multiplex) VALUES ('6','Las americas');

INSERT INTO Sala (idSala, idMultiplex, Cantidadfilas, CantidadColumnas, nombre_sala ) VALUES ('1','1','5','5','Avengers');
INSERT INTO Sala (idSala, idMultiplex, Cantidadfilas, CantidadColumnas, nombre_sala ) VALUES ('2','1','5','5','Rec');
INSERT INTO Sala (idSala, idMultiplex, Cantidadfilas, CantidadColumnas, nombre_sala ) VALUES ('3','2','5','5','Rapido y furioso');
INSERT INTO Sala (idSala, idMultiplex, Cantidadfilas, CantidadColumnas, nombre_sala ) VALUES ('4','3','5','5','Cars');
INSERT INTO Sala (idSala, idMultiplex, Cantidadfilas, CantidadColumnas, nombre_sala ) VALUES ('5','4','5','5','Capitan america');
INSERT INTO Sala (idSala, idMultiplex, Cantidadfilas, CantidadColumnas, nombre_sala ) VALUES ('6','5','5','5','Polo');
INSERT INTO Sala (idSala, idMultiplex, Cantidadfilas, CantidadColumnas, nombre_sala ) VALUES ('7','6','5','5','Carmen');

INSERT INTO Multiplex (idSala, UbicacionColumna, UbicacionFila, Estado, tipo_silla, precio_silla) VALUES ('1','');