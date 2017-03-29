<?php

    include_once '/phpModel/answer.class.php';

    function getSubmittedAnswer($manager, $qID) {
        
        //set up query
        $query = 'select * from submittedanswers where q_id='.$qID.';';

        $manager->connect();

        $result = $manager->doQuery($query);
        if ($result) {
            // process the results placing them in an array
            $resultArray = array();
            while ($row = $result->fetch()) {
                $answer = new answer($row['q_id'], $row['p_device_id'], $row['sub_ans'], $row['displayed']);
                $answerArray[] = $answer;
                extract($row);
            }
        }
        $manager->disconnect();
        return $answerArray;
    }
    
?>