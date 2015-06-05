DROP DATABASE vizisells;
CREATE DATABASE vizisells;
USE vizisells;


create table vz_country(
country_id INT NOT NULL,
country_name VARCHAR(256),
PRIMARY KEY(country_id)
);

create table vz_state(
state_id INT NOT NULL,
state_abbr CHAR(10),
state_name VARCHAR(256),
country_id INT,
PRIMARY KEY(state_id),
FOREIGN KEY(country_id) REFERENCES vz_country(country_id)
);

create table vz_city(
city_id INT NOT NULL,
city_name VARCHAR(256),
state_id INT,
country_id INT,
PRIMARY KEY(city_id),
FOREIGN KEY(country_id) REFERENCES vz_country(country_id),
FOREIGN KEY(state_id) REFERENCES vz_state(state_id)
);

create table vz_zip(
zip_id INT NOT NULL,
zipcode VARCHAR(10),
city_id INT,
state_id INT,
country_id INT,
PRIMARY KEY(zip_id),
FOREIGN KEY(country_id) REFERENCES vz_country(country_id),
FOREIGN KEY(state_id) REFERENCES vz_state(state_id),
FOREIGN KEY(city_id) REFERENCES vz_city(city_id)
);

create table vz_user(
user_id INT NOT NULL,
user_password VARCHAR(512),
email VARCHAR(256),
user_name VARCHAR(128),
user_flag INT,
account_tpye INT,
address VARCHAR(512),
country_id INT,
state_id INT,
city_id INT,
zip_id INT,
PRIMARY KEY(user_id),
FOREIGN KEY(country_id) REFERENCES vz_country(country_id),
FOREIGN KEY(state_id) REFERENCES vz_state(state_id),
FOREIGN KEY(city_id) REFERENCES vz_city(city_id),
FOREIGN KEY(zip_id) REFERENCES vz_zip(zip_id)
);

create table vz_category(
category_id INT NOT NULL,
category_name VARCHAR(256),
post_table_name VARCHAR(256),
PRIMARY KEY(category_id)
);

create table vz_user_post_relation(
post_id INT NOT NULL,
category_id INT,
user_id INT,
PRIMARY KEY(post_id), 
FOREIGN KEY(category_id) REFERENCES vz_category(category_id),
FOREIGN KEY(user_id) REFERENCES vz_user(user_id)
);

create table vz_post_merchandise(
post_id INT,
post_flag INT,
auth_id INT,
post_time TIMESTAMP,
update_time TIMESTAMP,
expire_time TIMESTAMP,
post_title VARCHAR(512),
post_head VARCHAR(1024),
post_body TEXT,
post_thumb VARCHAR(512),
post_address VARCHAR(512),
country_id INT,
state_id INT,
city_id INT,
zip_id INT,
FOREIGN KEY(post_id) REFERENCES vz_user_post_relation(post_id),
FOREIGN KEY(auth_id) REFERENCES vz_user(user_id),
FOREIGN KEY(country_id) REFERENCES vz_country(country_id),
FOREIGN KEY(state_id) REFERENCES vz_state(state_id),
FOREIGN KEY(city_id) REFERENCES vz_city(city_id),
FOREIGN KEY(zip_id) REFERENCES vz_zip(zip_id)
);

create table vz_post_img(
post_id INT,
img_path VARCHAR(512),
FOREIGN KEY(post_id) REFERENCES vz_user_post_relation(post_id)
);





