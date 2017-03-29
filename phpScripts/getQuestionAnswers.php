<?php

   include_once'/phpModel/questionAnswer.class.php';

    function getQuestionAnswers($manager, $qID) {
        $query = 'select * from multanswers natural join answers where q_id =' . $qID . ';';
        
        $manager->connect();
        $result = $manager->doQuery($query);
        if ($result) {
            // process the results placing them in an array
            $resultArray = array();
            while ($row = $result->fetch()) {
                $answer = new questionAnswer($row['a_id'], $row ['q_id'], $row['a_text'], $row['p_filename']);
                $answerArray[] = $answer;
                extract($row);
            }
        }
        $manager->disconnect();
        return $answerArray;
    }
    
?>