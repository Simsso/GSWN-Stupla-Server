<?php
    $navbar = file_get_contents('http://stupla.gswn.de/schueler/frames/navbar.htm','r');
    $elements = explode('","', substr($navbar, strpos($navbar, " var classes = ")+17, strpos($navbar, "var rooms = ") - (strpos($navbar, " var classes = ")+17)-6));

    $result = new stdClass();
    $result->name = $elements[(isset($_GET['element_id']) ? $_GET['element_id'] : 1) - 1];
    $result->success = 1;
    $result->message = "";
    echo json_encode($result);
?>