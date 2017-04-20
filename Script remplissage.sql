INSERT INTO Users (id_users, first_name, name, formation, premium_status, email , password)
 VALUES
	('','Julien', 'REGINSTER','A2', '1', 'julien.reginster@viacesi.fr', '1234julien'),
	('','Josselin', 'KAPFER','A2', '1', 'josselin.kapfer@viacesi.fr', '1234corentin'),
	('','Corentin', 'BENOIST','A2', '1', 'corentin.benoist@viacesi.fr', '1234josselin'),
	('','Zakari', 'HAMSIOU', 'A2', '1', 'zakari.hamsiou@viacesi.fr', '1234zakari'),
	('','Jean', 'VALJEAN','QSE', '1', 'jean.valjean@viacesi.fr', '1234jean');


INSERT INTO Propos_Activity (id_propos, activity_proposed, description_text, id_users)
 VALUES
	('','PAINTBALL', 'because it’s awesome!!!!','2'),
	('','Rallye des bars', 'Its Drinking time !!!','1'),
	('','Cinéma', 'Fast & Furious 8 or Power Rangers','4'),
	('','Drinking like a mad men', 'At Hendrix PUB :) :) :)','1'),
	('','Au Pavillon', 'I feel it coming <3<3<3<3 ','3');

INSERT INTO Event_BDE (id_event, activity_name, detail_text, event_date1, event_date2, vote1, vote2)
 VALUES
	('', 'CINEMA - FAST & FURIOUS 8', 'the movie where Vin Diesel a.k.a Dominic Toretto finally died damn... Spoilers Alert', '2017-04-21 14:00:00', '2017-05-04 16:00:00', '0', '0'),
	('', 'RALLYE DES BARS - Bourgogne', 'Au Petit Barcelone/ Hendrix PUB -> Rue de Bourgogne because Julien worths it', '2017-04-21 19:00:00', '2017-04-28 21:00:00', '0', '0') ;

INSERT INTO Picture (id_picture, picture, uploading_date, id_event)
 VALUES
	('', 'file:///C:\Users\Zakari-Hamsiou\Desktop\avatar\Fast 8.jpg', '04-05-2017', '1');

INSERT INTO Commentaries (id_commentary, comment_text, comment_date, id_users, id_picture)
 VALUES
	('', 'OMG did you go watch this crap… ?!', '2017-05-04', '1','1'),
	('', 'Seriously, julien, can you shut up ?', '2017-05-04', '2','1'),
	('', 'I agree with him', '2017-05-04', '3','1'),
	('', 'Great movie !', '2017-05-04', '4','1');

INSERT INTO Like_Button (like_but, id_picture, id_users)
	VALUES
	('0','1','1'),
	('1','1','2'),
	('1','1','3'),
	('1','1','4'),
	('0','1','5');	

INSERT INTO Store (id_store, product_name, price, notice, product_picture, quantity, clothes, size)
	VALUES
	('','Thermos EINSENBERG','25', 'Thermostat to warm cold & bad mornings !', 'C:\Users\Zakari-Hamsiou\Desktop\avatar\Thermos.jpg', '150', '0', ''), 
	('','T-Shirt 404 error Beer','15', 'a official T-Shirt for programming code and beer addict !', 'C:\Users\Zakari-Hamsiou\Desktop\avatar\404 shirt.jpg', '75', '1', 'ALL SIZE');

INSERT INTO Orders (id_orders, total_price, payment_status, delivery_status, date_orders, id_users)
	VALUES
	('','115','Payment in process ...', 'Delivered 12-05-2017', '2017-04-24', '3');

INSERT INTO Orders_Content (amount, id_orders, id_store)
	VALUES
	('4','1','1'),
	('1','1','2');
