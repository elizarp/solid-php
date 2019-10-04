<?php
/*

DIP	The Dependency Inversion Principle
Depend on abstractions, not on concretions.

### Refactored Code ###

*/

interface DbConnectionInterface
{
    public function connect();
    public function query();
}

class MySqlConnection implements DbConnectionInterface
{
    public function connect()
    {
        /* code to connect using MySql */ 
    }

    public function query()
    {
        /* code to query using MySql */ 
    }
}

class OracleConnection implements DbConnectionInterface
{
    public function connect()
    {
        /* code to connect using Oracle */ 
    }

    public function query()
    {
        /* code to query using Oracle */ 
    }
}

class PageLoader
{
    private $dbConnection;
    public function __construct(DbConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
        $this->dbConnection->connect();
        $this->dbConnection->query();
    }
}
