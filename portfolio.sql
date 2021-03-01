Drop database if exists portfolio;
Create database portfolio;
Use portfolio;

Create table user (
	id_u int(11) not null auto_increment,
	pseudo varchar(10),
	mdp varchar(255),
	lvl int not null default 0,
	primary key (id_u)
) ENGINE=InnoDB;

Insert into user values
(1, "numa7", "107d348bff437c999a9ff192adcb78cb03b8ddc6", 1);
-- 107d348bff437c999a9ff192adcb78cb03b8ddc6 -> Azerty123

Create table categorie (
	id_cat int(11) not null auto_increment,
	libelle varchar(50),
	primary key (id_cat)
) ENGINE=InnoDB;

Create table projets (
	id_p int(11) not null auto_increment,
	titre varchar(50),
	description text,
	lien_local varchar(255),
	lien_git varchar(255),
	primary key (id_p)
) ENGINE=InnoDB;

Create table images (
	id_img int(11) not null auto_increment,
	lien varchar(255),
	primary key (id_img)
) ENGINE=InnoDB;

Create table competences (
	id_comp int(11) not null auto_increment,
	libelle varchar(50),
	primary key (id_comp)
) ENGINE=InnoDB;
