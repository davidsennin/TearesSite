<?php

	$conecta = mysql_connect("localhost", "root", "") or print (mysql_error()); 
	mysql_select_db("estudarphp", $conecta) or print(mysql_error());
	print "Conexão OK! <br/>"; 
	


	$sql = "SELECT ID, post_name, post_content FROM wp_posts"; 
	$result = mysql_query($sql, $conecta); 

	echo "lista de posts <br/><br/><br/>";

	while($consulta = mysql_fetch_array($result)) { 
	   print "$consulta[ID] - $consulta[post_name] - $consulta[post_content]<br>"; 
	   echo "<hr/>";
	} 
	mysql_free_result($result); 



	echo "fim";

	mysql_close($conecta); 

?>