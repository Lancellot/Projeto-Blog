## Projeto Blog PHP

![Status-Em%20Desenvolvimento-yellow](https://github.com/user-attachments/assets/5c7c7cbb-ce0b-479c-b9be-15e2423051c1)

## 📋 Descrição
Sistema de blog desenvolvido em PHP com funcionalidades básicas de CRUD (Create, Read, Update, Delete) para posts. O projeto inclui:

Listagem de posts com paginação

Sistema de busca por título ou conteúdo

Visualização individual de posts

Organização por categorias

## 🛠️ Tecnologias Utilizadas
PHP 7.4+

MySQL/MariaDB

Bootstrap 5 (para estilização)

PDO (PHP Data Objects para acesso ao banco de dados)

## 📂 Estrutura do Projeto
```
blog-php/  
├── includes/  
│   ├── header.php  
│   └── footer.php  
├── posts/  
│   └── post.php  
├── index.php  
├── README.md  
└── admin/
│   ├── login.php  
│   └── logout.php  
```
## ✨ Funcionalidades Principais
Listagem de Posts: Exibe todos os posts ordenados por data de criação

Busca Integrada: Pesquisa por título ou conteúdo dos posts

Visualização Resumida: Mostra apenas os primeiros 200 caracteres do conteúdo

Categorias: Organização dos posts por categorias

Design Responsivo: Layout adaptável a diferentes dispositivos

## 🚀 Como Instalar
Clone este repositório:

 ```bash
 git clone [[url-do-repositorio] ](https://github.com/Lancellot/Projeto-Blog)
 Configure o banco de dados:
```
Importe o arquivo SQL (se fornecido)

Configure as credenciais no arquivo de conexão

Configure o servidor web (Apache/Nginx) para apontar para a pasta do projeto

Acesse via navegador:

```
http://localhost/blog-php
```


## ⚙️ Configuração
Edite o arquivo de conexão com o banco de dados para incluir suas credenciais. Certifique-se de que:

O PHP está instalado (versão 7.4 ou superior)

Extensão PDO para MySQL está habilitada

O servidor de banco de dados está rodando

## 📝 Personalização
Para adicionar novas funcionalidades:

Novos campos nos posts: Modifique a tabela do banco de dados e atualize as queries

Novas categorias: Adicione diretamente no banco de dados ou crie um CRUD para categorias

Estilos: Edite os arquivos CSS ou modifique as classes Bootstrap no template

## 🔒 Segurança
Utiliza htmlspecialchars para prevenir XSS

Usa nl2br para preservar quebras de linha

Implementa prepared statements via PDO para prevenir SQL injection

## 📄 Licença
Este projeto está licenciado sob a licença MIT - veja o arquivo LICENSE para detalhes.
