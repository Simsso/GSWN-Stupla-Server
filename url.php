<?php
    $week = isset($_GET['week']) ? $_GET['week'] : 1;
    $element_id = isset($_GET['element_id']) ? $_GET['element_id'] : 1;


    $element_id_str = strval($element_id);

    // add leading zeros to element_id
    while (strlen($element_id_str) < 5) {
        $element_id_str = '0' . $element_id_str;
    }
    
    // add leading zeros to week
    while (strlen($week) < 2) {
        $week = '0' . $week;
    }
    
    $result = new stdClass();
    $result->url = 'http://stupla.gswn.de/schueler/' . $week . '/c/c' . $element_id_str . '.htm';
    $result->success = 1;
    $result->message = "";
    echo json_encode($result);
?>