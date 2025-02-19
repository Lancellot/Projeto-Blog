<?php
include 'includes/header.php';
session_start();

// Busca
$search = isset($_GET['search']) ? "%{$_GET['search']}%" : '%';

$stmt = $pdo->prepare("SELECT * FROM posts WHERE title LIKE ? OR content LIKE ? ORDER BY created_at DESC");
$stmt->execute([$search, $search]);
$posts = $stmt->fetchAll();

foreach ($posts as $post):
?>
<div class="card mb-4">
    <div class="card-body">
        <h2 class="card-title"><?= htmlspecialchars($post['title']) ?></h2>
        <p class="text-muted">Categoria: <?= htmlspecialchars($post['category']) ?></p>
        <p class="card-text"><?= nl2br(htmlspecialchars(substr($post['content'], 0, 200))) ?>...</p>
        <a href="posts/post.php?id=<?= $post['id'] ?>" class="btn btn-primary">Ler mais</a>
    </div>
</div>
<?php endforeach; ?>

<?php include 'includes/footer.php'; ?>