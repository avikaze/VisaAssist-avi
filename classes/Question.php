<?php


/**
 * Class Question
 */
class Question extends Database
{

    const  ANSWER_OPTION_RADIO = 'radio';
    const  ANSWER_OPTION_CHECK = 'checkbox';

    /**
     * Category constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param $categoryId
     * @return array
     */
    function getActiveQuestionsByCategoryId($categoryId)
    {
        $sql = "SELECT * FROM questions WHERE category_id = $categoryId";
        $statement = $this->connection->query($sql);
        $dquestions = $statement->fetchAll();

        return $dquestions;
    }
}