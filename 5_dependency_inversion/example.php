<?php
// Dependency Inversion
// Depends on abstractions, not on concretions.
// This allows for decoupling code.

interface ConnectionInterface
{
    public function connect();
}

// Low level code depends upon abstraction
class DbConnection implements ConnectionInterface
{
    public function connect()
    {
    }
}

// High level code depends upon abstraction
class PasswordReminder
{
    protected $dbConnection;

    public function __construct(ConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}
