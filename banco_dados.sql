create database servico_financeiro;
use servico_financeiro;

create table cliente (
id_cliente int not null primary key auto_increment, 
nome_cliente varchar(500),
email_cliente varchar(500),
telefone_cliente varchar(500),
cpf_cliente varchar(500)
);

create table solicitacao (
id_solicitcao int not null primary key auto_increment,
descricao_solicitacao varchar(500),
urgencia_solicitacao varchar(500),
status_solicitacao varchar(500),
data_abertura date 
);

create table funcionario (
id_funcionario int not null primary key auto_increment, 
nome_funcionario varchar(500),
email_funcionario varchar(500)
); 

create table solicitacao_funcionario (
id_solicitacao_funcionario int not null primary key auto_increment,
fk_solicitacao int not null,
foreign key (fk_solicitacao) references solicitacao(id_solicitcao),
fk_funcionario int not null,
foreign key (fk_funcionario) references funcionario(id_funcionario)
);

alter table solicitacao
add fk_cliente int not null;

alter table solicitacao 
add foreign key(fk_cliente) references cliente(id_cliente) 