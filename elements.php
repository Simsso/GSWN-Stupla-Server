<?php
    $navbar = file_get_contents('http://stupla.gswn.de/schueler/frames/navbar.htm','r');
    $elements = explode('","', substr($navbar, strpos($navbar, " var classes = ")+17, strpos($navbar, "var rooms = ") - (strpos($navbar, " var classes = ")+17)-6));

    $result->elements = $elements;
    echo json_encode($result);
?>