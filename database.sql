CREATE TABLE USER (
 USERID           INT(4) NOT NULL AUTO_INCREMENT,
 USERNAME         CHAR(16) NOT NULL,
 PASSWORD         CHAR(16) NOT NULL,
 FULLNAME         CHAR(60) NOT NULL,
 EMAIL            CHAR(40) NOT NULL,
 CONSTRAINT USER_PRIMARY_KEY PRIMARY KEY (USERID));
 
 CREATE TABLE PLACE (
 PID            INT(4) NOT NULL AUTO_INCREMENT,
 NAME           CHAR(200) NOT NULL,
 DESCRIPTION    LONGTEXT,
 TYPE           CHAR(20) NOT NULL,
 CONSTRAINT PLACE_PRIMARY_KEY PRIMARY KEY (PID));
 
 CREATE TABLE LOCATION (
 LID             INT(4) NOT NULL AUTO_INCREMENT,
 PID             INT(4) NOT NULL UNIQUE,
 LATITUDE        FLOAT(10,6) NOT NULL,
 LONGITUDE       FLOAT(10,6) NOT NULL,
 CONSTRAINT LOCATION_PRIMARY_KEY PRIMARY KEY (LID),
 CONSTRAINT LOCATION_FOREIGN_KEY FOREIGN KEY (PID) REFERENCES PLACE (PID)
 ON DELETE CASCADE
 ON UPDATE CASCADE);
 
 CREATE TABLE RATING (
 RID             INT(4) NOT NULL AUTO_INCREMENT,
 PID             INT(4) NOT NULL UNIQUE,
 STARS           INT(1) NOT NULL,
 CONSTRAINT RATING_PRIMARY_KEY PRIMARY KEY (RID),
 CONSTRAINT RATING_FOREIGN_KEY FOREIGN KEY (PID) REFERENCES PLACE (PID)
 ON DELETE CASCADE
 ON UPDATE CASCADE);
 
 CREATE TABLE PICTURE (
 PICID            INT(4) NOT NULL AUTO_INCREMENT,
 PLID             INT(4) NOT NULL UNIQUE,
 LINK             CHAR(200) NOT NULL,
 CONSTRAINT PICTURE_PRIMARY_KEY PRIMARY KEY (PICID),
 CONSTRAINT PICTURE_FOREIGN_KEY FOREIGN KEY (PLID) REFERENCES PLACE (PID)
 ON DELETE CASCADE
 ON UPDATE CASCADE);
 
 -- Admins:
