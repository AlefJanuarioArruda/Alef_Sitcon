<?php
include 'model/send_data.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sitcon</title>
    <link rel="stylesheet" href="css/initial.css">
</head>

<body>
    <header>
        <h1 class="logo">
            Alef - sitcon
        </h1>

        <button class="order-onlinee">Solicitações Clínicas</button>
        <button class="order-online"><a href="includes/solicitação.php" target="_blank" style="color: white; text-decoration: none;">Lista de Consultas</a></button>
    </header>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
                <input type="text" id="patient_name" name="patient_name" placeholder="Informe Nome Completo" required>
            </div>

            <div class="input-box">
                <label for="birthdate">Data de nascimento</label>
                <input type="date" id="birthdate" name="birthdate" required>
            </div>
            <div class="input-box">
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf" placeholder="Digite seu Cpf" required>

            </div>

        </div>
        <div class="container">
            <p style="font-size: 13px; font-family: montserrat;">Atenção ! Os Campos com * devem ser preechidos obrigatóriamente.</p>
        </div>

        <div class="input-boxxx">
            <div class="input-boxx">
                <label for="firstname">Profissional</label>
                <input type="text" id="professional" name="professional" placeholder="Digite o nome do Profissional" required>
            </div>

            <div class="input-groupp">
                <div class="input-box">
                    <label for="clinical_requests">Solicitações Clínicas</label>
                    <select id="clinical_requests" name="clinical_requests" required>
                        <option value="">Selecione</option>
                        <option value="Atendimento">Atendimento</option>
                        <option value="Agendamento">Agendamento</option>
                    </select>
                </div>
                <div class="input-box ">
                    <label for="type_requests">Tipo de solicitação</label>
                    <select id="request_type" name="request_type" required>
                        <option value="">Selecione</option>
                        <option value="Consulta">Consulta</option>
                        <option value="Exames Laboratoriais">Exames Laboratoriais</option>
                    </select>
                </div>
                <div class="input-box">
                    <label for="procedures">Procedimentos</label>
                    <select id="procedures" name="procedures" required>
                        <option value="">Selecione</option>
                        <option value="Consulta Pediátrica">Consulta Pediátrica</option>
                        <option value="Consulta Clínico Geral">Consulta Clínico Geral</option>
                        <option value="Hemograma">Hemograma</option>
                        <option value="Glicemia">Glicemia</option>
                        <option value="Colesterol">Colesterol</option>
                        <option value="Triglicerídeos">Triglicerídeos</option>
                    </select>
                </div>
            </div>
            <div class="input-boxxxx">

                <div class="input-grouppp">
                    <div class="input-box">
                        <label for="request_date">Data</label>
                        <input type="date" id="request_date" name="request_date">
                    </div>

                    <div class="input-box">
                        <label for="time">Hora</label>
                        <input type="text" id="time" name="time" placeholder="informe a hora" required>
                    </div>
                </div>
                <div class="containerr">
                    <div></div> <!-- Para deixar espaço vazio na extremidade oposta -->
                    <button type="submit" class="button">Salvar</button>

                </div>
    </form>
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