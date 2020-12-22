# SQL Gaulois

**Consignes**

A partir du script SQL Gaulois par votre formateur, écrivez et exécutez les requêtes SQL suivantes:

### 1) Nombre de gaulois par lieu ( trié par nombre de gayloix décroissant)

```
MariaDB [exo_mysql]>
    -> SELECT NOM_LIEU as City,  COUNT(ID_VILLAGEOIS) AS Villageois
    -> FROM lieu,villageois
    -> WHERE villageois.ID_LIEU = lieu.ID_LIEU
    -> GROUP BY City
    -> ORDER BY villageois DESC;
+----------------------------------+------------+
| City                             | Villageois |
+----------------------------------+------------+
| Village gaulois                  |         13 |
| Babaorum                         |          9 |
| En mer                           |          8 |
| Champs de Nioutechnologix        |          5 |
| 3e chene a droite de la carriere |          4 |
| Laudanum                         |          4 |
| Grottes                          |          2 |
| Oposum                           |          1 |
+----------------------------------+------------+
8 rows in set (0.001 sec)
```

### 2) Nom des gaulois + spécialité + village

```
MariaDB [exo_mysql]> SELECT specialite.NOM_SPECIALITE AS Specialite, villageois.NOM AS Villageois ,lieu.NOM_LIEU AS Village
    -> FROM villageois,specialite,lieu
    -> WHERE specialite.ID_SPECIALITE = villageois.ID_SPECIALITE AND lieu.ID_LIEU =villageois.ID_LIEU
    -> GROUP BY villageois
    -> ORDER BY specialite ASC;
+-------------------+-----------------+----------------------------------+
| Specialite        | Villageois      | Village                          |
+-------------------+-----------------+----------------------------------+
| Artisan           | Mineralogix     | Grottes                          |
| Artisan           | Amerix          | Babaorum                         |
| Artisan           | Petisuix        | Babaorum                         |
| Artisan           | Carferrix       | Champs de Nioutechnologix        |
| Artisan           | Cetautomatix    | Village gaulois                  |
| Artisan           | Lentix          | Village gaulois                  |
| Barde             | Assurancetourix | Village gaulois                  |
| Druide            | Diagnostix      | Laudanum                         |
| Druide            | Panoramix       | Village gaulois                  |
| Druide            | Barometrix      | Village gaulois                  |
| Druide            | Amnesix         | Babaorum                         |
| Espion            | Zerozerosix     | En mer                           |
| Espion            | Acidenitrix     | En mer                           |
| Guerrier          | Industrichimix  | Champs de Nioutechnologix        |
| Guerrier          | Tragicomix      | Village gaulois                  |
| Guerrier          | Allegorix       | Babaorum                         |
| Guerrier          | Tournedix       | Champs de Nioutechnologix        |
| Guerrier          | Porquepix       | Grottes                          |
| Guerrier          | Abraracourcix   | Village gaulois                  |
| Guerrier          | Astronomix      | Laudanum                         |
| Guerrier          | Plantaquatix    | 3e chene a droite de la carriere |
| Guerrier          | Analgesix       | En mer                           |
| Guerrier          | Herettix        | En mer                           |
| Guerrier          | Quatredeuxsix   | Oposum                           |
| Guerrier          | Asterix         | Village gaulois                  |
| Guerrier          | Aventurepix     | Laudanum                         |
| Guerrier          | Pneumatix       | Babaorum                         |
| Guerrier          | Aplusbegalix    | Babaorum                         |
| Marchand          | Orthopedix      | Babaorum                         |
| Marchand          | Arrierboutix    | 3e chene a droite de la carriere |
| Marchand          | Plaintcontrix   | Village gaulois                  |
| Marchand          | Alambix         | Champs de Nioutechnologix        |
| Marchand          | Pronostix       | En mer                           |
| Marchand          | Ordralfabetix   | Laudanum                         |
| Marchand          | Taxesurleprix   | Village gaulois                  |
| Marchand          | Antibiotix      | 3e chene a droite de la carriere |
| Marchand          | Selfservix      | Champs de Nioutechnologix        |
| Porteur de Mehnir | Obelix          | Village gaulois                  |
| Villageois        | Appatix         | 3e chene a droite de la carriere |
| Villageois        | Salamix         | En mer                           |use
| Villageois        | Choucroutgarnix | En mer                           |
| Villageois        | Asthmatix       | En mer                           |
| Villageois        | Goudurix        | Village gaulois                  |
| Villageois        | Agecanonix      | Village gaulois                  |
| Villageois        | Dithyrambix     | Babaorum                         |
| Villageois        | Catedralgotix   | Babaorum                         |
+-------------------+-----------------+----------------------------------+
46 rows in set (0.001 sec)
```

