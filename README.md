# Título do projeto

Um parágrafo da descrição do projeto vai aqui

## 🚀 Começando

Essas instruções permitirão que você obtenha uma cópia do projeto em operação na sua máquina local para fins de desenvolvimento e teste.

![alt text](/projeto/assets/image.png)

### 📋 Pré-requisitos

De que coisas você precisa para instalar o software e como instalá-lo?

```
Ambiente configurado - Php.
Open Php - Vscode.
Xampp.
Adicionar arquivo do projeto dentro do htdocs xampp.
```

### 🔧 Instalação

Primeiramente Iremos iniciar nosso projeto e configurar nosso Banco para receber os dados.
Nessa etapa :

Inicie Xampp Control Paneel.
Starte Apache e MySQL.

Tudo dando certo
Inicie No navegador Web : 
```
http://localhost/phpmyadmin

```

E Crie um novo banco com:

Nome: sitcon.
Agora crie uma tabela : 
```
CREATE TABLE sitcon (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_name VARCHAR(255) NOT NULL,
    birthdate DATE NOT NULL,
    professional VARCHAR(255) NOT NULL,
    request_type VARCHAR(255) NOT NULL,
    request_date DATE,
    clinical_requests VARCHAR(255) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    procedures VARCHAR(255) NOT NULL,
    time VARCHAR(10) NOT NULL
);

```

Após isto o ambiente está pronto para os testes.

## ⚙️ Executando os testes

Explicar como executar os testes automatizados para este sistema.
Verifique se no main.php o direcionamento para o banco está correto.

```
$servername = "localhost";
$username = "root";
$password = "";
$database = "sitcon";
port = "3312";
```
Como pode ver rodo na porta 3312 e as informaçãoes de acesso do meu banco.

Concluido:

Agora no arquivo main.php : 
Clique com o botão esquerdo em Open PHP/HTML/Js in browser.
Execute o projeto.

### 🔩 Analise os testes de ponta a ponta

Ao abrir o projeto preenchar todos os campos.

```
Nome do Paciente.
Data de nascimento.
CPF.
Profissional.
Solicitação Clinicas.
Tipo Solicitação. 
Procedimentos.
Data.
Hora.
```
Clique em Salvar após isto.

### ⌨️ E testes de estilo de codificação

Agora os Dados foram enviados ao Banco de Dados e Retornados na pagina seguinte.

As informaçãoes depende totalmente do banco de dados, Tanto exibir como salva-las.


## 🛠️ Construído com


* [Xampp](https://www.apachefriends.org/pt_br/download.html) - 
* [PHP](https://www.php.net/downloads.php) - 
* [Vscode](https://code.visualstudio.com/download) - 



## ✒️ Autores


* **Alef Januario** - *Trabalho Inicial* - [umdesenvolvedor](https://www.linkedin.com/in/alef-januario-arruda/)



## 📄 Licença

Este projeto está sob a licença (de AlefJanuarioArruda) -


---
⌨️ com ❤️ 