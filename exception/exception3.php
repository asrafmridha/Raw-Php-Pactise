<?php

class ServerLoadException extends Exception
{
};
class DiskFullException extends Exception
{
};
class NetworkFullException extends Exception
{
};

interface NetworkStorage
{
    public function connect();
    function getName();
}
class MySqlServer implements NetworkStorage
{
    public function connect()
    {
        throw new ServerLoadException();
    }
    function getName()
    {
        return "Mysql";
    }
}
class PostgresSqlServer implements NetworkStorage
{
    public function connect()
    {
        throw new DiskFullException();
    }
    function getName()
    {
        return "PostgresSqlServer";
    }
}
class MSSqlServer implements NetworkStorage
{
    public function connect()
    {
        // throw new NetworkFullException();
        return $this;
    }
    function getName()
    {
        return "MSSqlServer";
    }
}

class ConnectionPool
{
    private $connection;
    private $storage;
    function __construct()
    {

        $this->storage = array();
    }
    public function addStorage(NetworkStorage $storage)
    {
        array_push($this->storage, $storage);
    }
    public function getConnect()
    {

        foreach ($this->storage as $storage) {
            try {
                $this->connection = $storage->connect();
            } catch (ServerLoadException $e) {
                echo $storage->getName() . " " . "facing huge load\n";
            } catch (NetworkFullException $e) {
                echo $storage->getName() . " " . "facing Some Problem this Network\n";
            } catch (DiskFullException $e) {
                echo $storage->getName() . " " . "Full Disk\n";
            }
            if ($this->connection) {
                break;
            }
        }
        if ($this->connection) {
            return $this->connection;
        }
        return false;
    }
}



$mySql    = new MySqlServer();
$postgres = new PostgresSqlServer();
$mssql    = new MSSqlServer();

$cp = new ConnectionPool();
$cp->addStorage($mySql);
$cp->addStorage($postgres);
$cp->addStorage($mssql);

$connection = $cp->getConnect();
print_r($connection);
