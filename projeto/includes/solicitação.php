<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Banco de Dados</title>
    <link rel="stylesheet" href="../css/pedidos.css">
</head>

<body>
    <header>
        <h1 class="logo">
            Alef - sitcon
        </h1>
        <button class="order-online"><a href="../main.php" target="_blank" style="color: white; text-decoration: none;font-family: Montserrat">Solicitações Clínicas</a></button>

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
        <div class="container">
            <table class="content-table">
                <thead>
                    <tr>
                        <th>Nome do Paciente</th>
                        <th>Profissional</th>
                        <th>Tipo de Solicitação</th>
                        <th>Data</th>
                        <th>Solicitações Clínicas</th>
                        <th>Procedimentos</th>
                        <th>Hora</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../model/solicitacao_request.php';
                    ?>
                </tbody>
            </table>
            <div style="text-align: center; margin-top: 20px;">

                <?php if ($page > 1) : ?>
                    <a href="?page=<?= ($page - 1) ?>" style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%);">&#8592;</a>
                <?php endif; ?>


                <div style="display: inline-block; border-radius: 100px; background-color: #ffffff; padding: 10px;">

                    <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
                        <a href="?page=<?= $i ?>" style="margin-right: 5px; text-decoration: none; color: blue;"><?= $i ?></a>
                    <?php endfor; ?>
                </div>


                <?php if ($page < $total_pages) : ?>
                    <a href="?page=<?= ($page + 1) ?>" style="position: absolute; right: 20px; top: 50%; transform: translateY(-50%);">&#8594;</a>
                <?php endif; ?>
            </div>
        </div>
</body>

</html>