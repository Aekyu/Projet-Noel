create database projet_noel;

drop table if exists donneur;
create table donneur (
    id int PRIMARY KEY not null auto_increment,
    nom  varchar(30)
);

insert into donneur ( nom ) values
("Bouchra"     ),
("Alexis"      ),
("Hanane"      ),
("Mehdi"       ),
("Olivier"     ),
("Olivier"     ),
("Olivier"     ),
("Remi"        ),
("Karim"       ),
("Nelly"       ),
("Xavier"      )
;