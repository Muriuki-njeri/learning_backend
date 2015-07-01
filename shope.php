/*to create table;

mysql> CREATE TABLE `shop` ( 
    ->  `id` int(10) unsigned NOT NULL AUTO_INCREMENT, 
    ->  `item` varchar(255) NOT NULL DEFAULT '', 
    ->  `cost` varchar(255) NOT NULL DEFAULT '', 
    ->  PRIMARY KEY (`id`) 
    -> ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1; 


/*The table

mysql> show columns from shop; 
+-------+------------------+------+-----+---------+----------------+ 
| Field | Type             | Null | Key | Default | Extra          | 
+-------+------------------+------+-----+---------+----------------+ 
| id    | int(10) unsigned | NO   | PRI | NULL    | auto_increment | 
| item  | varchar(255)     | NO   |     |         |                | 
| cost  | varchar(255)     | NO   |     |         |                | 
+-------+------------------+------+-----+---------+----------------+ 

/*To add the info and values

mysql> INSERT INTO `shop` (`id`, `item`, `cost`) VALUES 
    -> (9, 'sugar', 50), 
    -> (10, 'milk', 45), 
    -> (3, 'bread', 60), 
    -> (4, 'tealeaves', 20), 
    -> (5, 'soap', 80), 
    -> (6, 'zoelotion', 150), 
    -> (7, 'tissue', 110), 
    -> (8, 'flamingo', 40); 

/*The new created table.
mysql> select * FROM shop; 
+----+-----------+------+ 
| id | item      | cost | 
+----+-----------+------+ 
|  1 | sugar     | 50   | 
|  3 | bread     | 60   | 
|  4 | tealeaves | 20   | 
|  5 | soap      | 80   | 
|  6 | zoelotion | 150  | 
|  7 | tissue    | 110  | 
|  8 | flamingo  | 40   | 
|  9 | sugar     | 50   | 
| 10 | milk      | 45   | 
+----+-----------+------+ 





