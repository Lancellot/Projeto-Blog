CONFIGURAÇÃO DO BLOG

1. Banco de Dados:
- Importe o arquivo sql/database.sql no MySQL
- Atualize as credenciais no arquivo includes/db.php

2. Acesso Admin:
- URL: http://seusite.com/admin/login.php
- Usuário: admin
- Senha: admin123

3. Recursos:
- Homepage: index.php
- Criar posts: create_post.php
- Exemplo post: posts/post.php?id=1

4. Segurança:
- Altere a senha do admin (use password_hash())
- Mantenha o sistema atualizado

5. Personalização:
- Edite header.php e footer.php
- Adicione categorias no create_post.php
- Estilize com Bootstrap