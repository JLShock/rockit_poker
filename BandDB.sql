-- BandDB.sql

drop database if exists band;
create database band;
use band;

create table Releases (
	TrackID int AUTO_INCREMENT PRIMARY KEY NOT NULL,
	TrackName varchar(255) NOT NULL,
	TrackLength time NOT NULL
);

insert into Releases (TrackID,TrackName,TrackLength) values (1, "The Band",0354);
insert into Releases (TrackID,TrackName,TrackLength) values (2, "We Are One",0417);
insert into Releases (TrackID,TrackName,TrackLength) values (3, "Smasher",0426);
insert into Releases (TrackID,TrackName,TrackLength) values (4, "Rock Out",0420);

create table Musicians (
	Name varchar(255) PRIMARY KEY NOT NULL,
	Instrument varchar(255) NOT NULL
);

insert into Musicians (Name,Instrument) values ("Tom", "Guitar/Lead Vocals");
insert into Musicians (Name,Instrument) values ("Joe", "Guitar");
insert into Musicians (Name,Instrument) values ("James", "Bass Guitar");
insert into Musicians (Name,Instrument) values ("John", "Drums");
insert into Musicians (Name,Instrument) values ("Sam", "Keyboard/Vocals");

create table TourDates (
	ShowID int AUTO_INCREMENT PRIMARY KEY NOT NULL,
	TourDate date NOT NULL,
	CityName varchar(255) NOT NULL,
	Venue varchar(255) NOT NULL
);

insert into TourDates (ShowID,TourDate,CityName,Venue) values (1, 20150930, "Los Angeles", "Avalon Hollywood");
insert into TourDates (ShowID,TourDate,CityName,Venue) values (2, 20151003, "Phoenix", "Monarch Theatre");
insert into TourDates (ShowID,TourDate,CityName,Venue) values (3, 20151010, "Colorado", "Red Rocks Amphitheatre");
insert into TourDates (ShowID,TourDate,CityName,Venue) values (4, 20151029, "Chicago", "Aragon Ballroom");
insert into TourDates (ShowID,TourDate,CityName,Venue) values (5, 20151105, "New York", "Madison Square Garden");