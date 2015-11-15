<?php
    $week = $_GET['week'];
    $element_id = $_GET['element_id'];


    $element_id_str = strval($element_id);

    // add leading zero
    while (strlen($element_id_str) < 5) {
        $element_id_str = '0' . $element_id_str;
    }

    $result->url = 'http://stupla.gswn.de/schueler/' . $_GET['week'] . '/c/c' . $element_id_str . '.htm';
    echo json_encode($result);
?>