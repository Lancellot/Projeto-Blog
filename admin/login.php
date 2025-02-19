<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['loggedin'] = true;
        header('Location: ../create_post.php');
        exit;
    } else {
        $error = "Credenciais inválidas!";
    }
}
?>

<form method="POST" class="container mt-5" style="max-width: 400px;">
    <h2 class="mb-4">Login</h2>
    <?php if (isset($error)): ?>
    <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>
    
    <div class="mb-3">
        <input type="text" name="username" class="form-control" placeholder="Usuário" required>
    </div>
    <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Senha" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">Entrar</button>
</form>