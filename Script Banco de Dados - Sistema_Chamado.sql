Create database bd_sistema_chamado;

use bd_sistema_chamado;

create table tb_user(
	id_user int auto_increment primary key,
    nm_user varchar(45),
    email varchar(50),
    setor varchar(45),
    senha text
);

select * from tb_user;

