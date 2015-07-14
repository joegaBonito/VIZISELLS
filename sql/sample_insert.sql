USE vizisells;
DELETE FROM vz_post_img;
DELETE FROM vz_post_merchandise;
DELETE FROM vz_user_post_relation;
DELETE FROM vz_user;

ALTER TABLE vz_user AUTO_INCREMENT = 100000;
insert into vz_user (user_password,email,user_name,user_flag,account_type,address,city_id,state_id,country_id,zip_id) VALUES('U2FsdGVkX19wBV2MxHM4h/T9AArmzBp+Rz874ipTSqo=','lucy.cao1989@gmail.com','Lucy',111,1,'Castle Point on Hudson',112190,35,1,122892);
insert into vz_user (user_password,email,user_name,user_flag,account_type,address,city_id,state_id,country_id,zip_id) VALUES('U2FsdGVkX18EPRX1vR9RWK7D325c3FU1vFtz2gD5ie8=','joejung5678@gmail.com','Joe',111,1,'863 W Jericho Tpke',124761,37,1,125430);
insert into vz_user (user_password,email,user_name,user_flag,account_type,address,city_id,state_id,country_id,zip_id) VALUES('U2FsdGVkX1/6O1Qk3WXip7XaCPFLYNNsCs1aAwr2KqM=','ammisme123@gmail.com','Young',110,1,'204 5th St',113274,35,1,122887);
insert into vz_user (user_password,email,user_name,user_flag,account_type,address,city_id,state_id,country_id,zip_id) VALUES('U2FsdGVkX1++fOl79U8hVQ9PhBhNloNQ','cl839@cornell.edu','Candy',101,1,'13558 Lefferts Blvd',125010,37,1,125362);
insert into vz_user (user_password,email,user_name,user_flag,account_type,address,city_id,state_id,country_id,zip_id) VALUES('U2FsdGVkX182Wf+S87sFr3zCmAhjtatsEBgJQj5X1eU=','XuQing.work@gmail.com','Qing',111,1,'71 E 116th St',118847,37,1,125114);




ALTER TABLE vz_user_post_relation AUTO_INcREMENT = 10000000;

insert into vz_user_post_relation (category_id,user_id) values (11,100000);
insert into vz_user_post_relation (category_id,user_id) values (11,100001);
insert into vz_user_post_relation (category_id,user_id) values (11,100002);
insert into vz_user_post_relation (category_id,user_id) values (11,100003);
insert into vz_user_post_relation (category_id,user_id) values (11,100004);




INSERT INTO vz_post_img VALUES (10000000,'../pic/Promotional-Umbrella.jpg');
INSERT INTO vz_post_img VALUES (10000000,'../pic/XL_Mc_Umbrella_open.jpg');
INSERT INTO vz_post_img VALUES (10000000,'../pic/GolfUmbrella.jpg');
INSERT INTO vz_post_img VALUES (10000001,'../pic/408575-scroogled-merchandise.jpg');
INSERT INTO vz_post_img VALUES (10000002,'../pic/Cedar-Rapids-Merchandise.jpg');
INSERT INTO vz_post_img VALUES (10000003,'../pic/GM-Merch-group.jpg');
INSERT INTO vz_post_img VALUES (10000004,'../pic/sharknado_pop.jpg');




