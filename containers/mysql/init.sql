drop database if exists sunflower;
create database sunflower;
use sunflower;
drop table if exists users;
create table users (
    name char(50),
    pass char(50)
);
insert into users values ("admin", "P@ssw0rd"); 
insert into users values ("yoden", "Svp3rS3cr3tP4sswr0d!!!"); 
insert into users values ("flag", "flag{7h1s_1s_f4k3_fl4g}"); 