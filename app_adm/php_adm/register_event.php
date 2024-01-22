<?php 
    include_once("connect.php");

    $datas = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $query_events = "INSERT INTO events (title, color, start, end) VALUES (?, ?, ?, ?)";

    $cad_event = $mysqli->prepare($query_events);

    $cad_event->bind_param('ssss', $datas['cadTitle'], $datas['cadColor'], $datas['cadStart'], $datas['cadEnd']);

    if($cad_event->execute()){
        $return = ['status' => true, 'msg' => 'Evento cadastrado com sucesso!', 'id' => $mysqli->insert_id, 'title' => $datas['cadTitle'], 'color' => $datas['cadColor'], 'start' => $datas['cadStart'], 'end' => $datas['cadEnd']];
    } else {
        $return = ['status' => false, 'msg' => 'Erro: Evento não cadastrado!'];
        error_log('Erro na execução da consulta: ' . $cad_event->error);
    }

    echo json_encode($return);

    $cad_event->close(); // Fechar a instrução preparada
    $mysqli->close(); // Fechar a conexão
?>
