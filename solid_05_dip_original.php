<?php
/*

DIP	The Dependency Inversion Principle
Depend on abstractions, not on concretions.

*/
class MySqlConnection
{
    public function connect()
    { }

    public function query()
    { }
}

class PageLoader
{
    private $dbConnection;
    public function __construct(MySqlConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
        $this->dbConnection->connect();
        $this->dbConnection->query();
    }
}
