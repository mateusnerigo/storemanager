CREATE DATABASE storemanager;
USE storemanager;

INSERT INTO uf (initials, name) VALUES ('AC', 'Acre');
INSERT INTO uf (initials, name) VALUES ('AL', 'Alagoas');
INSERT INTO uf (initials, name) VALUES ('AP', 'Amapá');
INSERT INTO uf (initials, name) VALUES ('AM', 'Amazonas');
INSERT INTO uf (initials, name) VALUES ('BA', 'Bahia');
INSERT INTO uf (initials, name) VALUES ('CE', 'Ceará');
INSERT INTO uf (initials, name) VALUES ('DF', 'Distrito Federal');
INSERT INTO uf (initials, name) VALUES ('ES', 'Espirito Santo');
INSERT INTO uf (initials, name) VALUES ('GO', 'Goiás');
INSERT INTO uf (initials, name) VALUES ('MA', 'Maranhão');
INSERT INTO uf (initials, name) VALUES ('MT', 'Mato Grosso');
INSERT INTO uf (initials, name) VALUES ('MS', 'Mato Grosso do Sul');
INSERT INTO uf (initials, name) VALUES ('MG', 'Minas Gerais');
INSERT INTO uf (initials, name) VALUES ('PA', 'Pará');
INSERT INTO uf (initials, name) VALUES ('PB', 'Paraíba');
INSERT INTO uf (initials, name) VALUES ('PR', 'Paraná');
INSERT INTO uf (initials, name) VALUES ('PE', 'Pernambuco');
INSERT INTO uf (initials, name) VALUES ('PI', 'Piauí');
INSERT INTO uf (initials, name) VALUES ('RJ', 'Rio de Janeiro');
INSERT INTO uf (initials, name) VALUES ('RN', 'Rio Grande do Norte');
INSERT INTO uf (initials, name) VALUES ('RS', 'Rio Grande do Sul');
INSERT INTO uf (initials, name) VALUES ('RO', 'Rondônia');
INSERT INTO uf (initials, name) VALUES ('RR', 'Roraima');
INSERT INTO uf (initials, name) VALUES ('SC', 'Santa Catarina');
INSERT INTO uf (initials, name) VALUES ('SP', 'São Paulo');
INSERT INTO uf (initials, name) VALUES ('SE', 'Sergipe');
INSERT INTO uf (initials, name) VALUES ('TO', 'Tocantins');

insert into adresses (type, name, city, uf_id) value ('Rua', 'Santa Catarina','Lins',25);

USE storemanager;
insert into users (name, username, password, is_admin, is_active) value ('Administrador', 'admin', 'admin', 1, 1);
insert into users (name, username, password, adress_id, adress_number, is_admin, is_active) value ('Mateus', 'mateuslineri', 'alface', 1, 164, 1, 1);