<?php 
    include_once("connect.php");

    $query = "SELECT * FROM events";

    $result = $mysqli->prepare($query);

    $result->execute();

    $result->store_result();

    $result->bind_result($id, $title, $color, $start, $end);

    $events = [];

    while($result->fetch()){
        $events[] = [
            'id' => $id,
            'title' => $title,
            'color' => $color,
            'start' => $start,
            'end' => $end,
        ];
    }

    echo json_encode($events, JSON_UNESCAPED_UNICODE);
?>
