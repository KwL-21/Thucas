create table usuarios (id int primary key,
nome varchar(255),
login varchar (255),
senha varchar(255),
tipo_usuario int(255),
email varchar (255),
situacao enum('a','i')
);

