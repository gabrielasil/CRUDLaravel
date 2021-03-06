# CRUD Laravel
> Gerenciamento de usuários

Nesse projeto é possível realizar o gerenciamento de um banco de dados que contém usuários, podendo adicionar, visualizar, editar e remover os mesmos. Para cada usuário é necessário haver um nome, um email e uma senha. 

## Instalação

Para a execução do projeto, é preciso ter instalado o framework de PHP Laravel, o que pode ser feito com auxilio da ferramenta de gerenciamento [Composer](https://getcomposer.org/). Além disso, é necessário ter a ferramenta [xampp](https://www.apachefriends.org/pt_br/download.html) ou similar para criação de um servidor local. 

## Importação do Banco de Dados

Primeiramente, após inicialização do Apache e MySQL pelo xampp, deve-se importar o arquivo "laravel.sql" para um banco de dados chamado "laravel" em http://localhost/phpmyadmin.

## Execução do projeto 

Após a instalação do laravel, execução do servidor e importação do banco de dados, deve-se ir na pasta do repositório no Prompt de Comando e executar os seguintes:

```sh
composer update
```

```sh
php artisan serve
```

Após a execução, será possível acessar o projeto pelo link http://localhost:8000/users

OBS: caso ao realizar o composer update ocorra o erro "500" ao abrir o link indicado acima, basta executar os seguintes comandos na pasta do projeto:

```sh
copy .env.example .env
```
```sh
php artisan key:generate
```

Logo após, ele irá funcionar normalmente.

## Exemplo de uso

Na tela inicial, para cadastrar um novo usuário é preciso clicar no botão de "Cadastrar", sendo redirecionado para a página de Cadastro. Nessa página, deve-se preencher os campos de Nome, Email e Senha, e se todas as condições estiverem satisfeitas, ao clicar em "Cadastrar", o usuário já será adicionado ao banco e listado na página inicial.

Ao lado dos nomes dos usuários listados na página inicial, há as opções de "Visualizar", "Editar" e "Deletar". Na opção de "Visualizar", será redirecionado à uma nova página constando todas as informações do usuário informadas na hora do cadastro.  Na opção "Editar", será possível mudar todas essas informações. Por fim, na opção "Deletar", o usuário será apagado do banco, não sendo mais listado na página inicial.

## Seed para testes 

Para serem realizados testes no projeto, é possível utilizar uma seed para gerar dados automaticamente na tabela usuários. Para isso, deve-se acessar a pasta do repositório no Prompt de Comando, e executar: 

```sh
php artisan db:seed
```

## Informações

Gabriela Melo Silva – [@Gabriela Melo Silva] gabrielamsilva02@gmail.com

https://github.com/gabrielasil/CRUDLaravel

