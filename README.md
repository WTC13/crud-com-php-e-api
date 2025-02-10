# Tela de Cadastro e Gerenciamento de Perfis

Este projeto é uma aplicação web desenvolvida em PHP que permite o cadastro, listagem e gerenciamento de perfis de usuários. O objetivo é fornecer uma interface simples para adicionar novos usuários e visualizar os perfis cadastrados.

## Tecnologias Utilizadas

- **PHP**: Linguagem de programação utilizada para o desenvolvimento do backend da aplicação.
- **HTML/CSS**: Para a estruturação e estilização das páginas web.
- **MySQL**: Banco de dados utilizado para armazenar as informações dos perfis.

## Estrutura do Projeto

A estrutura de diretórios do projeto é a seguinte:

```
/
├── cadastro.php
├── conexao.php
├── listagem.php
└── README.md
```

- **cadastro.php**: Página responsável pelo formulário de cadastro de novos perfis.
- **conexao.php**: Arquivo que gerencia a conexão com o banco de dados MySQL.
- **listagem.php**: Página que exibe a lista de perfis cadastrados.
- **README.md**: Arquivo de documentação do projeto.

## Funcionalidades

- **Cadastro de Perfis**: Permite adicionar novos perfis de usuários através de um formulário.
- **Listagem de Perfis**: Exibe uma lista com todos os perfis cadastrados no sistema.

## Como Executar o Projeto

1. **Clone o repositório**:

   ```bash
   git clone https://github.com/WTC13/tcc.git
   ```

2. **Configure o ambiente**:

   - Certifique-se de ter um servidor web com suporte a PHP e um banco de dados MySQL.
   - Crie um banco de dados no MySQL para o projeto.
   - No arquivo `conexao.php`, configure as credenciais de acesso ao banco de dados:

     ```php
     <?php
     $servername = "localhost";
     $username = "seu_usuario";
     $password = "sua_senha";
     $dbname = "nome_do_banco_de_dados";

     // Cria a conexão
     $conn = new mysqli($servername, $username, $password, $dbname);

     // Verifica a conexão
     if ($conn->connect_error) {
         die("Conexão falhou: " . $conn->connect_error);
     }
     ?>
     ```

3. **Crie a tabela no banco de dados**:

   Execute o seguinte comando SQL para criar a tabela de perfis:

   ```sql
   CREATE TABLE perfis (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nome VARCHAR(100) NOT NULL,
       email VARCHAR(100) NOT NULL,
       data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

4. **Execute a aplicação**:

   - Coloque os arquivos do projeto no diretório raiz do seu servidor web.
   - Acesse `cadastro.php` pelo navegador para adicionar novos perfis.
   - Acesse `listagem.php` para visualizar os perfis cadastrados.

## Personalização

Você pode personalizar o projeto de acordo com suas necessidades, como:

- Adicionar novos campos ao formulário de cadastro e à tabela no banco de dados.
- Implementar funcionalidades de edição e exclusão de perfis.
- Melhorar a interface com estilos CSS adicionais.

## Contribuição

Atualmente, este projeto é pessoal e não está aberto para contribuições externas. No entanto, feedbacks e sugestões são bem-vindos. Sinta-se à vontade para abrir uma issue ou entrar em contato diretamente.

## Autor

Desenvolvido por [Wendell Costa](https://github.com/WTC13), Desenvolvedor FullStack baseado em São Paulo - SP.
