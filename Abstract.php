<?php

/* PHP 5 introduces abstract classes and methods. */

/* Any class that contains at least one abstract method must also be abstract. */

abstract class Db  
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

/* Methods defined as abstract simply declare the method's signature - they cannot define the implementation.*/

    abstract protected function select($table, $fields); 
}

/* Classes defined as abstract may not be instantiated. */

// $ObjDb = new Db(); // (Fatal error: Cannot instantiate abstract class Db)

class Mysql extends Db
{

/*When inheriting from an abstract class, all methods marked abstract in parent class must be defined by the child class.*/

/* Methods must be implemented with same visibility i.e.  if abstract method is defined as protected in parent, implementation of that method must be either protected or public, but not private. */

/* Signatures of the methods must match i.e. type hints and number of arguments must be the same */

/* Child class defines an optional argument, where as abstract method signature does not, there is no conflict in the signature */

    public function select($table, $fields, $sp=NULL) 
    {
        $sql = "SELECT * FROM ".$table." where ID=".$fields[0]."";		
        $q = $this->pdo->query($sql);		
        foreach ($q as $row) { echo $row['ID'].' '.$row['Name']; }				
    }
}

class Pgsql extends Db
{
    public function select($table, $fields)
    {
        // Build PostgreSQL specific select query
        // then execute it with $this->pdo
    }
}

$pdo1 = new PDO('mysql:host=localhost; dbname=student', 'root', '');
//$pdo2 = new PDO('pgsql:host=localhost; dbname=student', 'root', '');

$db1 = new Mysql($pdo1);
//$db2 = new Pgsql($pdo2);

$db1->select('tblstudent', array('1'));
//$db2->select('tblstudent', array('1'));

?>
