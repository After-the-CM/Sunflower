drop database if exists sunflower;
create database sunflower;
use sunflower;
drop table if exists users;
create table users (
    name char(50),
    pass char(50)
);
insert into docker values ("admin", "P@ssw0rd"); 
insert into docker values ("yoden", "Svp3rS3cr3tP4sswr0d!!!"); 
insert into docker values ("flag", "flag{7h1s_1s_f4k3_fl4g}"); 