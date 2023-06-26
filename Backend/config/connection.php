

<?php
// connecting  to the database using php
// and the method im using to connect is pdo


class ConnectionString{
    private $host;
    private $username;
    private $database;
    private $password;
 
    function Connection(){
        //  $this->host = "localhost";
        //  $this->username = "root";
        //  $this->database = "tracking";
        //  $this->password = "";
 $this->host = "localhost";
 $this->username = "globecom_ftracking";
 $this->database = "globecom_ftracking";
 $this->password = "vR3]VhU2d+[%";

        try{
            $dsn = 'mysql:host=' . $this->host .';' . 'dbname=' . $this->database;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
           return $pdo;

        }    
     
        catch(PDOException $error){
           echo "something went wrong trying to connect" . $error->getMessage();
        }

    }

}

?>