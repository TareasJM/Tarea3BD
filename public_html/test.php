<!DOCTYPE html>  
<head>  
<title>Insert data to PostgreSQL with php - creating a simple web application</title>  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
<style>  
             li {listt-style: none;}  
</style>  
</head>  
<body>  
<h2>Enter information regarding book</h2>  
<ul>  
<form name="insert" action="test.php" method="POST" >  
<li>Book ID:</li><li><input type="text" name="numero" /></li> 
<li><input type="submit" /></li>  
</form>  
</ul>  
</body>  
</html>  
<?php  
$db = pg_connect("host=localhost port=5432 dbname=tarea user=tarea password=tarea");  
$query = "INSERT INTO test VALUES ('$_POST[numero]')";  
$result = pg_query($query);   
?> 