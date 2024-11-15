<?php

if ($_SERVER["REQUEST_METHOD"] == 'GET') {
    echo json_encode($_GET);
} else {
    http_response_code(404);
    echo json_encode(['error' => "La solicitud solo admite get"]);
}
