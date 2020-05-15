<?php

/**
 * Class Database
 */
class Database
{
    /**
     * @var PDO
     */
    protected $connection;

    /**
     * Database constructor.
     */
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        try
        {
            $this->connection = new PDO("mysql:host=$servername;dbname=project1", $username, $password);
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}
?>
