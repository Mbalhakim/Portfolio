<?php

class dbconnection extends PDO //PDO= PHP DATA OBJECT, dit is een bestaande class die heel veel PHP-programmeurs gebruiken
{
    private $host = "db.mbalhakim.nl";
    private $dbname = "md529680db546867";
    private $user = "md529680db546867";
    private $pass = '$$$Mbal-25';

    public function __construct()
    {
        parent::__construct("mysql:host=".$this->host.";dbname=".$this->dbname."; charset=utf8", $this->user, $this->pass);
        $this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // always disable emulated prepared statement when using the MySQL driver
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}
