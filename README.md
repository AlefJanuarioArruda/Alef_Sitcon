# Teste Alef-Sitcon projeto

Trata-se de um projeto completamente funcional, que está integrado de forma coesa e depende integralmente de um banco de dados para armazenar e extrair informações de maneira eficaz e organizada.
Todas as informações encontram-se abaixo.

## 🚀 Começando

Essas instruções permitirão que você obtenha uma cópia do projeto em operação na sua máquina local para fins de desenvolvimento e teste.

![alt text](/projeto/assets/image.png)
![alt text](/projeto/assets/image-1.png)
![alt text](/projeto/assets/image-4.png)


### 📋 Pré-requisitos

Pronto para instalar ? Aqui estão os elementos essenciais que você vai precisar.

```
Vscode.
Ambiente configurado - Php.
Extensão Open Php/html/js in browser - Vscode.
Xampp.
Adicionar arquivo do projeto dentro do htdocs no xampp.
```

### 🔧 Configuração

Primeiramente Iremos iniciar nosso projeto e configurar nosso Banco para receber os dados.

Nessa etapa :

Abra Xampp Control Paneel.

Inicie Apache e MySQL.

Tudo dando certo.

Inicie No navegador Web : 
```
http://localhost/phpmyadmin

```

Crie um novo Banco de Dados com:

Nome: sitcon.

Agora crie a tabela : 
```
CREATE TABLE sitcondados (
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
![phpmyadmin](/projeto/assets/image-2.png)

Após isto o ambiente está pronto para os testes.

## ⚙️ Executando os testes

Como executar os testes para este sistema.

Verifique em:
../model/acess.php o direcionamento para o seu banco se está correto.

```
$servername = "localhost";
$username = "root";
$password = "";
$database = "sitcon";
port = "3312";
```
Como pode ver eu utilizo a porta 3312 e as informaçãoes de acesso do meu banco.

Concluido:

Agora no arquivo main.php: 

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

Caso ajá algum error não exite em me contatar: 
Email - Alefjanuario900@gmail.com


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