### 3) Nom des spécialités avec nombre de gaulois par spécialité (trié par nombre de gaulois décroissant)

```
MariaDB [exo_mysql]> SELECT COUNT(villageois.ID_SPECIALITE) AS TOTAL, specialite.NOM_SPECIALITE AS SPECIALITE FROM villageois, specialite WHERE villageois.ID_SPECIALITE = specialite.ID_SPECIALITE GROUP BY SPECIALITE ORDER BY TOTAL DESC;
+-------+-------------------+
| TOTAL | SPECIALITE        |
+-------+-------------------+
|    15 | Guerrier          |
|     9 | Marchand          |
|     8 | Villageois        |
|     6 | Artisan           |
|     4 | Druide            |
|     2 | Espion            |
|     1 | Porteur de Mehnir |
|     1 | Barde             |
+-------+-------------------+
8 rows in set (0.000 sec)
```

### 4) Nom des batailles + lieu de la plus récente à la plus ancienne (dates au format jj/mm/aaaa)

```
MariaDB [exo_mysql]>
    -> SELECT DATEFORMAT(bataille.DATE_BATAILLE,"%d %m %Y")  as DATE,bataille.NOM_BATAILLE as BATAILLE, lieu.NOM_LIEU AS LIEU
    -> FROM bataille,lieu
    -> WHERE bataille.ID_LIEU = lieu.ID_LIEU
    -> ORDER BY DATE DESC;
+------------+-------------------+----------------------------------+
| DATE       | BATAILLE          | LIEU                             |
+------------+-------------------+----------------------------------+
| 0050-01-01 | Gladiateurs       | 3e chene a droite de la carriere |
| 0050-05-31 | Mercenaires       | Babaorum                         |
| 0050-06-03 | Cohorte VI        | Village gaulois                  |
| 0050-07-09 | Bataille gauloise | Champs de Nioutechnologix        |
| 0050-07-29 | Vikings           | 3e chene a droite de la carriere |
| 0050-09-01 | Cohorte III       | Champs de Nioutechnologix        |
| 0050-09-15 | Babaorum          | Laudanum                         |
| 0050-10-08 | Legion XII        | Grottes                          |
| 0050-12-02 | Booldechwingum    | En mer                           |
| 0050-12-05 | Laudanum          | Babaorum                         |
+------------+-------------------+----------------------------------+
10 rows in set (0.000 sec)
```

### 5) Nom des potions + coût de réalisation de la potion (trié par coût décroissant)

```
Database changed
MariaDB [gaulois]> SELECT potion.NOM_POTION as potion, SUM(compose.QTE*ingredient.COUT_INGREDIENT) AS COUT
    -> FROM potion,ingredient,compose
    -> WHERE compose.ID_POTION = potion.ID_POTION AND compose.ID_INGREDIENT = ingredient.ID_INGREDIENT
    -> GROUP BY Potion
    -> ORDER BY COUT DESC;
+--------------------+--------+
| potion             | COUT   |
+--------------------+--------+
| Magique            | 3245.5 |
| Potion VII         |   1297 |
| Potion V           |   1277 |
| Potion IX          |   1023 |
| Rajeunissement II  |    937 |
| Potion VIII        |    896 |
| Soupe              |    844 |
| Assouplissement    |    784 |
| Intelligence       |    544 |
| Rajeunissement     |  382.5 |
| Santé              |    265 |
| Potion III         |    254 |
| Potion I           |    234 |
| Potion IV          |    206 |
| Invisibilité       |    184 |
| Assouplissement II |    141 |
| Potion VI          |     86 |
| Potion II          |     74 |
| Force              |     48 |
| Vitesse            |     33 |
+--------------------+--------+
20 rows in set (0.001 sec)
```

## 6) Nom des ingrédients + coût + quantité de chaque ingrédient qui composent la potion 'Potion V'

