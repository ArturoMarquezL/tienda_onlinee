CREATE TABLE PRODUCTOS(
    id_producto integer PRIMARY KEY autoincrement,
    producto varchar(50) not null,
    precio decimal (10,0),
    existencias integer
);
CREATE TABLE TICKETS(
    fecha date,
    hora_venta time,
    cantidad_producto varchar(100),
    total_producto decimal(100,0)
);
INSERT INTO PRODUCTOS (producto, precio, existencias) VALUES 
('Computadora All in One Hp 290-A006BLA','$9,999','8'),
('Computadora All in One Lenovo A540','$17,000','5'),
('Computadora All in One Hp Pavilion 24-R019LA','$19,999','4'),
('Computadora All in One Hp Pavilion 22-B402LA','$10,000','10'),
('Computadora All in One Lenovo IdeaCentre A540','$20,800','4'),
('iMac Apple MMQA2E','$48,999','3'),
('Monitor Gamer Dell Alienware AW2518H','$11,190','7'),
('Monitor Gamer LG 24MK430H-B','$3,000','20');





INSERT INTO TICKETS (fecha,hora_venta,cantidad_producto,total_producto) 
VALUES ("2020-11-21","13:03","1 CALCULADORA CASIO FX-991 $75.0","$75.00");

