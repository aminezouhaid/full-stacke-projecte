<?php
class Database {
    private $host = DB-HOST;
    private $user = DB-USER;
    private $pass = DB-PASS;
    private $dbname = DB-NAME;


    private $dbh;
    private $stmt;
    private $error;


    public function __construct()
    {
        $dsn = 'mysql : host ='.$this->host.'dbname ='.$this->dbname;

         // Create PDO instance
         try{
            $this->dbh = new PDO($dsn , $this->user , $this->pass);
         }
         catch(PDOException $e){
            $this->error = $e->getMessage();
            echo $this->error;
          }


    }
}

?>