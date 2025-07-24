/* 
connection au root via windows  
mysql -h localhost -u root -p 

connection au root via LINUX 
sudo mysql 
*/

 CREATE USER 'pn_livres_admin'@'localhost' IDENTIFIED BY "3fYP-{z9M3n=9g"

 /* donné les droits au serv */

 GRANT ALL PRIVILEGES ON pn_livres.* TO 'pn_livres_admin'@'localhost';

 /* Creation de la table */ 
 CREATE TABLE IF NOT EXISTS user (
    id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    pseudo VARCHAR(25)  NOT NULL UNIQUE, 
    mdp VARCHAR(25) NOT NULL, 
    avatar VARCHAR(255),
    mail VARCHAR(255) NOT NULL UNIQUE
 ) ENGINE=INNODB;

 INSERT INTO user (pseudo, mdp, mail)
 VALUES ("MoussKF", "Marseille5959.", "valetinmail@mail.fr");

 INSERT INTO user (pseudo, mdp, mail)
 VALUES ("JHONNY", "Marseille5959.", "jhonnymail@mail.fr");

 INSERT INTO user (pseudo, mdp, mail)
 VALUES ("ALEX12", "Marseille5959.", "alexmail@mail.fr");

 INSERT INTO user (pseudo, mdp, mail)
 VALUES ("Moustik", "Marseille5959.", "moustikmail@mail.fr");
        ("Tonton", "Marseille5959", "tontonmail@mail.fr"); 
        ("tondeuse", "Marseille5959", "tondeusemail@mail.fr");


SELECT * FROM user;
SELECT pseudo, mail, avatar FROM user;
SELECT pseudo, mail FROM user WHERE pseudo = "ALEX12";
SELECT pseudo, mail FROM user ORDER BY pseudo ASC;

