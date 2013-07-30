<?php include("db.config"); ?>
<?php
$tempsql = mysql_pconnect(HOST, USER, PASSWORD);
mysql_select_db(DBNAME, $tempsql);
mysql_query("CREATE TABLE `lection` (`id` INT( 5 ) NOT NULL , `title` VARCHAR( 255 ) NOT NULL);");
mysql_query("INSERT INTO `lection` VALUES (\"1\", \"test1\"),(\"2\", \"test2\");");
$a = mysql_query("SELECT * FROM `lection`;");
$test = mysql_fetch_row($a); 

?>
