CREATE TABLE fusers (
user_id INT(6) AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR (15) NOT NULL,
last_name VARCHAR (20) NOT NULL,
username VARCHAR (25) NOT NULL,
email VARCHAR (25) NOT NULL,
password VARCHAR (50) NOT NULL
)

CREATE TABLE parks (
user_id INT(6) AUTO_INCREMENT PRIMARY KEY,
park_name VARCHAR (15) NOT NULL,
state VARCHAR (20) NOT NULL,
relyr VARCHAR (25) NOT NULL,
url VARCHAR (65) NOT NULL,
area longtext NOT NULL,
blurb longtext NOT NULL,
details longtext NOT NULL
)
