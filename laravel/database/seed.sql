CREATE DATABASE spbank;

\connect spbank;

CREATE TABLE cliente(
  id INTEGER PRIMARY KEY,
  nombre VARCHAR(30),
  apellido_p VARCHAR(30),
  apellido_m VARCHAR(30),
  direccion VARCHAR(30),
  telefono VARCHAR(30),
  correo VARCHAR(30),
  contrasenia VARCHAR(30)
);

CREATE TABLE cuenta(
  id INTEGER PRIMARY KEY,
  cliente_id INTEGER,
  fecha_apertura TIMESTAMP,
  fecha_cierre TIMESTAMP,
  credito FLOAT,
  debito FLOAT,
  saldo FLOAT,
  tipo_cuenta VARCHAR(30),

  FOREIGN KEY (cliente_id) REFERENCES cliente(id)
);

CREATE TABLE movimiento(
  id INTEGER PRIMARY KEY,
  cliente_id INTEGER,
  cuenta_id INTEGER,
  monto FLOAT,
  fecha TIMESTAMP,
  referencia TIMESTAMP,
  estatus VARCHAR(30),
  tipo_movimiento VARCHAR(30),

  FOREIGN KEY (cliente_id) REFERENCES cliente(id),
  FOREIGN KEY (cuenta_id) REFERENCES cuenta(id)

);
