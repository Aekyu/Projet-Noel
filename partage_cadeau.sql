CREATE TABLE partage_cadeau
(
    id_donneur INT,
    id_receveur INT
);
//clien

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
//test pour voir si il en prend un au hazar 
SELECT * FROM donneur ORDER BY RAND() LIMIT 1;
//


select 
    donneur.nom
from
    donneur
ORDER BY RAND() 
;


//

select 
    donneur.nom
from
    donneur,
    (select 
    donneur.nom
from
    donneur
ORDER BY RAND())
as emp

