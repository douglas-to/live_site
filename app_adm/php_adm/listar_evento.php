<?php

// Incluir o arquivo com a conexão com banco de dados
include_once("connect.php");

// QUERY para recuperar os eventos
$query_events = "SELECT id, title, color, start, end, obs, users FROM events";

// Prepara a QUERY
$result_events = $conn->prepare($query_events);

// Executar a QUERY
$result_events->execute();

// Criar o array que recebe os eventos
$eventos = [];

// Percorrer a lista de registros retornado do banco de dados
while($row_events = $result_events->fetch(PDO::FETCH_ASSOC)){

    // Extrair o array
    extract($row_events);

    $eventos[] = [
        'id' => $id,
        'title' => $title,
        'color' => $color,
        'start' => $start,
        'end' => $end,
        'obs' => $obs,
        'users' => $users,
    ];
}

echo json_encode($eventos);

?>