<?php
header('Content-Type: application/json');
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    // echo file_get_contents('php://input');
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    //extract((array)$data);
    echo $data->name;
} else {
    http_response_code(404);
    echo json_encode(['error' => "La solicitud solo admite POST"]);
}
