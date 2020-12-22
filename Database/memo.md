# Exercice 1

## a) Donner la liste des titres des représentations

```
USE concerts;
+-------------------+-----------------------+-------------------+
| id_representation | titre                 | lieu              |
+-------------------+-----------------------+-------------------+
|                 1 | Vanmak Tour 2021      | Zenith            |
|                 2 | Bachata Festival Tour | Strasbourg Zenith |
|                 3 | Fake Bachata Festival | Erstein City      |
+-------------------+-----------------------+-------------------+
3 rows in set (0.000 sec)

```

## b) Donner la liste des titres des représentations ayant lieu à l'opéra Bastille.

```
MariaDB [concerts]> SELECT * FROM Representation where lieu = "Opéra Bastille";
+-------------------+-------------------+-----------------+
| id_representation | titre             | lieu            |
+-------------------+-------------------+-----------------+
|                 4 | Représentation 1  | Opera Bastille  |
|                 5 | Représentation 2  | Opéra Bastille  |
|                 6 | Représentation 3  | Opéra Bastille  |
|                 7 | Représentation 4  | Opéra Bastille  |
|                 8 | Représentation 5  | Opéra Bastille  |
|                 9 | Représentation 6  | Opéra Bastille  |
+-------------------+-------------------+-----------------+
6 rows in set (0.000 sec)
```

## c) Donner la liste des noms des musiciens et des titres des représentations auxquelles ils participent.

```
MariaDB [concerts]> SELECT m.nom, m.prenom,p.date_programme,r.titre
    -> FROM Musicien m, Programmer p, Representation r
    -> WHERE p.id_musicien = m.id_musicien
    -> AND  r.id_representation = p.id_representation;
+---------+-----------+----------------+-----------------------+
| nom     | prenom    | date_programme | titre                 |
+---------+-----------+----------------+-----------------------+
| Vanmak  | David     | 2021-01-25     | Vanmak Tour 2021      |
| Madonna | Madonna   | 2020-11-25     | Représentation 1      |
| Madonna | Madonna   | 2020-11-26     | Représentation 2      |
| Green   | Day       | 2020-11-30     | Représentation 6      |
| Luciano | Pavarotti | 2020-11-30     | Vanmak Tour 2021      |
| Luciano | Pavarotti | 2020-12-24     | Fake Bachata Festival |
+---------+-----------+----------------+-----------------------+
6 rows in set (0.000 sec)

```

## d) Donner la liste des titres des représentations, les lieux et les tarifs pour la journée du 14/09/2014

```
MariaDB [concerts]> SELECT m.nom, m.prenom,p.date_programme, r.titre
    -> FROM Musicien m, Programmer p, Representation r
    -> WHERE p.id_musicien = m.id_musicien
    -> AND r.id_representation = p.id_representation
    -> AND p.date_programme = "2014-09-14";
+---------+---------+----------------+-----------------------+
| nom     | prenom  | date_programme | titre                 |
+---------+---------+----------------+-----------------------+
| Madonna | Madonna | 2014-09-14     | Bachata Festival Tour |
+---------+---------+----------------+-----------------------+
1 row in set (0.000 sec)
```

# Exercice 2

## a) Quel est le nombre total d'étudiants ?

## b) Quelles sont, parmi l'ensemble des notes, la note la plus haute et la note la plus basse ?

## c) Quelles sont les moyennes de chaque étudiant dans chacune des matières ? (utilisez CREATE VIEW)

## d) Quelles sont les moyennes par matière ? (cf. question c)

## e)Quelle est la moyenne générale de chaque étudiant ? (utilisez CREATE VIEW + cf. question 3)

## f) Quelle est la moyenne générale de la promotion ? (cf. ques

## g) Quels sont les étudiants qui ont une moyenne générale supérieure ou égale à la moyenne générale de la promotion ? (cf. question e)
