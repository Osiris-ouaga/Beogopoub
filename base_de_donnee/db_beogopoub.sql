
DROP DATABASE IF EXISTS db_beogopoub;
CREATE DATABASE IF NOT EXISTS db_beogopoub;
USE db_beogopoub;


CREATE TABLE PERSONNEL (
	ID int(4) AUTO_INCREMENT PRIMARY KEY,
	LOGIN VARCHAR(100) NOT NULL,
	PWD VARCHAR(255) NOT NULL,
    NOM VARCHAR(50) NOT NULL,
	PRENOM VARCHAR(50) NOT NULL,
    EMAIL VARCHAR(255),
	CIVILITE VARCHAR(1),
    CONTACT int(50),
    RESIDENCE VARCHAR(50),
	ROLE VARCHAR(50),
    PHOTO VARCHAR(50),
	ETAT INT(1)); 
-- 	ETAT = 0 désactivé
-- 	ETAT = 1 activé

CREATE TABLE partner (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom_abonne VARCHAR(50),
  prenom_abonne VARCHAR(50),
  nom_entreprise VARCHAR(100),
  contacts VARCHAR(100),
  numero_poubelle VARCHAR(50),
  localite VARCHAR(100)
);

		
CREATE TABLE POUBELLE (
	ID int(4) AUTO_INCREMENT PRIMARY KEY,
    NUMERO VARCHAR(30),
    NIVEAU_REMPLISSAGE_COMP1 VARCHAR(50),
    NIVEAU_REMPLISSAGE_COMP2 VARCHAR(50),
    POIDS_COMP1 VARCHAR(50),
    POIDS_COMP2 VARCHAR(50),
    ALERTE VARCHAR(50),
    ETAT INT(1));	
	--(1,'admin',md5('123'),'ADMIN','lahcenabousalih@gmail.com',1),
	
INSERT INTO PERSONNEL (ID, LOGIN, PWD, NOM, PRENOM, EMAIL, CIVILITE, CONTACT, RESIDENCE, ROLE) VALUES
	(1, 'admin',md5('123'),'yameogo', 'ispolo', 'admin@gmail.com', 'homme', '00000000', 'dasasgho', 'admin'),
    (2, 'user1',md5('123'),'kabore', 'arthur', 'user1@gmail.com', 'femme', '00000000', 'tanghin', 'agentcollecte'),
    (3, 'user2',md5('123'), 'zongo', 'frank', 'user2@gmail.com', 'femme', '00000000', 'zone1', 'agentcollecte');

INSERT INTO POUBELLE (NUMERO, NIVEAU_REMPLISSAGE_COMP1, NIVEAU_REMPLISSAGE_COMP2, POIDS_COMP1, POIDS_COMP2) VALUES
    ('0012458','50%', '87%','24KG','67KG'),
    ('0257865','55%', '27%','14KG','47KG'),
    ('0578123','17%', '36%','28KG','61KG');	

SELECT * FROM PERSONNEL;
SELECT * FROM POUBELLE;
				
-- SAUVGARDER UNE BASE DE DONNEE MYSQL
-- ouvrez l'invite de commande cmd
-- mysqldump -u root -p ges_stag > ges_stag.sql				
 