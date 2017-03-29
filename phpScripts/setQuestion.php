<?php

    $questionID = $_POST['qID'];
    $deviceID = $_POST['deviceID'];;
	
	include_once '/database/dataManager.php';

    $manager = new DataManager;
    $manager->connect();

    // set up a prepared statement to modify database

    $check = "SELECT * from currentquestion WHERE m_device_id = ".$deviceID.";";
    $checkValues = array($deviceID);

    
    $checkResult = $manager->doQuery($check);

    if (mysql_num_rows($checkResult)==0) {
        $query = "INSERT INTO currentquestion VALUES (".deviceID.", ".questionID.");";
    /*} else {
        $query = "UPDATE currentquestion SET q_id=".$questionID." WHERE m_device_id = ".$deviceID.";";
    }
    */
    // connect to the database and execute the query.	
    $result = $manager->doNonQuery($query,true,null);

    $manager->disconnect();

?>