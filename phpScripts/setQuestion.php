<?php

    function setQuestion($manager, $qID, $deviceID) {

        $manager = new DataManager;
        $manager->connect();

        // set up a prepared statement to modify database

        $query = "UPDATE currentquestion SET q_id=".$qID." WHERE m_device_id = ".$deviceID.";";

        // connect to the database and execute the query.	
        $result = $manager->doNonQuery($query,true,null);

        $manager->disconnect();

        return "success";
    }

?>