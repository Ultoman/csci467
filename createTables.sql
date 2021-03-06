/* Name: Jacqueline Salim
*  CSCI 473
*  Assignment 4
*/

/*drop/delete all of the tables/views you will be creating below*/

drop table if exists Event;
drop table if exists Artist;
drop table if exists Band;
drop table if exists Agent;
drop table if exists EventManager;
drop table if exists Vendor;

/*create a table Agent with an agent id, first name, middle initial, last name, complete address, 
and contact information (email, office phone number and cell phone number), agent type (“for artist”, “for band”, and “others”)
Agent id should be an auto-increment primary key.*/

CREATE TABLE Agent
(AgentId int auto_increment PRIMARY KEY,
FirstName CHAR(25),
MiddleInit CHAR(1),
LastName CHAR(25),
Street CHAR(50),
City CHAR(20),
State CHAR(2),
Zip CHAR(10),
Email CHAR(30),
OfficeNum CHAR(12),
CellNum CHAR(10),
Type CHAR(10));

/*put at least 5 records in this table.*/

INSERT INTO Agent (FirstName,MiddleInit,LastName,Street,City,State,Zip,Email,OfficeNum,CellNum,Type) VALUES
('Bruce','M','Johnson','123 N Driver Lane','Dekalb','IL','60115','brucemj@gmail.com','8157531000','8152349483','for artist'),
('Anderson','T','Bill','1454 W Blue Drive','Peoria','IL','61615','andersontb@gmail.com','3098286745','3097650387','for artist'),
('Blake','J','Lee','2311 N Ridge Way','San Francisco','CA','94110','blakejl@gmail.com','8671235098','8769876543','for band'),
('Elena','P','Jones','300 E Pastor Court','Pittsburgh','PA','15106','elenapj@gmail.com','8896541324','0090000009','others'),
('Feenstra','Q','Daniels','111 S That Lane','Dekalb','IL','60115','feestraqd@gmail.com','9998887777','8152341223','for band'),
('Sunny','','Kim','544 W Hollywood Boulevard','Hollywood','CA','77630','sunnykim@gmail.com','9384387767','7230976493','for band');

/*create a table called Event Manager with an event manager id (auto-increment primary key), and their name*/

CREATE TABLE EventManager
(EventManagerId int auto_increment PRIMARY KEY,
FirstName CHAR(20),
LastName CHAR(20));

INSERT INTO EventManager (FirstName, LastName) VALUES
('Jamie', 'Ferguson'),
('Jose', 'Gomez'),
('Heesun', 'Lee'),
('Tracy', 'O\'Connor');

/*create a table called Band with a band id (auto-increment primary key), band members, band name, band concert rate per event, special notes,
associated agent, leader contact info */

CREATE TABLE Band
(BandId int auto_increment PRIMARY KEY,
BandName CHAR(20),
RatePerEvent double,
Notes TEXT,
CellNum CHAR(10),
Leader CHAR(41),
Member1 CHAR(41),
Member2 CHAR(41),
Member3 CHAR(41),
Member4 CHAR(41),
Member5 CHAR(41),
MemberCount int,
AgentId int,
foreign key (AgentId) references Agent(AgentId));

/*put at least 5 records in this table, with at least two pets owned by the same owner*/

INSERT INTO Band (BandName, RatePerEvent, Notes, CellNum, Leader, Member1, Member2, Member3, Member4, Member5, MemberCount, AgentId) VALUES
('DNCE',200.00, 'Joe Jonas ayyyy','8653479283','Joe Jonas','Jack Lawless','Cole Whittle','JinJoo Lee','','', 5, 3),
('Queen',3000.00, 'rest in peace','1118675309','Freddie Mercury','Brian May','Roger Taylor','John Deacon','','', 5, 5),
('Day6',2000.00, 'One of the top kpop boy bands around these here parts','7653840926','Sungjin','Jae','Young K','Wonpil','Dowoon','', 6, 6);

/*create a table called Artist with an artist id (auto-increment primary key), first name, middle initial, last name, gender, address, contact info, 
concert rate per event, agent foreign key */

CREATE TABLE Artist
(ArtistId int auto_increment PRIMARY KEY,
FirstName CHAR(20),
MiddleInit CHAR(1),
LastName CHAR(20),
Gender CHAR(1),
Street CHAR(50),
City CHAR(20),
State CHAR(2),
Zip CHAR(10),
Email CHAR(30),
CellNum CHAR(10),
RatePerEvent double,
AgentId int,
foreign key (AgentId) references Agent(AgentId));

