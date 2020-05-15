<?php
require_once "classes/Database.php";
require_once "classes/Category.php";
require_once "classes/Question.php";
require_once "classes/AnswerOption.php";

$category = new Category();
$categories = $category->getActiveCategories();

if(isset($_GET['category_id']) && $_GET['category_id'] > 0)
{
    $categoryId =   (int) $_GET['category_id'];

    $questionObj =  new Question();
    $questions = $questionObj->getActiveQuestionsByCategoryId($categoryId);

    $answerOptionObj =  new AnswerOption();

    $i = 1;
    foreach($questions as $question)
    {
        echo $i++." ".$question['question'];
        $options = $answerOptionObj->getActiveQuestionOptionsByQuestionId($question['id']);
        echo "<br />";
        $j =1 ;
        foreach($options as $option)
        {?>
            <input type="<?php echo  $question['html_form_option']; ?>" name="answer_id_<?php echo $question['id'];?>">
            <?php
            echo " &nbsp;&nbsp;&nbsp;&nbsp;". $j++.".  ". $option['answer_option']." <br/>";
        }

        echo "<br /> <br />";

    }
    ?>
    <?php
}

?>