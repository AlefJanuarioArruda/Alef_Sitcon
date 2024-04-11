<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Código PHP para Enviar e exibir os dados do banco de dados
        $servername = "localhost"; // Se o MySQL estiver rodando localmente
        $username = "root"; // Nome de usuário padrão do MySQL no XAMPP
        $password = ""; // Senha vazia por padrão
        $database = "sitcon"; // Substitua pelo nome do seu banco de dados criado no phpMyAdmin
        $port = "3312"; // Porta na qual o servidor MySQL está rodando

        $conn = new mysqli($servername, $username, $password, $database, $port);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("INSERT INTO sitcondados (patient_name, birthdate, professional, request_type, request_date, clinical_requests, cpf, procedures, time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $patient_name, $birthdate, $professional, $request_type, $request_date, $clinical_requests, $cpf, $procedures, $time);

        $patient_name = $_POST['patient_name'];
        $birthdate = $_POST['birthdate'];
        $professional = $_POST['professional'];
        $request_type = $_POST['request_type'];
        $request_date = $_POST['request_date'];
        $clinical_requests = $_POST['clinical_requests'];
        $cpf = $_POST['cpf'];
        $procedures = $_POST['procedures'];
        $time = $_POST['time'];

        $stmt->execute();

        echo "New records created successfully";

        $stmt->close();
        $conn->close();
		header("Location: includes/solicitação.php");
        exit();
    }
    ?>
    