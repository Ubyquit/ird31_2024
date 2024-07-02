CREATE DATABASE usuarios_ird31;

USE usuarios_ird31;

CREATE TABLE usuarios(
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(25),
    ap_paterno VARCHAR(25),
    ap_materno VARCHAR(25),
    c_electronico VARCHAR(50),
    tel VARCHAR(10),
    f_nacimiento DATE
);

-- DATE 1990/09/25
-- DATETIME 1990/09/25 01:05:59 -> VIENE DE FORMULARIOS
-- TIMESTAMP 1990/09/25 01:05:59 -> ZONA HORARIA CLIENTE