INSERT INTO USER VALUES (0001, 'vagelis.gougou', 'passwordge', 'Evangelos Gkougkoutoudis', 'vagelis.gougou@gmail.com');
INSERT INTO USER VALUES (0002, 'chkounou', 'passwordxck', 'Xeni-Christina Kounoukla', 'chkounou@gmail.com');
INSERT INTO USER VALUES (0003, 'andreasrigos', 'passwordra', 'Andreas Rigopoulos', 'andreasrigos@yahoo.gr');
INSERT INTO USER VALUES (0004, 'ch.theod', 'passwordtc', 'Christos Theodoridis', 'ch.theod@hotmail.com');

 -- Unofficial data for testing purposes only

 INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Capsis Hotel Thessaloniki', '4-star hotel with 2 restaurants, near Church of Panagia Chalkeon', 'Hotel');
 INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0001, 40.642187, 22.932285);
 INSERT INTO RATING (PID, STARS) VALUES (0001, 4);
 INSERT INTO PICTURE (PLID, LINK) VALUES (0001, 'http://www.fhotels.net/Admin//PHOTOS/Hotels/1512/1512_1_18.jpg');
 
 INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Makedonia Palace', 'Makedonia Palace. One of the most genuine parts of Thessaloniki, and a city landmark.
 Fresh and warm in its welcoming, it offers a complete series of premium accommodation services at its 283 rooms and suites.', 'Hotel');
 INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0002, 40.6156264, 22.952676);
 INSERT INTO RATING (PID, STARS) VALUES (0002, 4);
 INSERT INTO PICTURE (PLID, LINK) VALUES (0002, 'http://greece.greekreporter.com/files/MAKEDONIA-PALACE1.jpg');
 
 INSERT INTO PLACE(NAME, DESCRIPTION, TYPE) VALUES ('University General Hospital of Thessaloniki AHEPA', 'The AHEPA Univesrity General Hospital of Thessaloniki is considered
 one of the biggest hospitals in Greece. Covers 680 beds and all the spectrum of medical and surgical specialties of medicine as well as the psychiatric sector.', 'Hospital');
 INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0003, 40.629759, 22.959987);
 INSERT INTO RATING (PID, STARS) VALUES (0003, 4);
 INSERT INTO PICTURE (PLID, LINK) VALUES (0003, 'https://pbs.twimg.com/profile_images/2279974433/3.jpg');
 
 INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Ippokrateio General Hospital of Thessaloniki', '', 'Hospital');
 INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0004, 40.611484,22.961733);
 INSERT INTO RATING (PID, STARS) VALUES (0004, 4);
 INSERT INTO PICTURE (PLID, LINK) VALUES (0004, 'http://www.alpha965.gr/wp-content/uploads/2014/02/ippokrateio.jpg');
 
 INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ("White Tower of Thessaloniki", "It has been adopted as the symbol of the city.", 'Sight');
 INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0005, 40.626369, 22.948428);
 INSERT INTO RATING (PID, STARS) VALUES (0005, 5);
 INSERT INTO PICTURE (PLID, LINK) VALUES (0005, 'http://www.emiratesgreeks.com/uploads/images//h1/thessaloniki-white-tower.jpg');
 
 INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Hagia Sophia', 'The Hagia Sophia in Thessaloniki, Greece, is one of the oldest churches in that city still standing today.
 It is one of several monuments in Thessaloniki included as a World Heritage Site on the UNESCO list.', 'Sight');
 INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0006, 40.632844, 22.947094);
 INSERT INTO RATING (PID, STARS) VALUES (0006, 5);
 INSERT INTO PICTURE (PLID, LINK) VALUES (0006, 'http://www.magazino.com/thessaloniki/agiasofia.jpg');
 
 INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Archaeological Museum of Thessaloniki', 'The Archaeological Museum of Thessaloniki is a museum in Thessaloniki, Central Macedonia, Greece.
 It holds and interprets artifacts from the Archaic, Classical, Hellenistic and Roman periods,
 mostly from the city of Thessaloniki but also from the region of Macedonia in general.', 'Museum');
 INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0007, 40.625101, 22.953802);
 INSERT INTO RATING (PID, STARS) VALUES (0007, 3);
 INSERT INTO PICTURE (PLID, LINK) VALUES (0007, 'http://philon.cheng.auth.gr/files/thessaloniki/yenicami.jpg');
 
 INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('War Museum of Thessaloniki', 'The War Museum of Thessaloniki is a military museum in Thessaloniki, Central Macedonia, Greece.
 Thessaloniki War Museum opened its doors to the public in October 2000.
 It is housed in the building designed by architect Vitaliano Posseli and erected between 1900 and 1902.', 'Museum');
 INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0008, 40.624302, 22.959602);
 INSERT INTO RATING (PID, STARS) VALUES (0008, 5);
 INSERT INTO PICTURE (PLID, LINK) VALUES (0008, 'http://media-cdn.tripadvisor.com/media/photo-s/05/54/df/c6/caption.jpg');
 
 INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('ALAKIOZIDIS RAFAIL', 'Venizelou Eleftheriou 38 Thessaloniki, P.C. 54624
Tel.: +302310257769 Fax: +302310257769', 'Pharmacy');
 INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0009, 40.636227, 22.941308);
 INSERT INTO RATING (PID, STARS) VALUES (0009, 3);
 INSERT INTO PICTURE (PLID, LINK) VALUES (0009, 'http://tinyurl.com/o4bzfxe');

 INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('MAVROUDIS TH. & SIA O.E. - WWW.CAREPOINT.GR ', ' Tsimiski 59, 546 23 Thessaloniki Thessaloniki. 
 Phone: +30 2310220076', 'Pharmacy');
 INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0010, 40.6320132, 22.9441);
 INSERT INTO RATING (PID, STARS) VALUES (0010, 3);
 INSERT INTO PICTURE (PLID, LINK) VALUES (0010, 'http://www.carepoint.gr/images/stories/logo.jpg');
 
 INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('EUROCHANGE HELLAS S.A.', 'Plateia Aristotelous 9 Thessaloniki, P.C. 54624
Tel.: +302310265969', 'Money-Exchange');
 INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0011,  40.633107, 22.941126);
 INSERT INTO RATING (PID, STARS) VALUES (0011, 4);
 INSERT INTO PICTURE (PLID, LINK) VALUES (0011, 'http://www.xo.gr/files/temp/4EF3B137874AC055F22F20857D7D0D03.jpg');
 
 INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('EFG EUROBANK ERGASIAS AE', 'Lampraki Grigoriou 200, Thessaloniki', 'Bank-ATM');
 INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0012, 40.612379, 22.982937);
 INSERT INTO RATING (PID, STARS) VALUES (0012, 4);
 INSERT INTO PICTURE (PLID, LINK) VALUES (0012, 'http://brandbusters.net/wp-content/uploads/2014/09/eurobank.png');

 INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Les Zazous', 'Themistokli Sofouli 118 Thessaloniki 55131', 'Cafe-Bar');
 INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0013, 40.587763, 22.942945);
 INSERT INTO RATING (PID, STARS) VALUES (0013, 5);
 INSERT INTO PICTURE (PLID, LINK) VALUES (0013, 'http://www.travelstyle.gr/portal/photos/restaurants/2454__DSC1802.jpg');
 
 INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Ouzou Melathron', 'Karipi 21 Thessaloniki 546 24', 'Restaurant');
 INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0014, 40.636623, 22.940647);
 INSERT INTO RATING (PID, STARS) VALUES (0014, 4);
 INSERT INTO PICTURE (PLID, LINK) VALUES (0014, 'http://static.panoramio.com/photos/large/43486794.jpg');

 
 -- Official data gathered by Andreas Rigopoulos 
INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Holiday Inn ', '3-star hotel 8 Monastiriou Street, Thessaloniki', 'Hotel');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0015, 40.64145, 22.933556);
INSERT INTO RATING (PID, STARS) VALUES (0015, 3);
INSERT INTO PICTURE (PLID, LINK) VALUES (0015, 'http://www.destination360.com/europe/greece/thessaloniki/holiday-inn-thessaloniki.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('City Hotel', '4-star hotel 11 Komninon Street, Thessaloniki', 'Hotel');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0016, 40.633875, 22.940065);
INSERT INTO RATING (PID, STARS) VALUES (0016, 4);
INSERT INTO PICTURE (PLID, LINK) VALUES (0016, 'https://d1p98clqffzjxh.cloudfront.net/city-jsui/L51581.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Anticancer Hospital of Thessaloniki, Theagenio', 'Simionidi 2 Thessaloniki', 'Hospital');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0017, 40.617675, 22.960005);
INSERT INTO RATING (PID, STARS) VALUES (0017, 4);
INSERT INTO PICTURE (PLID, LINK) VALUES (0017, 'http://www.alpha965.gr/wp-content/uploads/2014/06/%CE%B8%CE%B5%CE%B1%CE%B3%CE%AD%CE%BD%CE%B5%CE%B9%CE%BF.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Hospital of Specific Infectious Diseases ', 'Grigoriou Labraki 13 Thessaloniki', 'Hospital');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0018, 40.621345, 22.963845);
INSERT INTO RATING (PID, STARS) VALUES (0018, 4);
INSERT INTO PICTURE (PLID, LINK) VALUES (0018, 'http://www.agelioforos.gr/files/Portalistas/Limodon%20nosokomeio%20Thessaloniki.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Museum of Byzantine Culture', 'The founding of the Museum of Byzantine Culture and its official opening in 1994 in Thessaloniki. 
The most Byzantine city of the modern Greek state, marks the end of a story that had begun long before, just after the city s liberation in 1912.', 'Museum');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0019, 40.623855, 22.955145);
INSERT INTO RATING (PID, STARS) VALUES (0019, 5);
INSERT INTO PICTURE (PLID, LINK) VALUES (0019, 'http://www.macedonian-heritage.gr/Museums/Museum_Pictures/Arx_Byz_Thessaloniknhs/Front_view.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Folklife and Ethnological Museum of Macedonia', 'The Folklife and Ethnological Museum of Macedonia explores and studies the traditional
culture of recent times in the region of northern Greece. It gathers, preserves, safeguards and records the material evidence of that past, making it available to the public for purposes
of study, instruction and amusement.', 'Museum');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0020, 40.640065, 22.944425);
INSERT INTO RATING (PID, STARS) VALUES (0020, 5);
INSERT INTO PICTURE (PLID, LINK) VALUES (0020, 'http://cdn4.vtourist.com/19/6351359-Folklife_and_Ethnological_Museum_of_Macedonia_Thessaloniki.jpg?version=2');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ("Kastra and the Byzantine Walls", "The Kastra (Castle), also called Ano Poli (Upper Town), contains important Byzantine churches and timber-framed, pastel-painted houses with overhanging 
upper storeys. Panoramic views of the city and gulf are had from the Byzantine Walls ' eastern edge, in the pyrgos (tower). The tower , recently renovated 
and opened to visitors, is a marvellously atmospheric structure. Ascend it for expansive views.", 'Sight');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0021, 40.642175, 22.949405);
INSERT INTO RATING (PID, STARS) VALUES (0021, 5);
INSERT INTO PICTURE (PLID, LINK) VALUES (0021, 'http://www.agelioforos.gr/files/ouzounidis/%CF%80%CE%BF%CF%81%CF%84%CE%B1%CF%81%CE%B1.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ("Roman Agora", "The Agora lies north of Plateia Aristotelous, on Plateia Dikastirion. In the 3rd century BC, Macedonians made it a commercial centre
and the Romans maintained this function. An English-language placard explains the site, which contains clustered shop walls and mosaic floor remnants. In summer, it hosts the city-sponsored Urban Picnic,
which livens up the ruins with free food and live music.", 'Sight');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0022, 40.637605, 22.945755);
INSERT INTO RATING (PID, STARS) VALUES (0022, 5);
INSERT INTO PICTURE (PLID, LINK) VALUES (0022, 'http://photos.wikimapia.org/p/00/03/29/41/86_big.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Kountourellis Theodoros', 'Odisseos 1 Thessaloniki', 'Pharmacy');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0023, 40.640415,  22.933785);
INSERT INTO RATING (PID, STARS) VALUES (0023, 3);
INSERT INTO PICTURE (PLID, LINK) VALUES (0023, 'http://www.grekomania.ru/images/catalog/1052/gallery/23305_Papakonstantinou-11.jpg');
 
INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Spiridon Tsiakiris & Sia O.E.', 'Megalou Alexandrou 28 Ampelokipoi Thessaloniki', 'Pharmacy');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0024, 40.654855, 22.923695);
INSERT INTO RATING (PID, STARS) VALUES (0024, 3);
INSERT INTO PICTURE (PLID, LINK) VALUES (0024, 'https://lh6.googleusercontent.com/-fA9vYgqqlJE/VNpiVKInNQI/AAAAAAAAABc/bJB96Jl9nQw/w350-h362/photo.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Ikaros Antalaktiria Sinalagmatos A.E.-WESTERN UNION', 'Lagada 1 Thessaloniki', 'Money-Exchange');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0025,  40.640845, 22.935235);
INSERT INTO RATING (PID, STARS) VALUES (0025, 4);
INSERT INTO PICTURE (PLID, LINK) VALUES (0025, 'http://www.technomag.co.zw/wp-content/uploads/2014/11/WESTERN_UNION_WORLDBRIDGE_YPIRESIES_PLIROMON_AE_fdb4c7d987d04eecb74c3c398c2252c6.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('G.P.K Antalaktiria Sinalagmatos - WESTERN UNION', 'Egnatias 1 Thessaloniki', 'Money-Exchange');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0026,  40.640485, 22.936925);
INSERT INTO RATING (PID, STARS) VALUES (0026, 4);
INSERT INTO PICTURE (PLID, LINK) VALUES (0026, 'http://www.vrisko.gr/logos/257046.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Ethniki Trapeza tis Ellados A.E.', 'Ionos Dragoumi 28 & Tsimiski 4 Thessaloniki', 'Bank-ATM');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0027, 40.635475, 22.938955);
INSERT INTO RATING (PID, STARS) VALUES (0027, 4);
INSERT INTO PICTURE (PLID, LINK) VALUES (0027, 'http://photos.wikimapia.org/p/00/00/37/30/57_big.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Hsbc Bank PLC', 'Mitropoleos 8Thessaloniki', 'Bank-ATM');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0028, 40.634705, 22.937725);
INSERT INTO RATING (PID, STARS) VALUES (0028, 4);
INSERT INTO PICTURE (PLID, LINK) VALUES (0028, 'http://lawanddisorder.org/wp-content/uploads/HSBC-BANK_IMG_0315.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Cafe Mera', 'Aggelaki 10 Thessaloniki, phone number. 2310-220038', 'Cafe-Bar');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0029, 40.629905, 22.953475);
INSERT INTO RATING (PID, STARS) VALUES (0029, 5);
INSERT INTO PICTURE (PLID, LINK) VALUES (0029, 'http://www.biscotto.gr/assets/media/PICTURES/vgainw_eksw/bars/483.JPG');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Mikro Londino', 'Filipou 9 Thessaloniki, phone number. 2310-221017', 'Cafe-Bar');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0030, 40.638975, 22.942485);
INSERT INTO RATING (PID, STARS) VALUES (0030, 5);
INSERT INTO PICTURE (PLID, LINK) VALUES (0030, 'http://www.biscotto.gr/assets/media/PICTURES_NEW/vgainw_eksw/cafe/36921.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Nea Diagonios', 'Plastira 89 Kalamaria Thessaloniki, phone number. 231-0029085', 'Restaurant');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0031, 40.573445, 22.951035);
INSERT INTO RATING (PID, STARS) VALUES (0031, 4);
INSERT INTO PICTURE (PLID, LINK) VALUES (0031, 'http://www.grekomania.ru/images/catalog/818/gallery/16077_Nea-Diagonios-Restaurant-16.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Frutti di Mare ', 'Komninon 20 Thessaloniki, phone number. 231-0239100', 'Restaurant');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0032, 40.634385, 22.940905);
INSERT INTO RATING (PID, STARS) VALUES (0032, 4);
INSERT INTO PICTURE (PLID, LINK) VALUES (0032, 'http://www.fruttidimare.gr/wp-content/uploads/2014/11/istoriko-kentro.jpg');

