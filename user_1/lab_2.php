<?php include("db.config"); ?>
<?php $tempsql = mysql_pconnect(HOST, USER, PASSWORD);
mysql_select_db(DBNAME, $tempsql);
$a = mysql_query("SHOW tables;");
$i=0;
if(mysql_num_rows($a)) 
  { 
    while($result = mysql_fetch_array($a)) 
    { 
        echo "Таблица: ".$result[$i]."<br />"; 
    } 
    $i++;
  } 
?>