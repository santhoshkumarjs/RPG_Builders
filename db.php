<?php
class database {
     
    private $dbName = null, $dbHost = null, $dbPass = null, $dbUser = null;
     
    public function __construct($dbDetails = array()) {
         
        $this->dbName = $dbDetails['db_name'];
        $this->dbHost = $dbDetails['db_host'];
        $this->dbUser = $dbDetails['db_user'];
        $this->dbPass = $dbDetails['db_pass'];
 
        $this->dbh = new PDO('mysql:host='.$this->dbHost.';dbname='.$this->dbName, $this->dbUser, $this->dbPass);
         
    }
     
}

$dbDetails = array(
        'db_name' => 'santhosh',
        'db_host' => 'localhost',
        'db_user' => 'root',
        'db_pass' => ''
);
 
$db1 = new database($dbDetails);
echo "<pre>"; var_dump($db1);
$db2 = new database($dbDetails);
var_dump($db2);
$db3 = new database($dbDetails);
var_dump($db3);
$db4 = new database($dbDetails);
var_dump($db4);

/*
object(database)#1 (5) {
  ["dbName":"database":private]=>
  string(8) "santhosh"
  ["dbHost":"database":private]=>
  string(9) "localhost"
  ["dbPass":"database":private]=>
  string(0) ""
  ["dbUser":"database":private]=>
  string(4) "root"
  ["dbh"]=>
  object(PDO)#2 (0) {
  }
}
object(database)#3 (5) {
  ["dbName":"database":private]=>
  string(8) "santhosh"
  ["dbHost":"database":private]=>
  string(9) "localhost"
  ["dbPass":"database":private]=>
  string(0) ""
  ["dbUser":"database":private]=>
  string(4) "root"
  ["dbh"]=>
  object(PDO)#4 (0) {
  }
}
object(database)#5 (5) {
  ["dbName":"database":private]=>
  string(8) "santhosh"
  ["dbHost":"database":private]=>
  string(9) "localhost"
  ["dbPass":"database":private]=>
  string(0) ""
  ["dbUser":"database":private]=>
  string(4) "root"
  ["dbh"]=>
  object(PDO)#6 (0) {
  }
}
object(database)#7 (5) {
  ["dbName":"database":private]=>
  string(8) "santhosh"
  ["dbHost":"database":private]=>
  string(9) "localhost"
  ["dbPass":"database":private]=>
  string(0) ""
  ["dbUser":"database":private]=>
  string(4) "root"
  ["dbh"]=>
  object(PDO)#8 (0) {
  }
}
*/
?>