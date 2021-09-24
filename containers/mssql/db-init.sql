CREATE DATABASE sunflower;
go

use sunflower;
go

DROP TABLE IF EXISTS users;
GO

CREATE TABLE users(
    name nvarchar(32),
    pass nvarchar(32)
);
GO

insert into users values ("admin", "P@ssw0rd"); 
insert into users values ("yoden", "Svp3rS3cr3tP4sswr0d!!!"); 
insert into users values ("flag", "flag{7h1s_1s_f4k3_fl4g}"); 