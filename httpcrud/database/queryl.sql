
create table brand(
    id serial primary key,
    name text not null
);

create table beer(
    id  serial primary key,
    name text not null,
    id_brand int,
    alcohol decimal (3,1) not null,
    foreign key (id_brand) references brand(id)
);

--alter table beer
/*add column id_brand int;

alter table beer
add constraint fk_brand
foreign key (id_brand) references brand(id);*/