-- Official data gathered by Vaggelis Gkougkoutoudis 
INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Electra Palace ', '5-star hotel 9 Pl. Aristotelous Phone number:231 029 4000
ELECTRA PALACE HOTEL in Thessaloniki, having undergone a complete renovation recently, is now fully equipped according to the latest trends, needs and international specifications. It lives up to the philosophy of modern living and offers the visitor an ideal and unforgettable experience. The hotel was awarded the Silver Morpheus as a best city hotel (Philoxenia 2008)., Thessaloniki', 'Hotel');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0033, 40.633067, 22.941136);
INSERT INTO RATING (PID, STARS) VALUES (0033, 5);
INSERT INTO PICTURE (PLID, LINK) VALUES (0033, 'http://hotels.cdn-venere.com/hotels/1000000/20000/20000/19966/19966_60_b.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('The Met Hotel ', '5-star hotel 48, 26th Oktovriou Str Conveniently situated on the harbour of Thessaloniki, within easy reach of the city centre, THE MET HOTEL provides outstanding comfort and sophisticated amenities for business and leisure travellers., Thessaloniki', 'Hotel');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0034, 37.977636, 23.733536);
INSERT INTO RATING (PID, STARS) VALUES (0034, 5);
INSERT INTO PICTURE (PLID, LINK) VALUES (0034, 'http://www.symvoli.gr/conference/wmemc2012/uploads/images/met6.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('G. Papanikolaou General Hospital ', '  Eksoxi 57010 Tel: +302310/357602 Thessaloniki', 'Hospital');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0035, 40.631054, 23.045135);
INSERT INTO RATING (PID, STARS) VALUES (0035, 3);
INSERT INTO PICTURE (PLID, LINK) VALUES (0035, 'http://www.snf.org/media/3711334/01_Responsive.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Agios Dimitrios General Hospital ', ' Address: 2 Elenis Zografou Street  54634  Thessaloniki', 'Hospital');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0036, 37.934075, 23.729335);
INSERT INTO RATING (PID, STARS) VALUES (0036, 3);
INSERT INTO PICTURE (PLID, LINK) VALUES (0036, ' http://mw2.google.com/mw-panoramio/photos/medium/4117811.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Palace, Arch & Rotunda of Galerius ', ' The Arch of Galerius, known to the people of Thessaloniki as the Kamara (meaning arch). It was erected at the intersection of the Via Regia, the main road artery crossing the city from east to west, and the processional route which linked the palace to the Rotunda.', 'Sight');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0037, 40.632245, 22.951743);
INSERT INTO RATING (PID, STARS) VALUES (0037, 4);
INSERT INTO PICTURE (PLID, LINK) VALUES (0037, ' http://www.enjoythessaloniki.com/wp-content/uploads/2012/08/Arch%20of%20Galerius/Arch%20of%20Galerius1.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Jewish Mansions ', ' Every step you take in the Jewish Quarter brings you closer to discovering tangible remains of a dramatic chapter in Jewish history, especially of the period of its greatest grandeur: the time of the Second Temple. 
This period is richly commemorated at the Burnt House and the Herodian Mansions. ', 'Sight');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0038, 31.775315, 35.232265);
INSERT INTO RATING (PID, STARS) VALUES (0038, 4);
INSERT INTO PICTURE (PLID, LINK) VALUES (0038, 'http://www.thecityreview.com/ues/fifave/jewish.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Tiho Tiho ', ' It is a very cozy place where you can either go for a coffee or a drink, or you can go there to have lunch or even a late dinner. The food is delicious and the crowd is diverse. From teenage people to cool elders and from romantic couples to loud companies of students, everyone appreciates the huge diversity and the great quality the place offers.', 'Cafe-Bar');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0039, 40.642765, 22.955284);
INSERT INTO RATING (PID, STARS) VALUES (0039, 4);
INSERT INTO PICTURE (PLID, LINK) VALUES (0039, ' https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-xpf1/t31.0-8/c0.157.851.315/p851x315/458976_10151076912869623_1173436071_o.jpg ');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Kitchen Bar ', ' This place used to be a warehouse, which makes its appearance unique. The kitchen is located at the center of the resaturant, so you can see all the cooking going on! Its view of the city is really worth it, since you can see the sea front of the city as well as the White Tower! The food -although a bit pricey- is delicious and of big portions. ', 'Cafe-Bar');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0040, 37.955275, 23.760826);
INSERT INTO RATING (PID, STARS) VALUES (0040, 5);
INSERT INTO PICTURE (PLID, LINK) VALUES (0040, 'http://www.protothema.gr/files/1/2011/12/22/Kitchenbar.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Pulp ', ' One is for sure, you wont find so easily an other bar in town with such range of beers! Black, red or blonde? From what country? It is not so easy to choose? Just say what you would like to try and they will recommend you some of their beers! ', 'Cafe-Bar');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0041, 40.632094, 22.947976);
INSERT INTO RATING (PID, STARS) VALUES (0041, 4);
INSERT INTO PICTURE (PLID, LINK) VALUES (0041, 'https://www.likealocalguide.com/media/cache/87/70/87704768a1604c266938b0692ff4f5e0.jpg');

INSERT INTO PLACE (NAME, DESCRIPTION, TYPE) VALUES ('Mon Fere ', ' Almost everything in there is white: the chairs, the tables, the walls. The floor is like a chess board, with black and white tiles. The place has the style of a french bistro and it seems to have been missing from our town. The locals seem to love it, both for coffee during the day and drinks at night. Delicious pastry is also served! ', 'Cafe-Bar');
INSERT INTO LOCATION (PID, LATITUDE, LONGITUDE) VALUES (0042, 40.627946, 22.948777);
INSERT INTO RATING (PID, STARS) VALUES (0042, 3);
INSERT INTO PICTURE (PLID, LINK) VALUES (0042, 'http://4.bp.blogspot.com/-2GhtXky34FQ/TxIjgNduRmI/AAAAAAAAANg/vxEjvUuMG6w/s1600/Mon_Frere_001.jpg');

 
 