<?php

$connection = "host=localhost port=5432 dbname=pharmacy user=postgres password=hegde234";

$db = pg_connect($connection);
if(!$db)
{
	echo "unable to open the database";
}
else
{
	echo "Database opened successfully";

}
?>