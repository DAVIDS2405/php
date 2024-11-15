<?php
header('Content-Type: application/json');

function get(int $id, array $arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i]['id'] === $id) {
            return $i;
        }
    }
    return -1;
}

$arr = [
    [
        "id" => 1,
        "name" => "Pedro"
    ],
    [
        "id" => 2,
        "name" => "Pedro"
    ]
];

if ($_SERVER["REQUEST_METHOD"] == 'DELETE') {
    extract($_GET);
    if (isset($id)) {
        $index = get($id, $arr);
        if ($index >= 0) {
            unset($arr[$index]);
            $arr = array_values($arr);
            echo json_encode(["data" => $arr]);
        } else {
            echo json_encode(['error' => "No existe este id"]);
        }
    } else {
        http_response_code(400);
        echo json_encode(['error' => "Información errónea"]);
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => "La solicitud solo admite DELETE"]);
}
