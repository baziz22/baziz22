<?php

class Database
{
    private $dbType = DB_TYPE;
    private $dbHost = DB_HOST;
    private $dbName = DB_NAME;
    private $dbUser = DB_USER;
    private $dbPass = DB_PASS;

    private $statement;
    private $dbHandler;
    private $error;
    function __construct()
    {
      $this->user = new user();
    }
    public function connect()
    {
        // Set DSN: Data Source Name 
        // DSN basically a string that has associated data structure to describe a connection to a data source.
        // It is going to describe what exact type of database, what sort of host, what the database name, we're going to be using.

        echo 'Checking Connection!';
        try {
            $dsn = $this->dbType . ':host=' . $this->dbHost . ';dbname=' . $this->dbName;
            // Create a PDO instance
            // Create a connection
            $pdo = new PDO($dsn, $this->dbUser, $this->dbPass);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $pdo;
        } catch (PDOException $e) {
            //var_dump($dsn).BR;
            //error_log($e->getMessage()).BR;
            //echo $e->getMessage().BR;
            die('Connection Error: ' . $e->getMessage());
            exit('Something weird happened'); //something a user can understand
            
        }  
    }
    //Allows us to write queries
    public function query($sql) {
        $this->statement = $this->dbHandler->prepare($sql);
    }

    //Bind values
    public function bind($parameter, $value, $type = null) {
        switch (is_null($type)) {
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value):
                $type = PDO::PARAM_NULL;
                break;
            default:
                $type = PDO::PARAM_STR;
        }
        $this->statement->bindValue($parameter, $value, $type);
    }

    //Execute the prepared statement
    public function execute() {
        return $this->statement->execute();
    }

    //Return an array
    public function resultSet() {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    //Return a specific row as an object
    public function single() {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }

    //Get's the row count
    public function rowCount() {
        return $this->statement->rowCount();
    }
    /* public function userList() {
        $sql = "SELECT user_id, user_name, user_role FROM users";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        return $data;
    } */
    public function pagination($start_from, $per_page_record){
      $query = "SELECT * FROM users LIMIT $start_from, $per_page_record";
      $stmt = $this->db->connect()->prepare($query);
      $stmt->execute();
      $data = $stmt->rowCount();
      return $data;
    }
}