/*6. put at least 5 records in this table, with at least two pets owned by the same owner*/

INSERT INTO Artist (FirstName, MiddleInit, LastName, Gender, Street, City, State, Zip, Email, CellNum, RatePerEvent, AgentId) VALUES
('Cherilyn','','Sarkisian','F','123 N Hollywood Blvd','Hollywood', 'CA','90046','cher@gmail.com','6785849485',2000.00, 1),
('Beyoncé','Giselle','Knowles-Carter','F','100 W Hollywood Blvd','Hollywood', 'CA','90046','beyonce@gmail.com','6254739483',9999.99, 2),
('Ji-yong','','Kwon','M','465 E Colombus Avenue','New York', 'NY','10025','gdragon@gmail.com','9177084253',6000.00, 4),
('Ariana','','Grande','F','123 W Colorodo Drive','Colorodo', 'CO','23425','arigrande@gmail.com','2349084626',9090.00, 3);

/*create a table called Vendor with a vendor id (auto-increment primary key), business name, address, 
a vendor type (concert hall, equipment, setup, lighting, sound, cleanup, security, foods, operating, advertisement, and others), representative name,
representative contact information (phone number and email address)*/

CREATE TABLE Vendor
(VendorId int auto_increment PRIMARY KEY,
BusinessName CHAR(50),
Street CHAR(50),
City CHAR(20),
State CHAR(2),
Zip CHAR(10),
Type CHAR(15),
RepFirstName CHAR(25),
RepLastName CHAR(25),
RepEmail CHAR(40),
RepCellNum CHAR(10));

/*6. put at least 5 records in this table, with at least two pets owned by the same owner*/

INSERT INTO Vendor (BusinessName, Street, City, State, Zip, Type, RepFirstName, RepLastName, RepEmail, RepCellNum) VALUES
('RLI Corp', '9025 N Lindbergh Drive', 'Peoria', 'IL', '61614', 'others', 'Matt', 'Smith', 'mattsmith@rlicorp.com', '3097670987'),
('Rubber Ducky Cleaning Services', '1234 W This Way', 'Chicago', 'IL', '60007', 'cleaning', 'Tristan', 'Grove', 'tgrove23@rdcs.com', '3129852765'),
('Chipotle', '1401 Wynkoop St. Ste. 500', 'Denver', 'CO', '80202', 'food', 'Christopher', 'Robin', 'christopherrobin@chipotle.com', '3039672345');

/*create a table called Event with a event id (auto-increment primary key), the complete location (street, city, state, zip code) of the event, 
the date, start-time, status (created, approved, advertised, sold out (reached maximum capacity), cancelled or completed), 
seating capacity, special notes, event manager, event manager ID foreign key, and artist/band id (which is a foreign key into the owner table), 
and vendor foreign key.*/

CREATE TABLE Event
(EventId int auto_increment PRIMARY KEY,
EventName CHAR(50),
Street CHAR(50),
City CHAR(20),
State CHAR(2),
Zip CHAR(10),
Date DATE,
StartTime TIME,
Status CHAR(10),
SeatingCapacity int,
Notes TEXT,
NumTicketsSold int,
Singer CHAR(53),
PerformerType CHAR(6),
PerformerId int,
EventManagerId int,
VendorId int,
foreign key (EventManagerId) references EventManager(EventManagerId),
foreign key (VendorId) references Vendor(VendorId));


/*put at least 5 records in this table, with at least two pets owned by the same owner*/

INSERT INTO Event (EventName,Street,City,State,Zip,Date,StartTime,Status,SeatingCapacity,Notes,NumTicketsSold,Singer,PerformerType,PerformerId,EventManagerId,VendorId) VALUES
('Cake by the House Cafe','123 N Who Lane','Madison','WI','60115','2019-12-15','12:00:00','created',50,'House Cafe',0,'DNCE','Band',1,1,1),
('Ho Ho Hooville','231 N Pole Court','North Pole','AK','90667','2018-12-15','20:30:00','sold out',250,'Holiday House Party',250,'Ariana Grande','Artist',4,2,2),
('Classy Babes Only','5398 W Something Else Drive','New York','NY','72713','2019-04-09','06:45:00','created',20,'Intimate Early Risers tea party',3,'Queen','Band',2,3,3),
('That Boy','7765 E Oof Street','New York','NY','72713','2019-12-26','20:00:00','created',2000,'The boys are back in town',1349,'BTS','Band',3,3,3);


