
CREATE TABLE USERS (
 USERID           NUMERIC(4) NOT NULL,
 USERNAME         CHAR(16),
 PASSWORD         CHAR(16),
 FULLNAME         CHAR(60),
 EMAIL            CHAR(40),
 CONSTRAINT USERS_PRIMARY_KEY PRIMARY KEY (USERID));
 
INSERT INTO USERS VALUES (0001, 'vagelis.gougou', 'passwordge', 'Evangelos Gkougkoutoudis', 'vagelis.gougou@gmail.com');
INSERT INTO USERS VALUES (0002, 'chkounou', 'passwordxck', 'Xeni-Christina Kounoukla', 'chkounou@gmail.com');
INSERT INTO USERS VALUES (0003, 'andreasrigos', 'passwordra', 'Andreas Rigopoulos', 'andreasrigos@yahoo.gr');
INSERT INTO USERS VALUES (0004, 'ch.theod', 'passwordtc', 'Christos Theodoridis', 'ch.theod@hotmail.com');

 CREATE TABLE PLACE (
 PID            NUMERIC(4) NOT NULL,
 NAME           CHAR(100),
 DESCRIPTION    LONGTEXT,
 TYPE           CHAR(20),
 CONSTRAINT PLACE_PRIMARY_KEY PRIMARY KEY (PID));
 
 CREATE TABLE LOCATION (
 LID             NUMERIC(4) NOT NULL,
 PID             NUMERIC(4),
 LATITUDE        DOUBLE,
 LONGITUDE       DOUBLE,
 CONSTRAINT LOCATION_PRIMARY_KEY PRIMARY KEY (LID),
 CONSTRAINT LOCATION_FOREIGN_KEY FOREIGN KEY (PID) REFERENCES PLACE (PID)
 ON DELETE CASCADE
 ON UPDATE CASCADE);
 
 CREATE TABLE RATING (
 RID             NUMERIC(4) NOT NULL,
 PID             NUMERIC(4),
 STARS           INT(1),
 CONSTRAINT RATING_PRIMARY_KEY PRIMARY KEY (RID),
 CONSTRAINT RATING_FOREIGN_KEY FOREIGN KEY (PID) REFERENCES PLACE (PID)
 ON DELETE CASCADE
 ON UPDATE CASCADE);
 
 CREATE TABLE PICTURE (
 PICID            NUMERIC(4) NOT NULL,
 PLID             NUMERIC(4),
 LINK             CHAR(200),
 CONSTRAINT PICTURE_PRIMARY_KEY PRIMARY KEY (PICID),
 CONSTRAINT PICTURE_FOREIGN_KEY FOREIGN KEY (PLID) REFERENCES PLACE (PID)
 ON DELETE CASCADE
 ON UPDATE CASCADE);
 
 INSERT INTO PLACE VALUES (0001, 'Capsis Hotel Thessaloniki', '4-star hotel with 2 restaurants, near Church of Panagia Chalkeon', 'Hotel');
 INSERT INTO LOCATION VALUES (0001, 0001, 40.642187, 22.932285);
 INSERT INTO RATING VALUES (0001, 0001, 4);
 INSERT INTO PICTURE VALUES (0001, 0001, 'http://www.fhotels.net/Admin//PHOTOS/Hotels/1512/1512_1_18.jpg');
 
 INSERT INTO PLACE VALUES (0002, 'Makedonia Palace', 'Makedonia Palace. One of the most genuine parts of Thessaloniki, and a city landmark.
 Fresh and warm in its welcoming, it offers a complete series of premium accommodation services at its 283 rooms and suites.', 'Hotel');
 INSERT INTO LOCATION VALUES (0002, 0002, 40.6156264, 22.952676);
 INSERT INTO RATING VALUES (0002, 0002, 4);
 INSERT INTO PICTURE VALUES (0002, 0002, 'http://greece.greekreporter.com/files/MAKEDONIA-PALACE1.jpg');
 
 INSERT INTO PLACE VALUES (0003, 'University General Hospital of Thessaloniki AHEPA', 'The AHEPA Univesrity General Hospital of Thessaloniki is considered
 one of the biggest hospitals in Greece. Covers 680 beds and all the spectrum of medical and surgical specialties of medicine as well as the psychiatric sector.', 'Hospital');
 INSERT INTO LOCATION VALUES (0003, 0003, 40.629759, 22.959987);
 INSERT INTO RATING VALUES (0003, 0003, 4);
 INSERT INTO PICTURE VALUES (0003, 0003, 'https://pbs.twimg.com/profile_images/2279974433/3.jpg');
 
 INSERT INTO PLACE VALUES (0004, 'Ippokrateio General Hospital of Thessaloniki', '', 'Hospital');
 INSERT INTO LOCATION VALUES (0004, 0004, 40.611484,22.961733);
 INSERT INTO RATING VALUES (0004, 0004, 4);
 INSERT INTO PICTURE VALUES (0004, 0004, 'http://www.makthes.gr/filestore/modules/news/5/5/55912/1h.jpg');
 
 INSERT INTO PLACE VALUES (0005, "White Tower of Thessaloniki', 'The White Tower of Thessaloniki, is a monument 
 and museum on the waterfront of the city of Thessaloniki, capital of the region of Macedonia in northern Greece. 
 The present tower replaced an old Byzantine fortification which was mentioned around the 12th century and reconstructed 
 by the Ottomans to fortify the city's harbour; it became a notorious prison and scene of mass executions during the period of Ottoman rule.
 It was substantially remodeled and its exterior was whitewashed after Greece gained control of the city in 1912. 
 It has been adopted as the symbol of the city.", 'Sight');
 INSERT INTO LOCATION VALUES (0005, 0005, 40.626369, 22.948428);
 INSERT INTO RATING VALUES (0005, 0005, 5);
 INSERT INTO PICTURE VALUES (0005, 0005, 'http://www.emiratesgreeks.com/uploads/images//h1/thessaloniki-white-tower.jpg');
 
 INSERT INTO PLACE VALUES (0006, 'Hagia Sophia', 'The Hagia Sophia (Greek: Ἁγία Σοφία, Holy Wisdom) in Thessaloniki, Greece, is one of the oldest churches in that city still standing today.
 It is one of several monuments in Thessaloniki included as a World Heritage Site on the UNESCO list.', 'Sight');
 INSERT INTO LOCATION VALUES (0006, 0006, 40.632844, 22.947094);
 INSERT INTO RATING VALUES (0006, 0006, 5);
 INSERT INTO PICTURE VALUES (0006, 0006, 'http://www.magazino.com/thessaloniki/agiasofia.jpg');
 
 INSERT INTO PLACE VALUES (0007, 'Archaeological Museum of Thessaloniki', 'The Archaeological Museum of Thessaloniki is a museum in Thessaloniki, Central Macedonia, Greece.
 It holds and interprets artifacts from the Archaic, Classical, Hellenistic and Roman periods,
 mostly from the city of Thessaloniki but also from the region of Macedonia in general.', 'Museum');
 INSERT INTO LOCATION VALUES (0007, 0007, 40.6251, 22.9538);
 INSERT INTO RATING VALUES (0007, 0007, 3);
 INSERT INTO PICTURE VALUES (0007, 0007, 'http://philon.cheng.auth.gr/files/thessaloniki/yenicami.jpg');
 
 INSERT INTO PLACE VALUES (0008, 'War Museum of Thessaloniki', 'The War Museum of Thessaloniki is a military museum in Thessaloniki, Central Macedonia, Greece.
 Thessaloniki War Museum opened its doors to the public in October 2000.
 It is housed in the building designed by architect Vitaliano Posseli and erected between 1900 and 1902.', 'Museum');
 INSERT INTO LOCATION VALUES (0008, 0008, 40.6243, 22.9596);
 INSERT INTO RATING VALUES (0008, 0008, 5);
 INSERT INTO PICTURE VALUES (0008, 0008, 'http://media-cdn.tripadvisor.com/media/photo-s/05/54/df/c6/caption.jpg');
 
 INSERT INTO PLACE VALUES (0009, 'ALAKIOZIDIS RAFAIL', 'Venizelou Eleftheriou 38 Thessaloniki, P.C. 54624
Municipality of Thessaloníkis, Prefecture of Thessaloníkis
Tel.: +302310257769
Fax: +302310257769', 'Pharmacy');
 INSERT INTO LOCATION VALUES (0009, 0009, 40.636227, 22.941308);
 INSERT INTO RATING VALUES (0009, 0009, 3);
 INSERT INTO PICTURE VALUES (0009, 0009, 'http://tinyurl.com/o4bzfxe');

 INSERT INTO PLACE VALUES (0010, 'MAVROUDIS TH. & SIA O.E. - WWW.CAREPOINT.GR ', ' Tsimiski 59, 546 23 Thessaloniki Thessaloniki. 
 Phone: +30 2310220076', 'Pharmacy');
 INSERT INTO LOCATION VALUES (0010, 0010, 40.6320132, 22.9441);
 INSERT INTO RATING VALUES (0010, 0010, 3);
 INSERT INTO PICTURE VALUES (0010, 0010, 'http://www.carepoint.gr/images/stories/logo.jpg');
 
 INSERT INTO PLACE VALUES (0011, 'EUROCHANGE HELLAS S.A.', 'Plateia Aristotelous 9 Thessaloniki, P.C. 54624
Municipality of Thessalonikis, Prefecture of Thessalonikis
Tel.: +302310265969', 'Money-Exchange');
 INSERT INTO LOCATION VALUES (0011, 0011,  40.633107, 22.941126);
 INSERT INTO RATING VALUES (0011, 0011, 4);
 INSERT INTO PICTURE VALUES (0011, 0011, 'http://www.xo.gr/files/temp/4EF3B137874AC055F22F20857D7D0D03.jpg');
 
 INSERT INTO PLACE VALUES (0012, 'EFG EUROBANK ERGASIAS AE', 'Lampraki Grigoriou 200, Thessaloniki', 'Bank-ATM');
 INSERT INTO LOCATION VALUES (0012, 0012, 40.612379, 22.982937);
 INSERT INTO RATING VALUES (0012, 0012, 4);
 INSERT INTO PICTURE VALUES (0012, 0012, 'http://brandbusters.net/wp-content/uploads/2014/09/eurobank.png');
 
 -- Les Zazous as a cafe-bar
 INSERT INTO PLACE VALUES (0013, 'Les Zazous', 'Themistokli Sofouli 118 Thessaloniki 55131', 'Cafe-Bar');
 INSERT INTO LOCATION VALUES (0013, 0013, 40.587763, 22.942945);
 INSERT INTO RATING VALUES (0013, 0013, 5);
 INSERT INTO PICTURE VALUES (0013, 0013, 'http://www.travelstyle.gr/portal/photos/restaurants/2454__DSC1802.jpg');
 
 -- Les Zazous as a restaurant 
 INSERT INTO PLACE VALUES (0014, 'Les Zazous', 'Themistokli Sofouli 118 Thessaloniki 55131', 'Restaurant');
 INSERT INTO LOCATION VALUES (0014, 0014, 40.587763, 22.942945);
 INSERT INTO RATING VALUES (0014, 0014, 4);
 INSERT INTO PICTURE VALUES (0014, 0014, 'http://arkteam.gr/ddoc-2448-03.jpg');
 
 INSERT INTO PLACE VALUES (0015, 'Ouzou Melathron', 'Karipi 21 Thessaloniki 546 24', 'Restaurant');
 INSERT INTO LOCATION VALUES (0015, 0015, 40.636621, 22.940647);
 INSERT INTO RATING VALUES (0015, 0015, 4);
 INSERT INTO PICTURE VALUES (0015, 0015, 'http://static.panoramio.com/photos/large/43486794.jpg');

 
 