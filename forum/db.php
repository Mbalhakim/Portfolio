<?php
$db_connection = null;
$db_statement = null;





function dbConnect()
{
   global $db_connection;
   try {
      $db_connection = new PDO(
         'mysql:host=db.mbalhakim.nl;dbname=md529680db516829',
         'md529680db516829',
         'Mb158546@@'
      );
   } catch(PDOException $error) {
      return false;
   }

   return true;
}


function dbQuery($sql_statement)
{
   global $db_connection, $db_statement;

 
   $db_statement = $db_connection->prepare($sql_statement);
   $db_statement->execute();
}


function dbGetAll()
{
   global $db_statement;

   return $db_statement->fetchAll(PDO::FETCH_ASSOC);
}
?>