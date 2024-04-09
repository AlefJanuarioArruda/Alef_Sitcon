<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Banco de Dados</title>
    <link rel="stylesheet" href="css/pedidos.css">
    
     <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }
        table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    height: 100%; /* Agora a altura da tabela será igual à altura total disponível */
    overflow-y: auto; /* Adiciona scroll vertical se a tabela ficar muito grande */
}

/* Estilo para centralizar o texto e ajustar o layout das células */
th, td {
    padding: 20px;
    text-align: center; /* Centraliza o texto horizontalmente */
    border-bottom: 1px solid #ddd;
    vertical-align: middle; /* Centraliza o texto verticalmente */
}

/* Estilo para ajustar a largura da tabela em telas menores */
@media only screen and (max-width: 600px) {
    table {
        font-size: 14px; /* Reduz o tamanho da fonte da tabela em telas menores */
    }
    td:nth-child(5) {
        font-size: 14px; /* Reduz o tamanho do texto da data em telas menores */
    }
}
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 30px;
        }
        /* Estilo para tornar o texto da data maior em telas menores */
        @media only screen and (max-width: 600px) {
            td:nth-child(5) {
                font-size: 18px; /* Ajuste o tamanho do texto conforme necessário */
            }
        }
     </style>
</head>
<body>
    <div class="container">
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

        // Lógica de paginação
        $limit = 10; // Número de registros por página
        $page = isset($_GET['page']) ? $_GET['page'] : 1; // Página atual
        $start = ($page - 1) * $limit; // Calcula o offset

        // Query SQL para selecionar os registros com paginação
        $sql = "SELECT * FROM sitcondados LIMIT $start, $limit";
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

            // Adiciona links para navegação entre páginas
            $sql = "SELECT COUNT(*) AS total FROM sitcondados";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $total_pages = ceil($row["total"] / $limit); // Calcula o total de páginas
            echo "<div style='text-align: center; margin-top: 20px;'>";
            for ($i=1; $i<=$total_pages; $i++) {
                echo "<a href='?page=".$i."' style='margin-right: 5px;'>".$i."</a>";
            }
            echo "</div>";
        } else {
            echo "Nenhum dado encontrado.";
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
        ?>
    </div>
</body>
</html>
