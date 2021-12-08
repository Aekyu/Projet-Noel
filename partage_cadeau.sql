create database projet_noel;
use projet_noel;
drop table if exists donneur;
create table donneur (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30)
);

insert into donneur ( nom ) values
("Bouchra"      ),
("Alexis"       ),
("Hanane"       ),
("Mehdi"        ),
("Olivier"      ),
("Remi"         ),
("Karim"        ),
("Nelly"        ),
("Xavier"       ),
("vincent"      ), 
("xavier"       ), 
("benoit"       ), 
("samuel"       ), 
("baptiste"     ), 
("yacine"       ), 
("messaoud"     ), 
("ahmed"        ), 
("gaetan"       ), 
("simon"        )
;