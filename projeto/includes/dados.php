<?php
include '../model/dados_request.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sitcon</title>
    <link rel="stylesheet" href="../css/initial.css">
</head>
<body>
    <header>
        <h1 class="logo">
            Alef - sitcon
        </h1>
        <button class="order-onlinee"><a href="../main.php" target="_blank" style="color: white; text-decoration: none;">Solicitações Clínicas</a></button>
        <button class="order-online"><a href="../includes/solicitação.php" target="_blank" style="color: white; text-decoration: none;">Lista de Consultas</a></button>
    </header>
    <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(140,255,140,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(140,255,140,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="lightblue" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="blue" />
            </g>
        </svg>
    </div>

    <div class="input-group">
        <div class="input-box">
            <label for="patient_name">Nome do Paciente</label>
            <input type="text" id="patient_name" name="patient_name" value="<?php echo isset($_GET['patient_name']) ? $_GET['patient_name'] : ''; ?>" readonly>
        </div>

        <div class="input-box">
            <label for="birthdate">Data de Nascimento</label>
            <input type="text" id="birthdate" name="birthdate" value="<?php echo isset($_GET['birthdate']) ? $_GET['birthdate'] : ''; ?>" readonly>
        </div>

        <div class="input-box">
            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" value="<?php echo isset($_GET['cpf']) ? $_GET['cpf'] : ''; ?>" readonly>
        </div>
    </div>

    <div class="container">
        <p style="font-size: 13px; font-family: montserrat;">Atenção ! Os Campos com * devem ser preenchidos obrigatoriamente.</p>
    </div>

    <div class="input-boxxx">
        <div class="input-boxx">
            <label for="professional">Profissional</label>
            <input type="text" id="professional" name="professional" value="<?php echo isset($_GET['professional']) ? $_GET['professional'] : ''; ?>" readonly>
        </div>

        <div class="input-groupp">
            <div class="input-box">
                <label for="clinical_requests">Solicitações Clínicas</label>
                <input type="text" id="clinical_requests" name="clinical_requests" value="<?php echo isset($_GET['clinical_requests']) ? $_GET['clinical_requests'] : ''; ?>" readonly>
            </div>

            <div class="input-box">
                <label for="request_type">Tipo de Solicitação</label>
                <input type="text" id="request_type" name="request_type" value="<?php echo isset($_GET['request_type']) ? $_GET['request_type'] : ''; ?>" readonly>
            </div>

            <div class="input-box">
                <label for="procedures">Procedimentos</label>
                <input type="text" id="procedures" name="procedures" value="<?php echo isset($_GET['procedures']) ? $_GET['procedures'] : ''; ?>" readonly>
            </div>
        </div>

        <div class="input-boxxxx">
            <div class="input-grouppp">
                <div class="input-box">
                    <label for="request_date">Data</label>
                    <input type="text" id="request_date" name="request_date" value="<?php echo isset($_GET['request_date']) ? $_GET['request_date'] : ''; ?>" readonly>
                </div>

                <div class="input-box">
                    <label for="time">Hora</label>
                    <input type="text" id="time" name="time" value="<?php echo isset($_GET['time']) ? $_GET['time'] : ''; ?>" readonly>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <p></p>
        </div>
    </footer>

    <script>
        // Função para formatar o CPF conforme o usuário digita
        document.getElementById('cpf').addEventListener('input', function(e) {
            var cpf = e.target.value.replace(/\D/g, ''); // Remove caracteres não numéricos
            if (cpf.length > 3) {
                cpf = cpf.substring(0, 3) + '.' + cpf.substring(3); // Adiciona o primeiro ponto após os 3 primeiros dígitos
            }
            if (cpf.length > 7) {
                cpf = cpf.substring(0, 7) + '.' + cpf.substring(7); // Adiciona o segundo ponto após os 6 primeiros dígitos
            }
            if (cpf.length > 11) {
                cpf = cpf.substring(0, 11) + '-' + cpf.substring(11); // Adiciona o hífen após os 9 primeiros dígitos
            }
            e.target.value = cpf; // Atualiza o valor do campo de entrada
        });
    </script>
</body>

</html>