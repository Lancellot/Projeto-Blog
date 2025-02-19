<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: admin/login.php');
    exit;
}

include '../includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
    $content = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING);
    $category = filter_input(INPUT_POST, 'category', FILTER_SANITIZE_STRING);

    $stmt = $pdo->prepare("INSERT INTO posts (title, content, category) VALUES (?, ?, ?)");
    if ($stmt->execute([$title, $content, $category])) {
        echo '<div class="alert alert-success">Post criado com sucesso!</div>';
    }
}
?>

<form method="POST" class="mb-4">
    <div class="mb-3">
        <input type="text" name="title" class="form-control" placeholder="Título" required>
    </div>
    <div class="mb-3">
        <textarea name="content" class="form-control" rows="5" placeholder="Conteúdo" required></textarea>
    </div>
    <div class="mb-3">
        <select name="category" class="form-select" required>
            <option value="">Selecione uma categoria</option>
            <option value="Tecnologia">Tecnologia</option>
            <option value="Esportes">Esportes</option>
            <option value="Entretenimento">Entretenimento</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success">Publicar</button>
</form>

<?php include '../includes/footer.php'; ?>