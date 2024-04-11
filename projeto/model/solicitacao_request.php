<?php
            // Código PHP para buscar e exibir os dados do banco de dados
            $servername = "localhost"; // Se o MySQL estiver rodando localmente
            $username = "root"; // Nome de usuário padrão do MySQL no XAMPP
            $password = ""; // Senha vazia por padrão
            $database = "sitcon"; // Substitua pelo nome do seu banco de dados criado no phpMyAdmin
            $port = "3312"; // Porta na qual o servidor MySQL está rodando

            $conn = new mysqli($servername, $username, $password, $database, $port);

            if ($conn->connect_error) {
                die("Falha na conexão com o banco de dados: " . $conn->connect_error);
            }

            $limit = 10;
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start = ($page - 1) * $limit;

            $sql = "SELECT * FROM sitcondados LIMIT $start, $limit";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["patient_name"]."</td>";
                    echo "<td>".$row["professional"]."</td>";
                    echo "<td>".$row["request_type"]."</td>";
                    echo "<td>".$row["request_date"]."</td>";
                    echo "<td>".$row["clinical_requests"]."</td>";
                    echo "<td>".$row["procedures"]."</td>";
                    echo "<td>".$row["time"]."</td>";
                
                    echo "<td class='button-cell'><a href='dados.php?patient_name=".$row["patient_name"]."&professional=".$row["professional"]."&request_type=".$row["request_type"]."&request_date=".$row["request_date"]."&clinical_requests=".$row["clinical_requests"]."&procedures=".$row["procedures"]."&time=".$row["time"]."&birthdate=".$row["birthdate"]."&cpf=".$row["cpf"]."' class='button' style='text-decoration: none; font-family: Montserrat;'>Dados</a></td>";

                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='10'>Nenhum dado encontrado.</td></tr>";
            }

           
            $sql = "SELECT COUNT(*) AS total FROM sitcondados";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $total_pages = ceil($row["total"] / $limit); 

            $conn->close();
            ?>