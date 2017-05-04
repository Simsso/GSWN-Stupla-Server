<?php
    $navbar = file_get_contents('http://stupla.gswn.de/schueler/frames/navbar.htm','r');
    $elements = explode('","', substr($navbar, strpos($navbar, " var classes = ")+17, strpos($navbar, "var rooms = ") - (strpos($navbar, " var classes = ")+17)-6));

    $result->elements = $elements;
    $result->success = 1;
    $result->message = "This server has been moved to another hosting company. It will be back online soon.";// "The GSWN website has been updated. We are working on adapting the app to it.";
    echo json_encode($result);
?>
