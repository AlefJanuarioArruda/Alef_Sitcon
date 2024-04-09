<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Banco de Dados</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Dados do Banco de Dados</h2>
    <?php
    // Configurações de conexão com o banco de dados
    $servername = "localhost"; // Se o MySQL estiver rodando localmente
    $username = "root"; // Nome de usuário padrão do MySQL no XAMPP
    $password = ""; // Senha vazia por padrão
    $database = "sitcon"; // Substitua pelo nome do seu banco de dados criado no phpMyAdmin
    $port = "3312"; // Porta na qual o servidor MySQL está rodando

    // Cria uma conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $database, $port);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Query SQL para selecionar todos os dados da tabela
    $sql = "SELECT * FROM sitcondados";
    $result = $conn->query($sql);

    // Verifica se há dados retornados pela consulta
    if ($result->num_rows > 0) {
        // Exibe os dados em uma tabela HTML
        echo "<table>";
        echo "<tr><th>Nome do Paciente</th><th>Data de Nascimento</th><th>Profissional</th><th>Tipo de Solicitação</th><th>Data</th><th>Solicitações Clínicas</th><th>CPF</th><th>Procedimentos</th><th>Hora</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["patient_name"]."</td><td>".$row["birthdate"]."</td><td>".$row["professional"]."</td><td>".$row["request_type"]."</td><td>".$row["request_date"]."</td><td>".$row["clinical_requests"]."</td><td>".$row["cpf"]."</td><td>".$row["procedures"]."</td><td>".$row["time"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum dado encontrado.";
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
    ?>
</body>
</html>
