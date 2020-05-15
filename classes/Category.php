<?php


/**
 * Class Category
 */
class Category extends Database
{

    /**
     * Category constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return bool|mysqli_result
     */
    function getActiveCategories()
    {
        $sql = "SELECT * FROM categories WHERE 1=1";
        $statement = $this->connection->query($sql);
        $categories = $statement->fetchAll();

        return $categories;
    }

    /**
     * @return false|int
     */
    function save()
    {
        $sql = "INSERT INTO categories set name ='only works', description='dd', status='1'";

        return  $this->connection->exec($sql);
    }

}