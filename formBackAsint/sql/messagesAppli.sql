drop table if exists messagesAppli;

create table messagesAppli (
id integer not null primary key auto_increment,
date_envoi datetime not null,
nom varchar(40) not null,
message text not null,
accord text
)
