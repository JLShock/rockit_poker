-- PokerDB.sql

drop database if exists poker;
create database poker;
use poker;

create table Player (
	PlayerID int AUTO_INCREMENT PRIMARY KEY NOT NULL,
	PlayerName varchar(255) NOT NULL,
	PlayerRank int NOT NULL
);

insert into Player (PlayerName,PlayerRank) values ("Joe Kuether", 1);
insert into Player (PlayerName,PlayerRank) values ("Dan Smith", 2);
insert into Player (PlayerName,PlayerRank) values ("Jason Mercier", 3);
insert into Player (PlayerName,PlayerRank) values ("Paul Volpe", 3);

create table Game (
	GameID int AUTO_INCREMENT PRIMARY KEY NOT NULL,
	GameName varchar(255) NOT NULL,
	StartTime int(11) NOT NULL,
	State int NOT NULL -- Closed=0, Open=1, Break=2 ...
);

insert into Game (GameName, StartTime, State) values ("Texas Hold'em", 1443199655, 0);
insert into Game (GameName, StartTime, State) values ("Texas Hold'em", 1443199702, 1);
insert into Game (GameName, StartTime, State) values ("Five Card No Limit", 11443199712, 1);

create table GamePlayers (
	GameID int NOT NULL,
	PlayerID int NOT NULL
);

insert into GamePlayers (GameID, PlayerID) values (1, 1);
insert into GamePlayers (GameID, PlayerID) values (1, 2);
insert into GamePlayers (GameID, PlayerID) values (1, 3);
insert into GamePlayers (GameID, PlayerID) values (2, 3);
insert into GamePlayers (GameID, PlayerID) values (2, 4);