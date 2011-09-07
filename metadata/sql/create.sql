use domain;

DROP TABLE IF EXISTS t_domain;
DROP TABLE IF EXISTS t_header;

CREATE TABLE t_domain(
	id int primary key auto_increment,
	domain varchar(128) not null unique,
	grade int default 0,
	image varchar(256) null,
	create_time TIMESTAMP default now()
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE t_header(
	id int primary key auto_increment,
	domain varchar(128) not null unique,
	keywords int default 0,
	description varchar(256) null,
	create_time TIMESTAMP default now()
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
