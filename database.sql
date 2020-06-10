# To be imported

Create database darius;

create table darius.persoana_contact (
    id integer primary key auto_increment,
    nume varchar(20)
);

# Gata cu importul

# Test
insert into darius.persoana_contact (nume) values ("Razvan");