INSERT INTO vz_post_merchandise VALUES
(10000000,1,100000,now(),now(),ADDTIME(post_time, '30 0:0:0'),'RainStoppers Auto Open Windbuster Sport Umbrella','Auto Open; Wind Buster (double canopy); Wind Buster (double canopy);Foam Rubber Handle; 190T Pongee Fabric; Closes to 31.5"',
'Shipping Weight: 5 pounds (View shipping rates and policies)
Domestic Shipping: Item can be shipped within U.S.
International Shipping: This item is not eligible for international shipping. Learn More
Origin: China
ASIN: B00DR69O0G
Item model number: W016B-P
Average Customer Review: 4.5 out of 5 stars  See all reviews (111 customer reviews)
Amazon Best Sellers Rank: #126 in Sports & Outdoors (See Top 100 in Sports & Outdoors)','../img/cup.jpg','Castle Point on Hudson',112190,35,1,122892);

INSERT INTO vz_post_merchandise VALUES
(10000001,1,100001,now(),now(),ADDTIME(post_time, '30 0:0:0'),
'Ipow Magic Porcelain Ceramic Large Office Speak Writing Message/memo Postcard Milk Tea Soup Coffee Mug Cup',
'Tall, Sturdy and Larger 15 oz mug is well made and felt solid in your hands,enough for a real cup of, well, tea or coffee.',
'Postcard coffee mug can be used for home and office. 
You can write any kind word for your family at any time when you want. 
You can write any meeting time or another that you are in meeting. 
You can write different kind word everyday everytime. 
Because Ipow have matched black cloth to scrub it with water,Easy to wash. NOTE 
1. Do not expose under the sunshine for long time. 
2. Do not scrape on the printing with sharp tools. 
3. Easy to wash. 
5. Do not scald yourself.' ,
'../img/knife.jpg','863 W Jericho Tpke',124761,37,1,125430);


INSERT INTO vz_post_merchandise VALUES
(10000002,1,100002,now(),now(),ADDTIME(post_time, '30 0:0:0'),
'Champion Men\'s Full Zip Eco Fleece Hoodie Jacket',
'80% Cotton, 20% Polyester. Oxford Body: 9.3Oz, 75% Cotton, 25% Polyester. Granite Heather: 9.3Oz, 52% Cotton, 48% Polyester. Solid Trim: 98% Cotton, 2% Spandex,Oxford Trim: 89% Cotton, 10% Polyester, 1% Spandex,Granite Heather',
'Champion Eco Fleece Full Zip Hoodie is made of a super soft recycled fiber-This fleece Hoodie is a winning combination
ASIN: B005FOCNKQ
Product Dimensions: 13 x 8 x 1 inches; 1.5 pounds
Shipping Weight: 1.5 pounds (View shipping rates and policies)
Shipping: This item is also available for shipping to select countries outside the U.S.
Origin: El Salvador
Item model number: S2468',
'../img/Stationery.png','204 5th St',113274,35,1,122887);


INSERT INTO vz_post_merchandise VALUES
(10000003,1,100003,now(),now(),ADDTIME(post_time, '30 0:0:0'),
'Wild Republic Polybag Sharks',
'This set comes in an 8 x 12 inch bag. Stimulates Creativity.
Set includes Great White Shark, Tiger Shark, Hammerhead, and more.',
'Wild Republic Polybag Shark
Wild Republic Polybag Shark includes great white shark, tiger shark, hammerhead and more. These sharks are made with very high quality PVC plastic.


Why You\'ll Love It: These wonderful toys are ideally sized for little hands. 

Age: 3 years and up

Features
Very durable
Highly detailed
Consists of 6 vivid and colorful sharks
Meets EN71 European Safety Standards


Recommended Ages:3 ¨C 5',
'../img/toy.png','13558 Lefferts Blvd',125010,37,1,125362);

INSERT INTO vz_post_merchandise VALUES
(10000004,1,100004,now(),now(),ADDTIME(post_time, '30 0:0:0'),
'Singer Vintage Sewing Basket with Sewing Kit Accessories',
'8" sewing scissors, 10 asst hand ndles, 100 dressmaker pins, 10 mini spools of thread, needle threader, pin cushion, seam ripper, 60" measure & thimble',
'Product Dimensions: 10.5 x 8 x 6 inches ; 1.9 pounds
Shipping Weight: 2 pounds (View shipping rates and policies)
Domestic Shipping: Item can be shipped within U.S.
International Shipping: This item can be shipped to select countries outside of the U.S. Learn More
ASIN: B009MRLOWK
Item model number: 07281',
'../img/umbrella.png','71 E 116th St',118847,37,1,125114);
