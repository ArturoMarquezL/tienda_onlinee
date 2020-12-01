CREATE TABLE PRODUCTOS(
    id_producto integer PRIMARY KEY autoincrement,
    producto varchar(50) not null,
    precio decimal (10,0),
    existencias integer
);
CREATE TABLE TICKETS(
    id_ticket integer PRIMARY KEY autoincrement,
    fecha_hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP not null,
    cantidad_producto varchar(100),
    producto varchar(100),
    total_producto varchar(100)
);
INSERT INTO PRODUCTOS (producto, precio, existencias) VALUES 
('Computadora All in One Hp 290-A006BLA','9999','8'),
('Computadora All in One Lenovo A540','17000','5'),
('Computadora All in One Hp Pavilion 24-R019LA','19999','4'),
('Computadora All in One Hp Pavilion 22-B402LA','10000','10'),
('Computadora All in One Lenovo IdeaCentre A540','20800','4'),
('iMac Apple MMQA2E','48999','3'),
('Monitor Gamer Dell Alienware AW2518H','11190','7'),
('Monitor Gamer LG 24MK430H-B','3000','20');