```
MariaDB [gaulois]> SELECT potion.NOM_POTION as POTION,ingredient.NOM_INGREDIENT as INGREDIENT,ingredient.COUT_INGREDIENT as "COUT UNITAIRE",compose.QTE as QUANTITE, SUM(compose.QTE*ingredient.COUT_INGREDIENT) AS Total
    -> FROM potion,ingredient,compose
    -> WHERE compose.ID_POTION = potion.ID_POTION AND compose.ID_INGREDIENT = ingredient.ID_INGREDIENT AND potion.ID_POTION=15
    -> GROUP BY Potion
    -> ORDER BY Total DESC;
+----------+-----------------+---------------+----------+-------+
| POTION   | INGREDIENT      | COUT UNITAIRE | QUANTITE | Total |
+----------+-----------------+---------------+----------+-------+
| Potion V | Noix St Jacques |            12 |       97 |  1277 |
+----------+-----------------+---------------+----------+-------+
1 row in set (0.000 sec)
```

## 7) Nom du ou des villageois qui ont pris le plus de casques dans la bataille 'Babaorum'

```
MariaDB [gaulois]> SELECT  villageois.NOM as VILLAGEOIS, MAX(casque.ID_CASQUE) as "NOMBRE DE CASQUE",bataille.NOM_BATAILLE as BATAILLE
    -> FROM villageois, lieu,bataille,casque
    -> WHERE bataille.ID_BATAILLE=1;
+------------+------------------+----------+
| VILLAGEOIS | NOMBRE DE CASQUE | BATAILLE |
+------------+------------------+----------+
| Obelix     |                9 | Babaorum |
+------------+------------------+----------+
1 row in set (0.001 sec)
```

## 8) Nom des villageois et la quantité de potion bue (en les classant du plus grand buveur au plus petit)

```
MariaDB [gaulois]> SELECT villageois.NOM as VILLAGEOIS, potion.NOM_POTION as POTION, boit.DOSE as QUANTITE
    -> FROM villageois, potion,boit
    -> WHERE boit.ID_POTION = potion.ID_POTION AND boit.ID_VILLAGEOIS = villageois.ID_VILLAGEOIS
    -> ORDER BY QUANTITE DESC;
+---------------+--------------------+----------+
| VILLAGEOIS    | POTION             | QUANTITE |
+---------------+--------------------+----------+
| Acidenitrix   | Force              |       50 |
| Diagnostix    | Santé              |       49 |
| Carferrix     | Invisibilité       |       48 |
| Agecanonix    | Assouplissement    |       47 |
| Pneumatix     | Potion II          |       43 |
| Astronomix    | Force              |       40 |
| Alambix       | Assouplissement    |       40 |
| Appatix       | Potion IV          |       37 |
| Abraracourcix | Soupe              |       36 |
| Asthmatix     | Magique            |       35 |
| Petisuix      | Assouplissement II |       33 |
| Allegorix     | Potion IX          |       30 |
| Amnesix       | Assouplissement    |       30 |
| Cetautomatix  | Potion VIII        |       29 |
| Herettix      | Potion III         |       28 |
| Acidenitrix   | Assouplissement    |       25 |
| Plantaquatix  | Potion I           |       25 |
| Antibiotix    | Potion VI          |       21 |
| Abraracourcix | Assouplissement    |       21 |
| Abraracourcix | Assouplissement    |       20 |
| Analgesix     | Vitesse            |       20 |
| Orthopedix    | Potion V           |       10 |
| Aplusbegalix  | Rajeunissement II  |        9 |
| Amnesix       | Intelligence       |        8 |
| Arrierboutix  | Rajeunissement     |        6 |
| Acidenitrix   | Potion VII         |        1 |
+---------------+--------------------+----------+
26 rows in set (0.000 sec)
```

### 9) Nom de la bataille où le nombre de casques pris a été le plus important

```
MariaDB [gaulois]> SELECT bataille.NOM_BATAILLE as BATAILLE, MAX(casque.COUT_CASQUE) as "MAX CASQUES"
    -> FROM  bataille,casque,prise_casque
    -> WHERE prise_casque.ID_BATAILLE = bataille.ID_BATAILLE AND prise_casque.ID_CASQUE = casque.ID_CASQUE;
+------------+-------------+
| BATAILLE   | MAX CASQUES |
+------------+-------------+
| Cohorte VI |        3128 |
+------------+-------------+
1 row in set (0.000 sec)
```
