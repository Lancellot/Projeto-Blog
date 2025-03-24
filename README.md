## Projeto Blog PHP
<svg xmlns="http://www.w3.org/2000/svg" width="194" height="20" role="img" aria-label="Status: Em%20Desenvolvimento"><title>Status: Em%20Desenvolvimento</title><linearGradient id="s" x2="0" y2="100%"><stop offset="0" stop-color="#bbb" stop-opacity=".1"/><stop offset="1" stop-opacity=".1"/></linearGradient><clipPath id="r"><rect width="194" height="20" rx="3" fill="#fff"/></clipPath><g clip-path="url(#r)"><rect width="45" height="20" fill="#555"/><rect x="45" width="149" height="20" fill="#dfb317"/><rect width="194" height="20" fill="url(#s)"/></g><g fill="#fff" text-anchor="middle" font-family="Verdana,Geneva,DejaVu Sans,sans-serif" text-rendering="geometricPrecision" font-size="110"><text aria-hidden="true" x="235" y="150" fill="#010101" fill-opacity=".3" transform="scale(.1)" textLength="350">Status</text><text x="235" y="140" transform="scale(.1)" fill="#fff" textLength="350">Status</text><text aria-hidden="true" x="1185" y="150" fill="#010101" fill-opacity=".3" transform="scale(.1)" textLength="1390">Em%20Desenvolvimento</text><text x="1185" y="140" transform="scale(.1)" fill="#fff" textLength="1390">Em%20Desenvolvimento</text></g></svg>

# 📋 Descrição
Sistema de blog desenvolvido em PHP com funcionalidades básicas de CRUD (Create, Read, Update, Delete) para posts. O projeto inclui:

Listagem de posts com paginação

Sistema de busca por título ou conteúdo

Visualização individual de posts

Organização por categorias

# 🛠️ Tecnologias Utilizadas
PHP 7.4+

MySQL/MariaDB

Bootstrap 5 (para estilização)

PDO (PHP Data Objects para acesso ao banco de dados)

# 📂 Estrutura do Projeto

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

## ✨ Funcionalidades Principais
Listagem de Posts: Exibe todos os posts ordenados por data de criação

Busca Integrada: Pesquisa por título ou conteúdo dos posts

Visualização Resumida: Mostra apenas os primeiros 200 caracteres do conteúdo

Categorias: Organização dos posts por categorias

Design Responsivo: Layout adaptável a diferentes dispositivos

##🚀 Como Instalar
Clone este repositório:

´´´bash
  git clone [[url-do-repositorio] ](https://github.com/Lancellot/Projeto-Blog)
  Configure o banco de dados:
´´´
Importe o arquivo SQL (se fornecido)

Configure as credenciais no arquivo de conexão

Configure o servidor web (Apache/Nginx) para apontar para a pasta do projeto

Acesse via navegador:

´´´
http://localhost/blog-php
´´´


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
