<?php
// Verifica se os parâmetros foram enviados
if (isset($_GET['patient_name']) && isset($_GET['professional']) && isset($_GET['request_type']) && isset($_GET['request_date']) && isset($_GET['clinical_requests']) && isset($_GET['procedures']) && isset($_GET['time'])) {
    // Atribui os dados recebidos a variáveis locais
    $patient_name = $_GET['patient_name'];
    $professional = $_GET['professional'];
    $request_type = $_GET['request_type'];
    $request_date = $_GET['request_date'];
    $clinical_requests = $_GET['clinical_requests'];
    $procedures = $_GET['procedures'];
    $time = $_GET['time'];
    $birthdate = $_GET['birthdate'];
    $cpf = $_GET['cpf'];
} else {
}
