drop table if exists categoria cascade;
create table if not exists categoria(
    id serial primary key,
    imagem varchar(255) not null,
    nome varchar(50) unique not null,
    descricao text not null,
    criado_em timestamp not null default current_timestamp
);


drop table if exists novidades cascade;
create table novidades(
    id serial primary key,
    imagem varchar(255) not null,
    direcao varchar(255) not null,
    titulo varchar(255) not null,
    descricao text not null,
    descricao2 text not null,
    categoria_id int not null,
    criado_em timestamp not null default current_timestamp,
foreign key(categoria_id) references categoria(id)
);

drop table if exists produtos cascade;
create table produtos(
    id serial primary key,
    imagem varchar(255) not null,
    titulo varchar(255) not null,
    descricao text not null,
    preco float not null,
    categoria_id int not null,
    criado_em timestamp not null default current_timestamp,
foreign key(categoria_id) references categoria(id)
);

drop table if exists usuario cascade;
create table if not exists usuario(
    id serial primary key,
    nome varchar(150) not null,
    email varchar(150) not null,
    senha varchar(150) not null,
    criado_em timestamp not null default current_timestamp
);