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

if ($_SERVER["REQUEST_METHOD"] == 'PUT') {
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    extract((array)$data);
    if ($data != null && isset($id) && isset($name)) {
        $index = get($id, $arr);
        if ($index >= 0) {
            $arr[$index]["name"] = $name;
            echo json_encode(["data" => json_encode($arr)]);
        } else {
            http_response_code(404);
            echo json_encode(['error' => "No existe este id"]);
        }
    } else {
        http_response_code(400);
        echo json_encode(['error' => "No hay nada en la petición"]);
    }
} else {
    http_response_code(405);
    echo json_encode(['error' => "La solicitud solo admite PUT"]);
}
