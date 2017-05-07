<?php
    $navbar = file_get_contents('http://stupla.gswn.de/schueler/frames/navbar.htm','r');
    $select_begin = strpos($navbar, '<select name="week"');
    $weeks = substr($navbar, $select_begin + 87, strpos($navbar, '</select>') - $select_begin);
    $weeks = explode('<option value="', $weeks);
    
    for ($i = 0; $i < count($weeks); $i++) {
        $weeks[$i] = intval(substr($weeks[$i], 0, strpos($weeks[$i], '"')));
    }

    // remove first element from the array
    array_splice($weeks, 0, 1);

    $result = new stdClass();
    $result->weeks = $weeks;
    $result->success = 1;
    $result->message = "";
    echo json_encode($result);
?>
