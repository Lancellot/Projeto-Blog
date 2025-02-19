<?php
include '../includes/header.php';

$post_id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$stmt = $pdo->prepare("SELECT * FROM posts WHERE id = ?");
$stmt->execute([$post_id]);
$post = $stmt->fetch();

// Comentários
$stmt = $pdo->prepare("SELECT * FROM comments WHERE post_id = ? ORDER BY created_at DESC");
$stmt->execute([$post_id]);
$comments = $stmt->fetchAll();
?>

<article>
    <h1><?= htmlspecialchars($post['title']) ?></h1>
    <p class="text-muted"><?= date('d/m/Y H:i', strtotime($post['created_at'])) ?></p>
    <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
</article>

<section class="mt-5">
    <h3>Comentários</h3>
    <form method="POST" action="../add_comment.php">
        <input type="hidden" name="post_id" value="<?= $post_id ?>">
        <div class="mb-3">
            <input type="text" name="author" class="form-control" placeholder="Seu nome" required>
        </div>
        <div class="mb-3">
            <textarea name="comment" class="form-control" rows="3" placeholder="Seu comentário" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <?php foreach ($comments as $comment): ?>
    <div class="card mt-3">
        <div class="card-body">
            <h5><?= htmlspecialchars($comment['author']) ?></h5>
            <p class="card-text"><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
            <small class="text-muted"><?= date('d/m/Y H:i', strtotime($comment['created_at'])) ?></small>
        </div>
    </div>
    <?php endforeach; ?>
</section>

<?php include '../includes/footer.php'; ?>