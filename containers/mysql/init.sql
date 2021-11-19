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

drop table if exists memos;
create table memos (
    name char(50),
    memo char(255)
);

insert into memos values ("y0d3n", "I'm yoden");
insert into memos values ("Gopher", "Don't Panic");
insert into memos values ("青い鳥", "いまどうしてる？");
insert into memos values ("After_the_CM", "セキュリティﾁｮｯﾄﾜｶﾙ");
insert into memos values ("ぼくはまちちゃん！", "こんにちはこんにちは!!");
