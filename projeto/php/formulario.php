<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="css/home.css">
    </head>
<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="patient_name">Nome do Paciente</label>
                <input type="text" id="patient_name" name="patient_name" required>
            </div>

            <div class="form-group">
                <label for="birthdate">Data de nascimento</label>
                <input type="date" id="birthdate" name="birthdate" required>
            </div>

            <div class="form-group">
                <label for="professional">Profissional</label>
                <input type="text" id="professional" name="professional" required>
            </div>

            <div class="form-group">
                <label for="request_type">Tipo de solicitação*</label>
                <select id="request_type" name="request_type" required>
                    <option value="">Selecione</option>
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                </select>
            </div>

            <div class="form-group">
                <label for="request_date">Data</label>
                <input type="date" id="request_date" name="request_date">
            </div>

            <div class="form-group">
                <label for="clinical_requests">Solicitações Clínicas</label>
                <select id="clinical_requests" name="clinical_requests" required>
                    <option value="">Selecione</option>
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                </select>
            </div>

            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf" required>
                <p style="font-size: 10px;">Atenção ! Os Campos com * devem ser preechidos obrigatóriamente.</p>
            </div>

            <div class="form-group">
                <label for="procedures">Procedimentos</label>
                <select id="procedures" name="procedures" required>
                    <option value="">Selecione</option>
                    <option value="option1">Option 1</option>
                    <option value="option2">Option 2</option>
                </select>
            </div>

            <div class="form-group">
                <label for="time">Hora*</label>
                <input type="text" id="time" name="time" required>
            </div>

            <input type="submit" value="Salvar">
            <a href="index.php" class="button">Voltar</a>
        </form>
    </div>
</body>
</html>